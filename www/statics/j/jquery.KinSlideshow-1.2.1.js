(function($) {
	var KinSlideshow = function(settings){
		settings = $.extend({
			   intervalTime : 5,
			   moveSpeedTime : 400,
			   moveStyle:"left",
			   mouseEvent:"mouseclick",
			   isHasTitleBar:true,
			   titleBar:{titleBar_height:40,titleBar_bgColor:"#000000",titleBar_alpha:0.5},
			   isHasTitleFont:true,
			   titleFont:{TitleFont_size:18,TitleFont_color:"#FFFFFF",TitleFont_family:'Arial,"微软雅黑","黑体","宋体"',TitleFont_weight:"bold"},
			   isHasBtn:true,
			   btn:{btn_bgColor:"",btn_bgHoverColor:"",btn_fontColor:"#CCCCCC",btn_fontHoverColor:"#000000",btn_fontFamily:"",btn_borderColor:"",btn_borderHoverColor:"",btn_borderWidth:0,btn_bgAlpha:1.0}
		  },settings);
	
		  var titleBar_Bak = {titleBar_height:40,titleBar_bgColor:"#000000",titleBar_alpha:0.45};
		  var titleFont_Bak = {TitleFont_size:12,TitleFont_color:"#FFFFFF",TitleFont_family:"Verdana",TitleFont_weight:"bold"};
		  var btn_Bak = {btn_bgColor:"",btn_bgHoverColor:"",btn_fontColor:"",btn_fontHoverColor:"",btn_fontFamily:"",btn_borderColor:"",btn_borderHoverColor:"#FF0000",btn_borderWidth:0,btn_bgAlpha:1.0}; 
		  for (var key in titleBar_Bak){
			  if(settings.titleBar[key] == undefined){
				  settings.titleBar[key] = titleBar_Bak[key];
			  }
		  }	
		  for (var key in titleFont_Bak){
			  if(settings.titleFont[key] == undefined){
				  settings.titleFont[key] = titleFont_Bak[key];
			  }
		  }
		  for (var key in btn_Bak){
			  if(settings.btn[key] == undefined){
				  settings.btn[key] = btn_Bak[key];
			  }
		  }	  
		  
		 var ksthis = this;
		 var ksbs = $(ksthis).selector;
		 var KSS_DateArray = new Array();
		 var KSS_imgaeLength = 0;
		 var KSS_Size =new Array();
		 var KSS_changeFlag = 0;
		 var KSS_IntervalTime = settings.intervalTime;
		 var KSS_setInterval;
		 var KSS_firstMoveFlag = true;
		 var getTitleBar_Height;
		 
		 if(isNaN(KSS_IntervalTime) || KSS_IntervalTime <= 1){
				KSS_IntervalTime = 5;
		 }
		 if(settings.moveSpeedTime > 500){
			 settings.moveSpeedTime = 500;
		 }else if(settings.moveSpeedTime < 100){
			 settings.moveSpeedTime = 100;
		 }
		 
		 function KSS_initialize(){
			 $(ksthis).css({visibility:"hidden"});
			 $(ksbs+" a img").css({border:0});
			 KSS_start();
			 KSS_mousehover();
		 }
	   
	     function KSS_start(){
			 KSS_imgaeLength = $(ksbs+" a").length;
			 KSS_Size.push($(ksbs+" a img").width());
			 KSS_Size.push($(ksbs+" a img").height());
			 
			$(ksbs+" a img").each(function(i){
				KSS_DateArray.push($(this).attr("alt"));		
			});
			$(ksbs+" a").wrapAll("<div id='KSS_content'></div>");
		    $(ksbs).find("#KSS_content").clone().attr("id","KSS_contentClone").appendTo(ksthis);
			KSS_setTitleBar();
			KSS_setTitleFont();
			KSS_setBtn();
			KSS_action();
			KSS_btnEvent(settings.mouseEvent);
			$(ksthis).css({visibility:"visible"});
		 }
		 function KSS_setTitleBar(){
			$(ksthis).css({width:"100%",height:KSS_Size[1],overflow:"hidden",position:"relative"});
			$(ksthis).append("<div class='KSS_titleBar'></div>");
			getTitleBar_Height = settings.titleBar.titleBar_height;
			
			if(isNaN(getTitleBar_Height)){
				getTitleBar_Height = 40;
			}else if(getTitleBar_Height < 25){
				getTitleBar_Height = 25;
			}
			
			$(ksbs+" .KSS_titleBar").css({height:53,width:"100%",position:"absolute",bottom:0,left:0});
			 if(settings.isHasTitleBar){
			 		$(ksbs+" .KSS_titleBar").css({background:settings.titleBar.titleBar_bgColor,opacity:settings.titleBar.titleBar_alpha});
			 }
		 }
		 function KSS_setTitleFont(){
			 if(settings.isHasTitleFont){
				$(ksthis).append("<div class='KSS_titleBox'><h2 class='title' style='margin:3px 0 0 6px;padding:0;'></h2></div>");
				$(ksbs+" .KSS_titleBox").css({height:getTitleBar_Height,width:"990px",marginLeft:'-375px',position:"absolute",bottom:0,left:'50%',textAlign:'left'});
				$(ksbs+" .KSS_titleBox h2").css({fontSize:'18px',color:'#fff',fontFamily:'Arial,"微软雅黑","黑体","宋体"',fontWeight:'normal'});
				setTiltFontShow(0);
			 }
		 }
		 function KSS_setBtn(){
			 if(settings.btn.btn_borderWidth > 2){settings.btn.btn_borderWidth = 2}
			 if(settings.btn.btn_borderWidth < 0 || isNaN(settings.btn.btn_borderWidth)){settings.btn.btn_borderWidth = 0}
			 if(settings.isHasBtn && KSS_imgaeLength >= 2){
				 $(ksthis).append("<div class='KSS_btnBox' style='position:absolute;left:50%;margin-left:-495px;width:990px;bottom:20px;z-index:100'></div>");
				 var KSS_btnList = "";
				 for(i=1;i<=KSS_imgaeLength;i++){
						KSS_btnList+="<li>"+KSS_DateArray[i-1]+"</li>";
				 }
				 KSS_btnList = "<ul id='btnlistID' style='margin:0;padding:0; overflow:hidden'>"+KSS_btnList+"</ul>";
				 $(ksbs+" .KSS_btnBox").append(KSS_btnList);
				 $(ksbs+" .KSS_btnBox #btnlistID li").css({textIndent:'-5000px',background:'url(http://wwwcdn.gaojie1oo.com/statics/i/f.png) no-repeat',cursor:'pointer',float:'left',width:'12px',height:'12px',marginRight:'12px'});
	
				 $(ksbs+" #btnlistID li:eq(0)").css({textIndent:'-5000px',background:'url(http://wwwcdn.gaojie1oo.com/statics/i/f_on.png) no-repeat',cursor:'pointer',float:'left',width:'12px',height:'12px',marginRight:'12px'});
			 }
		 }
		 function KSS_action(){
			switch(settings.moveStyle){
				case "left":  KSS_moveLeft(); break;
				case "right": KSS_moveRight();break;
				case "up":    KSS_moveUp();   break;
				case "down":  KSS_moveDown(); break;
				default:      settings.moveStyle = "left"; KSS_moveLeft();
			}	 
		 }
		 function KSS_moveLeft(){
			$(ksbs+" div:lt(2)").wrapAll("<div id='KSS_moveBox'></div>");
			$(ksbs).find("#KSS_moveBox").css({width:"100%",height:KSS_Size[1],overflow:"hidden",position:"relative"});
			$(ksbs).find("#KSS_content").css({float:"left"});
			$(ksbs).find("#KSS_contentClone").css({float:"left"});
			$(ksbs+" #KSS_moveBox div").wrapAll("<div id='KSS_XposBox'></div>");
			$(ksbs).find("#KSS_XposBox").css({float:"left",width:"2000%"});
			
			KSS_setInterval = setInterval(function(){KSS_move(settings.moveStyle)},KSS_IntervalTime*1000+settings.moveSpeedTime);
		 }
		 function KSS_moveRight(){
			$(ksbs+" div:lt(2)").wrapAll("<div id='KSS_moveBox'></div>");
			$(ksbs).find("#KSS_moveBox").css({width:"100%",height:KSS_Size[1],overflow:"hidden",position:"relative"});
			$(ksbs).find("#KSS_content").css({float:"left"});
			$(ksbs).find("#KSS_contentClone").css({float:"left"});
			$(ksbs+" #KSS_moveBox div").wrapAll("<div id='KSS_XposBox'></div>");
			$(ksbs).find("#KSS_XposBox").css({float:"left",width:"2000%"});
			$(ksbs).find("#KSS_contentClone").html("");
			$(ksbs+" #KSS_content a").wrap("<span></span>");
			$(ksbs+" #KSS_content a").each(function(i){
				$(ksbs).find("#KSS_contentClone").prepend($(ksbs+" #KSS_content span:eq("+i+")").html());
			});
			
			$(ksbs).find("#KSS_content").html($(ksbs).find("#KSS_contentClone").html());
			var KSS_offsetLeft = (KSS_imgaeLength-1)*KSS_Size[0];
			$(ksbs).find("#KSS_moveBox").scrollLeft(KSS_offsetLeft);
			KSS_setInterval = setInterval(function(){KSS_move(settings.moveStyle)},KSS_IntervalTime*1000+settings.moveSpeedTime);
		 }
		 function KSS_moveUp(){
			$(ksbs+" div:lt(2)").wrapAll("<div id='KSS_moveBox'></div>");
			$(ksbs).find("#KSS_moveBox").css({width:"100%",height:KSS_Size[1],overflow:"hidden",position:"relative"});
			$(ksbs).find("#KSS_moveBox").animate({scrollTop: 0}, 1);
			KSS_setInterval = setInterval(function(){KSS_move(settings.moveStyle)},KSS_IntervalTime*1000+settings.moveSpeedTime);
			
		 }
		 
		 function KSS_moveDown(){
			$(ksbs+" div:lt(2)").wrapAll("<div id='KSS_moveBox'></div>");
			$(ksbs).find("#KSS_moveBox").css({width:"100%",height:KSS_Size[1],overflow:"hidden",position:"relative"});
			$(ksbs).find("#KSS_contentClone").html("");
			$(ksbs+" #KSS_content a").wrap("<span></span>");
			$(ksbs+" #KSS_content a").each(function(i){
				$(ksbs).find("#KSS_contentClone").prepend($(ksbs+" #KSS_content span:eq("+i+")").html());
			});
			$(ksbs).find("#KSS_content").html($(ksbs).find("#KSS_contentClone").html());
			
			var KSS_offsetTop = (KSS_imgaeLength-1)*KSS_Size[1];
			$(ksbs).find("#KSS_moveBox").animate({scrollTop: KSS_offsetTop}, 1);
			KSS_setInterval = setInterval(function(){KSS_move(settings.moveStyle)},KSS_IntervalTime*1000+settings.moveSpeedTime);
		 }
		function KSS_move(style){
				
				switch(style){
					case "left":
						if(KSS_changeFlag >= KSS_imgaeLength){
							KSS_changeFlag = 0;
							$(ksbs).find("#KSS_moveBox").scrollLeft(0);
							$(ksbs).find("#KSS_moveBox").animate({scrollLeft:KSS_Size[0]}, settings.moveSpeedTime);
						}else{
							sp =(KSS_changeFlag+1)*KSS_Size[0];
							if ($(ksbs).find("#KSS_moveBox").is(':animated')){ 
								$(ksbs).find("#KSS_moveBox").stop();
								$(ksbs).find("#KSS_moveBox").animate({scrollLeft: sp}, settings.moveSpeedTime);
							}else{
								$(ksbs).find("#KSS_moveBox").animate({scrollLeft: sp}, settings.moveSpeedTime);
							}
						}
						setTiltFontShow(KSS_changeFlag+1);
						break;
					case "right":
						var KSS_offsetLeft = (KSS_imgaeLength-1)*KSS_Size[0];
						if(KSS_changeFlag >= KSS_imgaeLength){
							KSS_changeFlag = 0;
							$(ksbs).find("#KSS_moveBox").scrollLeft(KSS_offsetLeft+KSS_Size[0]);
							$(ksbs).find("#KSS_moveBox").animate({scrollLeft:KSS_offsetLeft}, settings.moveSpeedTime);
						}else{
							if(KSS_firstMoveFlag){
								KSS_changeFlag++;
								KSS_firstMoveFlag = false;
							}
							sp =KSS_offsetLeft-(KSS_changeFlag*KSS_Size[0]);
							if ($(ksbs).find("#KSS_moveBox").is(':animated')){ 
								$(ksbs).find("#KSS_moveBox").stop();
								$(ksbs).find("#KSS_moveBox").animate({scrollLeft: sp}, settings.moveSpeedTime);
							}else{
								$(ksbs).find("#KSS_moveBox").animate({scrollLeft: sp}, settings.moveSpeedTime);
							}
						}
						setTiltFontShow(KSS_changeFlag);
						break;
					case "up":
						if(KSS_changeFlag >= KSS_imgaeLength){
							KSS_changeFlag = 0;
							$(ksbs).find("#KSS_moveBox").scrollTop(0);
							$(ksbs).find("#KSS_moveBox").animate({scrollTop:KSS_Size[1]}, settings.moveSpeedTime);
						}else{
							sp =(KSS_changeFlag+1)*KSS_Size[1];
							if ($(ksbs).find("#KSS_moveBox").is(':animated')){ 
								$(ksbs).find("#KSS_moveBox").stop();
								$(ksbs).find("#KSS_moveBox").animate({scrollTop: sp}, settings.moveSpeedTime);
							}else{
								$(ksbs).find("#KSS_moveBox").animate({scrollTop: sp}, settings.moveSpeedTime);
							}
						}
						setTiltFontShow(KSS_changeFlag+1);
						break;
					case "down":
						var KSS_offsetLeft = (KSS_imgaeLength-1)*KSS_Size[1];
						if(KSS_changeFlag >= KSS_imgaeLength){
							KSS_changeFlag = 0;
							$(ksbs).find("#KSS_moveBox").scrollTop(KSS_offsetLeft+KSS_Size[1]);
							$(ksbs).find("#KSS_moveBox").animate({scrollTop:KSS_offsetLeft}, settings.moveSpeedTime);
						}else{
							if(KSS_firstMoveFlag){
								KSS_changeFlag++;
								KSS_firstMoveFlag = false;
							}
							sp =KSS_offsetLeft-(KSS_changeFlag*KSS_Size[1]);
							if ($(ksbs).find("#KSS_moveBox").is(':animated')){ 
								$(ksbs).find("#KSS_moveBox").stop();
								$(ksbs).find("#KSS_moveBox").animate({scrollTop: sp}, settings.moveSpeedTime);
							}else{
								$(ksbs).find("#KSS_moveBox").animate({scrollTop: sp}, settings.moveSpeedTime);
							}
						}
						setTiltFontShow(KSS_changeFlag);
						break;
				}
				
				KSS_changeFlag++;
		}	 
		 
		 function setTiltFontShow(index){
			 if(index == KSS_imgaeLength){index = 0}
//			 if(settings.isHasTitleFont){
//				$(ksbs+" .KSS_titleBox h2.title").html(KSS_DateArray[index]);
//			 }
			$(ksbs+" #btnlistID li").each(function(i){
				if(i == index){
					$(this).css({textIndent:'-5000px',background:'url(http://wwwcdn.gaojie1oo.com/statics/i/f_on.png) no-repeat',cursor:'pointer',float:'left',width:'12px',height:'12px',marginRight:'12px'});						
				}else{
					$(this).css({textIndent:'-5000px',background:'url(http://wwwcdn.gaojie1oo.com/statics/i/f.png) no-repeat',cursor:'pointer',float:'left',width:'12px',height:'12px',marginRight:'12px'});						
				}
			 });
		 }
		
		function KSS_btnEvent(Event){
			switch(Event){
				case "mouseover" : KSS_btnMouseover(); break;
				case "mouseclick" : KSS_btnMouseclick(); break;			
				default : KSS_btnMouseclick();
			}
		}
		
		function KSS_btnMouseover(){
			$(ksbs+" #btnlistID li").mouseover(function(){
				var curLiIndex = $(ksbs+" #btnlistID li").index($(this)); 
		  		switch(settings.moveStyle){
					case  "left" :
						KSS_changeFlag = curLiIndex-1; break;
					case  "right" :
						if(KSS_firstMoveFlag){
							KSS_changeFlag = curLiIndex-1; break;
						}else{
							KSS_changeFlag = curLiIndex; break;
						}
					case  "up" :
						KSS_changeFlag = curLiIndex-1; break;
					case  "down" :
						if(KSS_firstMoveFlag){
							KSS_changeFlag = curLiIndex-1; break;
						}else{
							KSS_changeFlag = curLiIndex; break;
						}
				}
				KSS_move(settings.moveStyle);
				$(ksbs+" #btnlistID li").each(function(i){
					if(i ==curLiIndex){
						$(this).css({textIndent:'-5000px',background:'url(http://wwwcdn.gaojie1oo.com/statics/i/f_on.png) no-repeat',cursor:'pointer',float:'left',width:'12px',height:'12px',marginRight:'12px'});						
					}else{
						$(this).css({textIndent:'-5000px',background:'url(http://wwwcdn.gaojie1oo.com/statics/i/f.png) no-repeat',cursor:'pointer',float:'left',width:'12px',height:'12px',marginRight:'12px'});						
					}
				});
			});
		}
		function KSS_btnMouseclick(){
			$(ksbs+" #btnlistID li").click(function(){
				var curLiIndex = $(ksbs+" #btnlistID li").index($(this)); 
				switch(settings.moveStyle){
					case  "left" :
						KSS_changeFlag = curLiIndex-1; break;
					case  "right" :
						if(KSS_firstMoveFlag){
							KSS_changeFlag = curLiIndex-1; break;
						}else{
							KSS_changeFlag = curLiIndex; break;
						}
					case  "up" :
						KSS_changeFlag = curLiIndex-1; break;
					case  "down" :
						if(KSS_firstMoveFlag){
							KSS_changeFlag = curLiIndex-1; break;
						}else{
							KSS_changeFlag = curLiIndex; break;
						}					
					
				}
				KSS_move(settings.moveStyle);
				$(ksbs+" #btnlistID li").each(function(i){
					if(i ==curLiIndex){
						$(this).css({background:settings.btn.btn_bgHoverColor,borderColor:settings.btn.btn_borderHoverColor,color:settings.btn.btn_fontHoverColor,fontWeight:"bold"});						
					}else{
						$(this).css({background:settings.btn.btn_bgColor,borderColor:settings.btn.btn_borderColor,color:settings.btn.btn_fontColor,fontWeight:"normal"});						
					}
				});
			});
				
		}
		function KSS_mousehover(){
				$(ksbs+" #btnlistID li").mouseover(function(){
					clearInterval(KSS_setInterval); 
				});
				$(ksbs+" #btnlistID li").mouseout(function(){
					KSS_setInterval = setInterval(function(){KSS_move(settings.moveStyle)},KSS_IntervalTime*1000+settings.moveSpeedTime);
				});
		}
		
		return KSS_initialize();  
	};
	
	$.fn.extend({
		KinSlideshow: KinSlideshow
	});
})(TMJF);
<?php /* Smarty version 2.6.17, created on 2018-05-04 02:02:01
         compiled from user_message.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'user_message.html', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='blocksit.min.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='xMarquee.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
<style>
.grid img{ display:none;}
</style>
<script>
$(document).ready(function() {//vendor script
	$('#header')
	.css({'top':-50 })
	.delay(1000)
	.animate({'top': 0}, 800);
	
	$('#footer')
	.css({'bottom':-15 })
	.delay(1000)
	.animate({'bottom': 0}, 800);
	
	//blocksit define
	$(window).load( function() {$('#container').BlocksIt({
			numOfCol: 5,
			offsetX: 8,
			offsetY: 8
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
	var arrCookie = document.cookie.split(/;\s*/); 
	var userMessageTitle = '';
	var userMessageMessage = '';
	var u_name = '';
	//遍历cookie数组，处理每个cookie对 
	for(var i=0;i<arrCookie.length;i++){
		var arr = arrCookie[i].split("=");
		//找到名称为userId的cookie，并返回它的值
		if("userMessageTitle" == arr[0]){
			userMessageTitle = decodeURIComponent(arr[1]); 
		}
		if("userMessageMessage" == arr[0]){
			userMessageMessage = decodeURIComponent(arr[1]); 
		}
		if("u_name" == arr[0]){
			u_name = decodeURIComponent(arr[1]); 
		}
	}
	
	$("#title").val(userMessageTitle);
	$("#message").val(userMessageMessage);
	
	$("#submit").click(function(){
		var title = $("#title").val();
		var message = $("#message").val();
		var img = $("#fileField").val();
		var img_num = '<?php echo $this->_tpl_vars['img_num']; ?>
';
		var root_domain = '<?php echo @ROOT_DOMAIN; ?>
';
		
		if(u_name == '') {
			if(confirm('您未登录，是否去登录')) {
				document.cookie="userMessageTitle="+title;
				document.cookie="userMessageMessage="+message;
				window.location = root_domain + '/passport/login.php?from='+root_domain+'/message/show.php';
			}
			return false;
		}
		if(title.length>24) {
			alert('标题过长！请输入12字内的标题');
			return false;
		}
		if(message == '' || title == '') {
			alert('标题或内容不能为空！');
			return false;
		}
		alert('添加成功!客服妹子审核中...');
		return true;
		$.post(
				root_domain+'/message/add.php',
				{title: title,message:message},
				function(data){
					alert(data.msg);
					if(data.ok) {
						document.cookie="userMessageTitle= ";
						document.cookie="userMessageMessage= ";
						window.location.reload(true);
					}
				},
				'json'
		);
		return false;
	});
});
</script>
</head><body>
<div id="fade" class="black_overlay"></div>
<div id="fade2" class="black_overla"></div>
<!-- Content -->
<div class="wapxtags">
  <ul>
    <li class="active"><a href="http://m.shunjubao.xyz/account/user_pms.php" >留言聚宝</a> </li>
  </ul>
  <div class="clear"></div>
</div>
<style>
.liuyantijiao{filter:alpha(opacity=80);/*IE*/
opacity:0.8;/*FF*/border:1px solid #e2e2e2;bottom:0;_margin-bottom:0;width:100%;height:48px;cursor:pointer;background:#000;position:fixed;right:1px;cursor:pointer;_position:absolute;_bottom:auto;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)))}
.liuyantijiao a{ font-size:14px;color:#fff;height:48px;line-height:48px;border-right:1px solid #fff;display:inline-table;display:inline-block;zoom:1;*display:inline;width:100%;text-align:center; font-weight:900; font-family:'微软雅黑';}
/*站内信*/
.wapxtags{text-align:left;height:30px;line-height:30px;border-bottom:1px solid #ddd;margin:10px auto auto auto;width:97%;}
.wapxtags ul{float:left;}
.wapxtags ul li{float:left;margin:0 5px;}
.wapxtags ul li b{font-size:12px;font-weight:300;color:#999;padding:0 0 0 5px;}
.wapxtags ul li a{color:#000;height:29px;line-height:29px;display:inline-table;display:inline-block;zoom:1;*display:inline;}
.wapxtags ul li.active{color:#000;border:1px solid #ccc;border-bottom:1px solid #fff;position:relative;top:0;height:29px;line-height:29px;display:inline-table;display:inline-block;zoom:1;*display:inline; padding:0 10px;}
.msgC{text-align:left;width:97%;margin:0 auto; }
.msgC dl{border-bottom:1px solid #ddd;padding:12px 0;font-size:14px;}
.msgC dl dd span{color:#666;font-weight:300;float:right;font-size:12px;}
.msgC dl dd strong{color:#666;font-weight:300; padding:0 0 0 30px;}
.msgC dl dd b{font-weight:300;padding:0 10px 0 0;color:#000; font-weight:900;}
.black_overlay{display:none;background-color:#999;width:100%;height:100%;left:0;top:0;/*FF IE7*/
filter:alpha(opacity=80);/*IE*/
opacity:0.8;/*FF*/
z-index:9999999999999999999999;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/

}



.black_overla{display:none;background-color:#999;width:100%;height:100%;left:0;top:0;/*FF IE7*/
filter:alpha(opacity=80);/*IE*/
opacity:0.8;/*FF*/
z-index:9999999999999999999999;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/

}



.white_content{display:none;left:0%;/*FF IE7*/
top:10%;/*FF IE7*/

z-index:9999999999999999999999;margin:0 auto;width:100%;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/}
.white_content{display:none;left:0%;/*FF IE7*/
top:3%;/*FF IE7*/

z-index:9999999999999999999999;margin:0 auto;width:100%;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/}


.white_conten{display:none;left:0%;/*FF IE7*/
top:0;/*FF IE7*/

z-index:9999999999999999999999;margin:0 auto;width:100%;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/background:#000;opacity:0.9;filter:alpha(opacity=90);height:100%;}
.white_conten h1{ height:50px;line-height:50px;}
.white_conten h1 a{}
.white_conten h1 a:hover{}
.prev{ position:absolute;top:45%;left:0;width:50px;height:50px;}
.prev a{width:50px;height:50px;line-height:50px;background:#BC1E1F;text-align:center;display:inline-table;display:inline-block;zoom:1;*display:inline;-moz-border-radius:50px;-webkit-border-radius:50px;border-radius:50px;color:#fff;font-style:normal;font-size:14px;}
.prev a:hover{background:#5f5f5f;}
.next{ position:absolute;top:45%;right:0%;width:50px;height:50px;}
.next a{width:50px;height:50px;line-height:50px;background:#BC1E1F;text-align:center;display:inline-table;display:inline-block;zoom:1;*display:inline;-moz-border-radius:50px;-webkit-border-radius:50px;border-radius:50px;color:#fff;font-style:normal;font-size:14px;}
.next a:hover{background:#5f5f5f;}
.white_conten dl{display:inline-table;display:inline-block;zoom:1;*display:inline;vertical-align:middle;text-align:center;}
.white_conten dl dt img {}
.white_conten dl dd{color:#fff;width:90%;margin:0 auto;text-align:left;padding:20px 0 0 0;font-size:14px;}
.white_conten dl dd span{color:#666;font-size:12px;float:right;}
.MSCenter{border:1px solid #888;width:90%;height:97%;margin:0 auto;text-align:left;background:#fff;padding:20px;position:relative;margin:28px auto auto auto;}
.MSCenter h1{font-size:18px;font-weight:300;font-family:'微软雅黑';border-bottom:1px solid #ccc;height:40px;line-height:40px;position:relative;position:relative;}
.MSCenter b{display:inline-table;display:inline-block;zoom:1;*display:inline;width:20px;height:20px;line-height:20px;text-align:center;border-radius:20px;border:1px solid #ccc;margin:0 5px 0 0;}
.MSCenter b em{ position:relative;top:-3px;font-size:6px;letter-spacing:2px;color:#ccc;}
.MSCenter h1 a{padding:0 0 0 10px;position:absolute;right:10px;top:0;color:#565656;font-size:14px;color:#dc0000;}
.MSCenter h2{font-size:12px;font-weight:300;font-family:'';height:38px;line-height:38px;text-align:center;background:#ccc;position:absolute;left:0;bottom:0;display:block;width:100%;color:#aaa;}
.msbiaodan{padding:10px 0; font-size:14px;}
.msbiaodan ul{}
.msbiaodan ul li{padding:10px 0;}
.msbiaodan ul li textarea{width:93%;height:80px;padding:3px 8px;font-size:12px;line-height:24px;border-top-color:1px solid #F60;width:188px;border:1px solid #ccc; background:#fff;}
.text{width:96%;border:1px solid #ccc;padding:8px 5px 9px 5px; height:22px; line-height:22px;background:#fff;}
.msbiaodan ul li.sub{padding:15px 0 0 0;}
.msbiaodan ul li.sub input{border:none;background:none;color:#fff;width:100%;height:38px;line-height:38px;text-align:center;font-size:16px;font-weight:900;cursor:pointer;font-family:'微软雅黑';display:inline-table;display:inline-block;zoom:1;*display:inline;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
.upfile-box{position:relative;width:340px}
.uptxt{height:30px;border:1px solid #cdcdcd;width:227px;}
.upbtn{background-color:#FFF;border:1px solid #CDCDCD;height:34px;width:70px;cursor:pointer;}
.upfile{position:absolute;top:0;right:80px;height:24px;filter:alpha(opacity:0);opacity: 0;width:260px }
</style>
<div class="msgC"> <?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <dl>
    <dd><b><?php echo $this->_tpl_vars['item']['title']; ?>
</b><span>by&nbsp;：<?php echo $this->_tpl_vars['item']['u_name']; ?>
</span></dd>
    <dd><?php echo $this->_tpl_vars['item']['message']; ?>
</dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?> </div>
<!-- Content end-->
<!-- Footer -->
<!--弹出订阅 start-->
<form enctype="multipart/form-data" method="post" action="<?php echo @ROOT_DOMAIN; ?>
/message/add.php">
  <div id="light1" class="white_content">
    <div class="MSCenter">
      <h1>我要留言<span><a href="javascript:void(0)" onClick="document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'">关闭</a></span></h1>
      <div class="msbiaodan">
        <ul>
          <li>标题：</li>
          <li style="border:1px solid #ccc; padding:0;">
            <input type="text" class="text" style="border:none;" name="title" id="title">
          </li>
          <li style="margin:8px auto;">内容：</li>
          <li  style="border:1px solid #ccc; padding:0;">
            <textarea name="message" rows="" cols="" style="width:93%;border:none;" id="message"></textarea>
          </li>
          <li class="sub"  style="position:relative;top:20px;background:#BC1E1F; padding:3px 0; margin:20px auto;">
            <input type="submit" name="submit" value="提交" id="submit">
          </li>
        </ul>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
      </div>
      <h2>温馨提示：提交后小编审核通过方可在页面上显示。</h2>
    </div>
  </div>
</form>
<!--弹出订阅 end-->
<div class="liuyantijiao"><a href="javascript:void(0)" onClick="document.getElementById('light1').style.display='block';document.getElementById ('fade').style.display='block'">我要留言</a></div>
<script>
$(function(){
$("#x1").xMarquee();
$("#x2").xMarquee({temp:2,backMarquee:'backMarquee'});
})

function backMarquee(id,con){
$("#backMarquee").html(id+"::::::::::::::::::::"+con);
}
</script>
<!--footer start-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--footer end-->
</body>

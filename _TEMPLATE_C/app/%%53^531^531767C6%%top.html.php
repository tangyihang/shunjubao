<?php /* Smarty version 2.6.17, created on 2017-12-31 00:04:37
         compiled from ../wap/top.html */ ?>
<script type="text/javascript">
var TMJF = jQuery.noConflict();
TMJF(function($) {
	var u_name = '';
	var cash = 0.00;
	var u_img ='';
	var arrCookie = document.cookie.split(/;\s*/); 
	//遍历cookie数组，处理每个cookie对 
	for(var i=0;i<arrCookie.length;i++){
		var arr = arrCookie[i].split("=");
		//找到名称为userId的cookie，并返回它的值
		if("u_name" == arr[0]){
			u_name = decodeURIComponent(arr[1]); 
		}
		if("cash" == arr[0]){
			cash = arr[1];
		}
		if("u_img" == arr[0]){
		u_img = decodeURIComponent(arr[1]); 
	}
	}
	var welcome_str = "&nbsp;";
	if (u_name != '') {
		if (u_img != '') {
		
			var u_img_str ='<img src="'+u_img+'">';
			
		}else{
			var u_img_str ='<img src="http://www.zhiying365.com/www/statics/i/touxiang.jpg">';
		}
		welcome_str += "<a href=\"http://m.zhiying365.com/account/user_center.php\">" + u_img_str +"<b>" + u_name + "</b></a><span>|</span><a href=\"http://m.zhiying365.com/account/user_charge.php\">充值</a><span>|</span><a href=\"http://m.zhiying365.com/passport/logout.php\">退出</a></h1>";
	} else {
		welcome_str += "<a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/login.php\">登录</a><span>|</span><a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/reg.php\">注册</a></h1>";
	}
	$(".topCenter").find("h1").eq(0).html(welcome_str);
	
});
var $ = jQuery.noConflict(true);
</script>

<div class="top">
  <div class="logo"><h1><a href="http://m.zhiying365.com/">聚宝网</a></h1></div>
  <div class="topCenter">
    <h1></h1>
    <div class="clear"></div>
  </div>
</div>


<?php /* Smarty version 2.6.17, created on 2017-10-29 17:56:24
         compiled from quick_ticket_iframe.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'quick_ticket_iframe.html', 11, false),)), $this); ?>
<!DOCTYPE html>
<head>
<title>聚宝网单关投注华山论剑，谁是今日英雄！微博@聚宝网，最IN的分析将赢取10积分！</title>
<meta name="keywords" content="聚宝，聚宝网，聚宝彩票，体育彩票，单关投注！" />
<meta name="description" content="聚宝网单关投注华山论剑，谁是今日英雄！微博@聚宝网，最IN的分析将赢取10积分！" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1' name='viewport' />
<meta content='yes' name='apple-mobile-web-app-capable' />
<meta content='black' name='apple-mobile-web-app-status-bar-style' />
<meta content='telephone=no' name='format-detection' />
<link href="<?php echo ((is_array($_tmp='wap_header.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<link href="<?php echo ((is_array($_tmp='wap_footer.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo ((is_array($_tmp='jquery.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='jquery-1.9.1.min.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
"></script>
<script language="javascript">
var Domain = '<?php echo @ROOT_DOMAIN; ?>
';
var ZY_CDN = '<?php echo @STATICS_BASE_URL; ?>
';
var TMJF = jQuery.noConflict(true);
TMJF.conf = {
    	cdn_i: "<?php echo @STATICS_BASE_URL; ?>
/i"
    	, domain: "<?php echo @ROOT_DOMAIN; ?>
"
};
</script>
<script language="javascript" src="<?php echo ((is_array($_tmp='common.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
"></script>
<style>
</style>
</head>
<body>
<!---->
<script type="text/javascript">
var TMJF = jQuery.noConflict();
TMJF(function($) {
	var u_name = '';
	var cash = 0.00;
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
	}
	var welcome_str = "&nbsp;";
	if (u_name != '') {
		welcome_str += "<b><a href=\"<?php echo @ROOT_DOMAIN; ?>
/account/user_center.php\"> " + u_name + "</a>&nbsp;&nbsp;<em><a href=\"<?php echo @ROOT_DOMAIN; ?>
/account/user_center.php\">我的账户</a></em>&nbsp;&nbsp;<a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/logout.php\">退出</a></b></h1>";
	} else {
		welcome_str += "<b><em><a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/login.php\">登录</a><span></span><a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/reg.php\">注册</a></em></b></h1>";
	}
	$(".topCenter").find("h1").eq(0).html(welcome_str);
	
	$(".accoutList").hover(function(){
		$(this).find("p").show();
	},function(){
		$(this).find("p").hide();
	});
	$(".nav li").hover(function(){
		$(this).find("span").show();
	},function(){
		$(this).find("span").hide();
	});
});
var $ = jQuery.noConflict(true);
</script>
<div id="fade" class="black_overlay"></div>
<div class="top">
  <div class="logo">
    <h1><a href="http://m.zhiying365.com/">聚宝网</a></h1>
  </div>
  <div class="topCenter">
    <h1></h1>
    <div class="clear"></div>
  </div>
</div>
<!---->
<script type="text/javascript">
$(document).ready(function() {
	var host = '<?php echo @ROOT_DOMAIN; ?>
';
	var sport = '<?php echo $this->_tpl_vars['return']['sport']; ?>
';
    var matchStatus = '<?php echo $this->_tpl_vars['return']['status']; ?>
';
    
	$("#add").click(function(){
		var multiple = getMultiple();
		$("#multiple").val(multiple + 1);
		cal();
	});
	$("#dec").click(function(){
		var multiple = getMultiple();
		if(multiple == 1) {
			$("#multiple").val(1);
		} else {
			$("#multiple").val(multiple - 1);
		}
		cal();
	});
	$("#multiple").keyup(function(){
		cal();
	})
	$("#multiple").change(function(){
		cal();
	});
	$(".team").click(function(){
		$(".team").removeClass("active");
		$(this).addClass("active");
		cal();
		return false;
	});
	$("#form1").submit(function(){
		if($("#money").val()==0) return false; 
		if($("#prize").val()==0) return false;
		//是否可以投注
		if(isMatchEnd(sport, matchStatus)) return false;
		
        $("#multiple").val(getMultiple());
        $("#combination").val(getCombination());
        var action = host+"/confirm/confirm.php"
        if (sport == 'bd') {
        	action = host+"/confirm/confirm_bd.php";
        } 
        $("#form1").attr('action', action);
        return true;
	});
	isMatchEnd(sport, matchStatus);
});

	function cal() {
		var sport = '<?php echo $this->_tpl_vars['return']['sport']; ?>
';
		var spInfo = getSpInfo();
		var multiple = getMultiple();
		var money = multiple * 2;
		$("#show_money").html("金额：<span>"+money+"元</span>");
		$("#money").val(money);
		var prize = Number(spInfo * money);
		if(sport == 'bd') prize *= 0.65;
		prize = Math.round(prize* 100)/100;
		$("#show_prize").html("奖金：<span>"+prize+"元</span>");
	}
	function getSpInfo() {
		return Number($(".active").attr('sp'));
	}
	function getMultiple() {
		return Number($("#multiple").val());
	}
	//crs|55692|0201#7
	function getCombination() {
		var pool = '<?php echo $this->_tpl_vars['return']['pool']; ?>
';
		var matchid = '<?php echo $this->_tpl_vars['return']['matchid']; ?>
';
		var code = $(".active").attr('code');
		var spInfo = getSpInfo();
		return pool+'|'+matchid+'|'+code+'#'+spInfo;
	}
	function isMatchEnd(sport, matchStatus) {
		if(sport == 'bd' && matchStatus != 0) {
			$("#submit").val('已截止');
			return true;
		}
		
		if(sport == 'fb' && matchStatus != 'Selling') {
			$("#submit").val('已截止');
			return true;
		}
		
		return false;
	}
</script>
<script>
    function scroll_news(){
    $(function(){
    $('#jishi li').eq(0).fadeOut('slow',function(){
    $(this).clone().appendTo($(this).parent()).fadeIn('slow');
    $(this).remove();
    });
    });
    }
    setInterval('scroll_news()',2000);
    </script>
<!--center start-->
<!--单关投注 start-->
<style>
.xuanxiang{ display:block; margin:0 5px; height:48px; text-align:center;}
.xuanxiang strong{ display:block; text-align:center;color:#666; font-weight:300; font-size:12px;}
.xuanxiang a{ display:block;border:1px solid #ccc;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px; font-size:14px;color:#000; line-height:24px; font-weight:300;}
.xuanxiang a.active{background: url(http://www.zhiying365.com/www/statics/i/T1_pgo.gif) no-repeat right bottom;border:1px solid #E53C3F;}
.jiajian{ font-size:12px; width:300px; margin:0 auto;}
.jiajian ul{display:inline-table;display:inline-block;zoom:1;*display:inline;}
.jiajian ul li{display:inline-table;display:inline-block;zoom:1;*display:inline; vertical-align:text-top;}
.jiajian ul li.show{width:65px; height:30px; line-height:20px;border:1px solid #ccc;text-align:center;}
.jiajian ul li a{ width:30px; height:30px; line-height:30px; text-align:center;display:block;border:1px solid #ccc; font-size:14px; font-weight:900;color:#000;}
.jiajian ul li a:hover{}
.jiajian ul li input{ width:53px; height:24px; line-height:26px;border:none; text-align:center;}
.jiajian ul li span{color:#dc0000;}
.jiajian ul li#show_money{ line-height:30px;}
.jiajian ul li#show_prize{line-height:30px;}
.buy{ width:270px; height:45px; line-height:45px; margin:0 auto;}
.buy input{ border:none;width:270px; height:45px; line-height:45px;color:#fff;background:#BC1E1F;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px; font-size:16px; font-family:'微软雅黑'; font-weight:900;}
.jiaoju{color:#dc0000; font-size:20px; font-weight:900; line-height:24px; padding:10px 0;font-family:'微软雅黑';}
.jiaoju span{font-size:18px; font-weight:300;font-family:'宋体';}
</style>
<div style=" font-size:12px; background:#f1f1f1;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="width:60px;"><div class="jiaoju"><span>[</span>聚焦<br/>单关<span>]</span></div></td>
    <td style="text-align:left; line-height:24px;color:#555; font-size:12px;">华山论剑，谁是今日英雄！<p>微博@聚宝网，最IN的分析将赢取10积分！</p></td>
  </tr>
</table>
</div>
<div style="padding:20px 0;">
  <form id='form1' target="_blank" method="post">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><div class="xuanxiang"><a href="javascript:void(0);" class="team active" code="h" sp="<?php echo $this->_tpl_vars['return']['spInfo']['h']; ?>
"><?php echo $this->_tpl_vars['return']['matchInfo']['h_cn']; ?>
<strong>主胜<?php echo $this->_tpl_vars['return']['spInfo']['h']; ?>
</strong></a></div></td>
        <td><div class="xuanxiang"><a href="javascript:void(0);" class="team" code="d" sp="<?php echo $this->_tpl_vars['return']['spInfo']['d']; ?>
">平局<strong><?php echo $this->_tpl_vars['return']['spInfo']['d']; ?>
</strong></a></div></td>
        <td><div class="xuanxiang"><a href="javascript:void(0);" class="team" code="a" sp="<?php echo $this->_tpl_vars['return']['spInfo']['a']; ?>
"><?php echo $this->_tpl_vars['return']['matchInfo']['a_cn']; ?>
<strong>客胜<?php echo $this->_tpl_vars['return']['spInfo']['a']; ?>
</strong></a></div></td>
      </tr>
      <tr>
        <td height="20" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><div class="jiajian">
            <ul>
              <li><a href="javascript:void(0);" id="dec">-</a></li>
              <li class="show">
                <input type="text" value="1" id="multiple" name="multiple" onKeyUp="this.value=this.value.replace(/\D/g,'')">
              </li>
              <li><a href="javascript:void(0);" id="add">+</a></li>
              <li id="show_money">金额：<span>2元</span></li>
              <li id="show_prize">奖金：<span><?php echo $this->_tpl_vars['return']['prize']; ?>
元</span></li>
            </ul>
          </div></td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div class="buy">
            <input type="submit" value="立即购买" id="submit"/>
            <input type="hidden" value="2" id="money" name="money"/>
            <input type="hidden" value="<?php echo $this->_tpl_vars['return']['matchid']; ?>
" id="matchid"/>
            <input type="hidden" value="<?php echo $this->_tpl_vars['return']['sport']; ?>
" id="sport" name="sport"/>
            <input type="hidden" value="1x1" id="select" name="select"/>
            <input type="hidden" value="单关" id="user_select" name="user_select"/>
            <input type="hidden" value="" id="combination" name="combination"/>
            <input type="hidden" value="<?php echo $this->_tpl_vars['return']['pool']; ?>
" id="pool" name="pool"/>
          </div></td>
      </tr>
    </table>
  </form>
</div>
<div style="width:99%;margin:10px auto auto auto;">
          <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=3430318831" type="text/javascript" charset="utf-8"></script>
          <wb:comments url="auto" fontsize="12" width="auto" color="e2e2e2,ffffff,888888,05090e,bbbbbb,cccccc" appkey="3430318831" ralateuid="5107700124" ></wb:comments>
        </div>
<!--单关投注 edn-->
</body>
</html>
<?php /* Smarty version 2.6.17, created on 2018-03-04 23:20:33
         compiled from forgot.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'forgot.html', 2, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo ((is_array($_tmp='user.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<!--页面头部 start-->
<div class="head">
  <h1><a href="/"><i>找回密码</i></a></h1>
</div>
<!--页面头部 end-->
<!--center start-->
<style>
.loginCleft dl dt{display:inline-table;display:inline-block;zoom:1;*display:inline;width:100px;text-align:right;}
</style>
<div class="loginC">
  <div class="loginCleft">
    <form method="post" action="<?php echo $this->_tpl_vars['smart']['const']['ROOT_DOMAIN']; ?>
/passport/reset.php" name='f' id='f' >
      <dl>
        <dt>手机号</dt>
        <dd>
          <input name="mobile" id="mobile"  type="text" size="25" />
        </dd>
      </dl>
      <dl>
        <dt>验证码</dt>
        <dd>
          <input id="Validate_Code" name="Validate_Code" maxlength="4" size="15" type="text" class="form-control" style=" width:138px;" placeholder="验证码" onBlur="hidetipsCode()">
          <a href="javascript:void(0);" onClick="reflash_image_reg()"><img src="/include/Imagecode/Imagecode.php" id="imgCaptcha" style="position:relative;left:4px; width:105px;"></a>&nbsp;&nbsp;<a class="refresh" href="javascript:void(0);" onClick="reflash_image_reg()">换一张</a> <font id="tipsCode" style="color:#F00;" class="none"></font> </dd>
      </dl>
      <dl>
        <dt>短信验证码</dt>
        <dd>
          <input name="code" type="text" size="25" style="width:138px;" id="code"/>
          <input name="getcode" type="button" style="width:115px; height:34px; line-height:34px;top:3px;" value="发送短信验证码" class="code" size="25" id="getcode" onClick="send_message()" />
        </dd>
      </dl>
      <dl>
        <dt></dt>
        <dd> <span id="showtips"><?php if ($this->_tpl_vars['msg']): ?><?php echo $this->_tpl_vars['msg']; ?>
<?php endif; ?></span> </dd>
      </dl>
      <dl>
        <dt></dt>
        <dd class="tijiao">
          <input name="button" type="button" value="点击找回密码"   onClick="resetsub()"/>
          <input name="hadsend"  id="hadsend" type="hidden" value="1">
        </dd>
      </dl>
      <input type="hidden" name="from" value="http://www.shunjubao.xyz/ticket/show.php" />
    </form>
    <div class="lianhelogin">
      <h2>使用合作网站登录</h2>
      <ul>
        <li><a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=101179991&redirect_uri=http%3A%2F%2Fwww.shunjubao.xyz%2Fconnect%2Fqq_connect.php&state=519325605e4f681a2c0589ca19d741ed&scope=get_user_info,add_share,add_weibo"><img src="<?php echo @STATICS_BASE_URL; ?>
/i/QQlogin.gif">QQ登录</a></li>
        <li><a href="https://mapi.alipay.com/gateway.do?_input_charset=utf-8&partner=2088311949386932&return_url=http://www.shunjubao.xyz/connect/alipay_connect.php&service=alipay.auth.authorize&target_service=user.auth.quick.login&sign=eec67941b9a9e81899e345ed53b2873b&sign_type=MD5"><img src="<?php echo @STATICS_BASE_URL; ?>
/i/alipaylogin.gif">支付宝登录</a></li>
        <li><a href="https://open.weixin.qq.com/connect/qrconnect?appid=wxc1b1ad8efd2af8eb&redirect_uri=http%3A%2F%2Fwww.shunjubao.xyz%2Fconnect%2Fweixin_connect.php&response_type=code&scope=snsapi_login&state=782141d36830c698e07e22dfd9bfa129#wechat_redirect"><img src="<?php echo @STATICS_BASE_URL; ?>
/i/weixin2.gif">微信登录</a></li>
        <li><a href="https://api.weibo.com/oauth2/authorize?client_id=3430318831&redirect_uri=http%3A%2F%2Fwww.shunjubao.xyz%2Fconnect%2Fweibo_connect.php&response_type=code&display=default"><img src="<?php echo @STATICS_BASE_URL; ?>
/i/weibologin.gif">微博登录</a></li>
      </ul>
    </div>
  </div>
  <div class="loginRight">
    <h1>我们的优势</h1>
    <p>业界中奖率最高的网站</p>
    <p>数千万彩民的信赖</p>
    <p>每日赛事精选推荐</p>
    <p>晒单中心红的不要不要</p>
    <p>最及时、最全面、最专业的彩票新闻</p>
    <p>提款瞬间秒到</p>
  </div>
  <div class="clear"></div>
</div>
<script>
function resetsub(){	
	var mobile = $("#mobile").val();
	if(mobile==''){
		$("#showtips").html('手机号不能为空！');
		return false;
	}	
	var code = $("#code").val();
	if(code==''){
		$("#showtips").html('验证码不能为空！');
		return false;
	}
	var hadsend = $("#hadsend").val();
	if(hadsend == '0'){
		$("#showtips").html('请先发送验证码！');
		return false;
	}
	$("#f").submit();
}

function getcode(){					
	var count = 60;
	var countdown = setInterval(CountDown, 1000);
	function CountDown() {
		$("#getcode").attr("disabled", true);
		$("#getcode").val("已发送," + count + "秒可重发");
		if (count == 0) {
			$("#getcode").val("获取验证码").removeAttr("disabled");
			clearInterval(countdown);
		}
		count--;
	}
}

function send_message(){
	$("#showtips").html('');
	var mobile = $("#mobile").val();
	if(mobile == ''){
		 $("#showtips").html('请先输入您注册时使用的手机号！');
		return;
	}

	var Validate_Code = $("#Validate_Code").val();
	if(Validate_Code==''){
		$("#tipsCode").removeClass("none");
		$("#tipsCode").html("请先输入验证码");
		return false;
	}

	
	$.ajax({
			type:'POST', 
			url: Domain + '/sms/send.php', 
			data:'mobile='+mobile+'&Validate_Code='+Validate_Code, 
			dataType: 'json', 
			success: function(data) {
				if (data.ok) {
					$("#hadsend").val('1');
					getcode();
					 $("#showtips").html('已发送，请在手机上查看验证码！');
					return;
				} else {
					$("#showtips").html('' + data.msg);
					return;
				}
			}
		});	
	}
	
	function reflash_image_reg(){
		var el = document.getElementById("imgCaptcha");
		 var now = new Date();
		el.src="/include/Imagecode/Imagecode.php?x=" + now.toUTCString();
	}	
		
	
</script>
<!--center end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
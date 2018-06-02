<?php /* Smarty version 2.6.17, created on 2018-03-04 23:14:02
         compiled from user_message.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'user_message.html', 3, false),array('modifier', 'truncate', 'user_message.html', 150, false),)), $this); ?>
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
<link type="text/css" rel="stylesheet" href="<?php echo ((is_array($_tmp='header.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" />
<link type="text/css" rel="stylesheet" href="<?php echo ((is_array($_tmp='msg.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" >
<script type="text/javascript" src="<?php echo ((is_array($_tmp='blocksit.min.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='xMarquee.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
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
<div class="header">
  <div class="headerCnetr">
    <div class="logo">
      <h1><a href="http://www.shunjubao.xyz/"><strong class="none">聚宝网</strong><b style="top:-1px;left:100px;">留言聚宝</b></a></h1>
    </div>
  </div>
</div>
<div class="zjmdbox">
  <div class="zjmd">
    <div class="guandong"> @亲们，2017聚宝与我同行，在这留下您对我们的祝福、意见或建议，优秀留言其好的建议将会得到10元奖励，名额50名。
      <div class="clear"></div>
    </div>
    <div class="guandong none">
      <div class="gdleft"><span><em>&bull;&bull;&bull;</em></span>上期活动中奖用户：</div>
      <div class="gdright">
        <div id="x1" class="xMarquee">
          <ol>
            <li>过年积分投注送豪礼，“chengcheng“获得日本专柜Adidas nitrocharge 2.0 TF顶级狂战士足球鞋一双</li>
          </ol>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div id="container"> <?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <div class="grid"><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong>
    <p class="show"><?php echo $this->_tpl_vars['item']['message']; ?>
</p>
    <div class="meta">by&nbsp;<b><?php echo $this->_tpl_vars['item']['u_name']; ?>
</b><span><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['create_time'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "", true) : smarty_modifier_truncate($_tmp, 10, "", true)); ?>
</span></div>
  </div>
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
          <li>标题：
            <input type="text" class="text" name="title" id="title">
            <em><i>*</i>请输入12字内的标题</em></li>
          <li style="display:none;"> 照片：
            <input type="text" class="uptxt" id="textfield" name="textfield">
            <input type="button" value="浏览..." class="upbtn">
            <input type="file" style="top:140px;"onchange="document.getElementById('textfield').value=this.value" size="28" id="fileField" class="upfile" name="fileFieldsss">
             <em><i>*</i>请上传900KB内的GIF、JPG、PNG，每次只能上传一张，传完之后可以在继续上传。</em> </li>
          <li style="position:relative;top:10px;"><span>内容：</span>
            <textarea name="message" rows="" cols="" style="width:400px;" id="message"></textarea>
          </li>
          <li class="sub"  style="position:relative;top:20px;">
            <input type="submit" name="submit" value="提交" id="submit">
          </li>
        </ul>
      </div>
      <h2>温馨提示：提交后小编审核通过方可在页面上显示。</h2>
    </div>
  </div>
</form>
<!--弹出订阅 end-->
<footer id="footeradd">
  <div class="footeraddC">
    <div class="liuyan"><a href="javascript:void(0)" onClick="document.getElementById('light1').style.display='block';document.getElementById ('fade').style.display='block'">我要留言</a></div>
  </div>
</footer>
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
<div style="font-size:12px;">
  <script type="text/javascript" src="<?php echo ((is_array($_tmp='foot.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
</div>
<!--footer end-->
</body>

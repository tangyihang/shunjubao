<?php /* Smarty version 2.6.17, created on 2016-06-15 16:46:38
         compiled from user_score_tran.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
var ZY_CDN = '<?php echo @STATICS_BASE_URL; ?>
';
</script>
<style>
.NavphTab{ height:30px; line-height:30px; background:#fff; margin:15px auto; font-size:12px;}
.phTab{ height:30px; line-height:30px; display:block; text-align:center; width:100%; background:#eee; margin:0 auto;}
.phTab a.active{ background:#6f6f6f; display:block;width:100%;color:#fff; margin:0 auto;}
.phTab a{color:#000; font-size:12px;width:100%; display:block;}
table{}
table tr{}
table tr th{ font-size:12px; font-weight:300;}
table tr td{ height:30px; line-height:30px; overflow:hidden;}
.jieshao{width:90%; margin:0 auto; text-align:left; line-height:24px; font-size:12px;}
.jieshao ul{ padding:20px 0 10px 0;}
.jieshao ul li{ height:50px; line-height:50px;}
.jieshao h5{ font-size:12px; font-weight:300; padding:10px 0;}
.jieshao h6{ font-size:12px; font-weight:300; padding:10px 0;color:#dc0000;text-align:center;}
.jieshao h5 b{font-size:12px; font-weight:300;color:#dc0000;}
.jieshao h5 strong{font-size:12px; font-weight:300;color:#dc0000;}
.jieshao input{border:1px solid #aaa;}
.jieshao form{ padding:0 0  30px 0;}
.jieshao form b{ font-size:12px; font-weight:300;}
.jieshao p{color:#555;}
.jieshao p b{ font-weight:900;color:#000;}
.jieshao p.right{color:#dc0000;height:30px; line-height:30px; position:relative;top:13px;}
.jieshao p.error{color:#dc0000;height:30px; line-height:30px;position:relative;top:13px;}
</style>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
$(function() {
	$("#submit").submit(function(){
		if(isNaN($("#score").val())) {
			alert('请输入正确的数字');
			return false;
		}
		if (!confirm('兑换过程不可逆，您确定兑换？')) {
			return false;
		}
		return true;
	});
});
</script>
<!--积分兑换 start-->
<div class="wapxtags">
  <ul>
    <li class="active"><a href="http://app.zhiying365.com/account/user_score_tran.php">&nbsp;&nbsp;&nbsp;积分换彩金&nbsp;&nbsp;&nbsp;</a></li>
    <li><a href="http://app.zhiying365.com/account/user_gift_tran.php">&nbsp;&nbsp;&nbsp;彩金换积分&nbsp;&nbsp;&nbsp;</a> </li>
  </ul>
  <div class="clear"></div>
</div>
<div class="jieshao"> <?php if (! $this->_tpl_vars['userVirtualTicketInfo']): ?>
  <h6>抱歉，您没参与积分投注，没有兑换资格!</h6>
  <?php else: ?>
  <ul>
    <li>当前积分：<?php echo $this->_tpl_vars['userAccountInfo']['score']; ?>
</li>
    <li>兑换额度：<?php echo $this->_tpl_vars['gift']; ?>
元</li>
  </ul>
  <form action="" method="post" id="submit">
    <p>兑换彩金：
      <input type="text" name="score"  style=" padding:6px; width:120px;" value="<?php echo $this->_tpl_vars['userAccountInfo']['score']; ?>
" id="score"/>
      <input type='hidden' name='action' value='tran'/>
      <input type="submit" style=" padding:0 4px; width:80px; height:28px; line-height:28px;" value="兑&nbsp;&nbsp;换" />
    </p>
    <p class="right"><?php echo $this->_tpl_vars['msg_error']; ?>
</p>
    <p class="error"><?php echo $this->_tpl_vars['msg_success']; ?>
</p>
  </form>
  <?php endif; ?>
  <p><b>温馨提示：</b></p>
  <p>各位会员，积分是聚宝网回馈用户的一种方式，一年来，每天只要您正常登录，系统都会自动赠送一个积分，但是鉴于恶意注册者越来越多， 聚宝网特决定——于2016年4月1日0点起实行积分赠送新规则。在此之前系统每天免费自动赠送的积分正常保留，并可正常兑换彩金；恶意注册用户及通过聚宝圈子同人多号互赏行为者，积分直接清零并做永久封号处理。为保障正常会员的利益，现对积分获取规则进行更改。</p>
  <p><b>积分获取规则</b></p>
  <p>1、月投注额度达到1000元赠送50积分；</p>
  <p>2、月投注额度达到2000元赠送100积分；</p>
  <p>3、月投注额度达到3000元赠送150积分；</p>
  <p>4、月投注额度达到5000元赠送250积分；</p>
  <p>5、月投注额度达到10000元赠送500积分；</p>
  <p>6、月投注额度达到20000元赠送1000积分；</p>
  <p>7、月投注额度达到30000元赠送1500积分；</p>
  <p>8、月投注额度达到50000元赠送2500积分；</p>
  <p>9、月投注额度达到100000元赠送5000积分；</p>
  <p>10、月投注额度达到150000元或以上赠送12000积分。</p>
  <p><b>积分兑换开放日期</b></p>
  <p>从月底当天更改为每月月初1号，9：00后开放兑换入口。</p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <br/>
  <br/>
</div>
<div>
<!--积分兑换 end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../app/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
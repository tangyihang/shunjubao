<?php /* Smarty version 2.6.17, created on 2018-03-05 08:59:38
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
.Jifenes{width:98%;margin:0 auto;text-align:left;line-height:24px;font-size:14px; padding:20px 0;}
.Jifenes dl{ height:40px; line-height:40px;}
.Jifenes dl dt{ float:left;}
.Jifenes dl dd{ float:right;}
.jftext{border:none; background:none; height:28px; line-height:28px; width:100%; padding:2px 0; text-align:center;font-size:14px;color:#888;}
.jfsub{border:none; background:none;color:#fff; height:41px; line-height:32px; width:100%;display:block;font-size:14px; border-radius:2px;}
.Jifenes dl.active{ padding:15px 0 30px 0;}
.Jifenes dl.active input{}
.Jftips{ height:40px; line-height:40px;color:#dc0000; font-size:14px;margin:auto auto 10px auto;}
.Jftips em{ width:20px; height:20px; line-height:20px; text-align:center;color:#fff; background:#dc0000; margin:0 5px;display:inline-table;display:inline-block;zoom:1;*display:inline; font-style:normal;border-radius:20px;}
.Jifenes p{color:#555;}
.Jifenes p b{ font-weight:900;color:#000; background:#f1f1f1;display:block; height:30px; line-height:30px; margin:0 0 25px 0;border-left:2px solid #dc0000; padding:0 0 0 5px;}
.Jifenes p.right{color:#dc0000;height:30px;line-height:30px;}
.Jifenes p.error{color:#dc0000;height:30px;line-height:30px;}
.NavphTab{ width:98%; margin:0 auto; }
.NavphTab table{}
.NavphTab table tr{}
.NavphTab table tr td{background:#fff;}
.NavphTab table tr td a{color:#000;font-weight:300;font-size:14px;border-bottom:2px solid #ddd;height:40px;line-height:40px;display:block;}
.NavphTab table tr td a:hover{}
.NavphTab table tr td a.active{display:block;width:100%;color:#000;border-bottom:2px solid #dc0000;}
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
<div class="NavphTab">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="http://m.shunjubao.xyz/account/user_score_tran.php" class="active">积分换彩金</a></td>
      <td><a href="http://m.shunjubao.xyz/account/user_gift_tran.php">彩金换积分</a></td>
      <td><a href="http://m.shunjubao.xyz/account/user_money_tran.php">余额换积分</a></td>
    </tr>
  </table>
</div>
<div class="Jifenes"> <?php if (! $this->_tpl_vars['userVirtualTicketInfo']): ?>
  <div class="Jftips"><em>!</em>您没参与过积分投注，暂时没有兑换资格!</div>
  <?php else: ?>
  <form action="" method="post" id="submit">
    <dl>
      <dt>当前积分</dt>
      <dd><?php echo $this->_tpl_vars['userAccountInfo']['score']; ?>
</dd>
    </dl>
    <dl>
      <dt>可兑换额度</dt>
      <dd><?php echo $this->_tpl_vars['gift']; ?>
</dd>
    </dl>
    <dl>
      <dt>输入要兑换彩金额度，10积分等于1块彩金！</dt>
    </dl>
    <dl class="active">
      <dt style="width:69%;border:1px solid #ddd;">
        <input type="text" name="score"  value="<?php echo $this->_tpl_vars['userAccountInfo']['score']; ?>
" class="jftext" id="score"/>
        <input type='hidden' name='action' value='tran'/>
      </dt>
      <dd style="width:30%; background:#dc0000;color:#fff;">
        <input type="submit" class="jfsub" value="兑&nbsp;&nbsp;换" />
      </dd>
    </dl>
    <dl style="line-height:20px; line-height:20px;">
      <dt style="color:#dc0000;"><?php echo $this->_tpl_vars['msg_error']; ?>
<?php echo $this->_tpl_vars['msg_success']; ?>
</dt>
    </dl>
  </form>
  <?php endif; ?>
  <p><b>积分获取规则</b></p>
  <div>
    <p>1）月投注额500-8888元赠送5%；</p>
    <p>2）月投注额8888-58888元赠送6%；</p>
    <p>3）月投注额58888-188888元赠送7%；</p>
    <p>4）月投注额188888-以上元赠送8%；</p>
  </div>
  <br/>
  <p><b>积分返还日期</b></p>
  <div>
    <p>账户原有积分可任何时间段兑换彩金。当月投注总额所得积分，智赢将按照“积分获取规则”于每月月初第一天早上9点前，派送上月（月末最后一天23：59：59前的投注总额）。</p>
    <p>温馨提示：彩金、余额目前都是可以跟积分互相兑换。兑换比例：1块钱=10积分,10积分=1块彩金。</p>
    <p></p>
  </div>
</div>
<br/>
<!--积分兑换 end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../wap/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
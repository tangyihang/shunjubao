<?php /* Smarty version 2.6.17, created on 2016-04-23 18:01:39
         compiled from confirm/confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'confirm/confirm.html', 2, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo ((is_array($_tmp='wap_confirmbet.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<script type="text/javascript">
TMJF(function($){
var is_confirm = false;
	$("#form_submit").click(function(){
		//防止重复提交
		if (is_confirm) {
			return false;
		}
		is_confirm = true;
		return true;
	});
});
</script>
<div class="clear"></div>
<form action="<?php echo @ROOT_DOMAIN; ?>
/confirm/combination_submit<?php if ($this->_tpl_vars['s'] == 'bd'): ?>_bd<?php endif; ?>.php" target="_self" name="form1" method="post">
  <input type="hidden" name="sport" value="<?php echo $this->_tpl_vars['s']; ?>
">
  <input type="hidden" name="select" value="<?php echo $this->_tpl_vars['select']; ?>
">
  <input type="hidden" name="user_select" value="<?php echo $this->_tpl_vars['user_select']; ?>
">
  <input type="hidden" name="multiple" value="<?php echo $this->_tpl_vars['multiple']; ?>
">
  <input type="hidden" name="money" value="<?php echo $this->_tpl_vars['money']; ?>
">
  <input type="hidden" name="combination" value="<?php echo $this->_tpl_vars['c']; ?>
">
  <input type="hidden" name="pool" value="<?php echo $this->_tpl_vars['p']; ?>
">
  <input type="hidden" name="from" value="<?php echo $this->_tpl_vars['from']; ?>
">
  <!--center start-->
  <div class="center">
    <!--提示文字信息  start-->
    <div class="touzhutips"><em>!</em> <?php if ($this->_tpl_vars['s'] != 'bd'): ?>
      奖金可能在出票时变化，实际数值以票样信息为准。
      <?php else: ?>
      北单奖金SP值以北京体彩中心官方开奖为准!
      <?php endif; ?> </div>
    <!--提示文字信息  end-->
    <div>
      <div class="touzhuqr">
        <ol>
          <li><b><?php echo $this->_tpl_vars['chinese_pool']; ?>
</b></li>
          <li><u><?php if ($this->_tpl_vars['user_select'] == '1x1'): ?>单关<?php else: ?><?php echo $this->_tpl_vars['user_select']; ?>
<?php endif; ?></u></li>
          <li>金额：<i><?php echo $this->_tpl_vars['money']; ?>
元</i></li>
        </ol>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div style="padding:0 0 10px 0;">
        <table width="100%" cellspacing="0" cellpadding="0" border="1">
          <tbody id="detail_tr">
            <tr> <?php if ($this->_tpl_vars['s'] == 'bk'): ?>
              <th>客队<span>VS</span>主队</th>
              <?php else: ?>
              <th>主队<span>VS</span>客队</th>
              <?php endif; ?>
              <th>我的选择</th>
            </tr>
          <?php $_from = $this->_tpl_vars['matchInfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['matchInfo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['matchInfo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['matchInfo']):
        $this->_foreach['matchInfo']['iteration']++;
?>
          <tr>
            <td valign="middle" style="padding:5px 0;"><div class="wapCk"><strong style="text-align:right;"><?php if ($this->_tpl_vars['s'] == 'bk'): ?><?php echo $this->_tpl_vars['matchInfo']['a_cn']; ?>
<?php else: ?><?php echo $this->_tpl_vars['matchInfo']['h_cn']; ?>
<?php endif; ?></strong><i>VS</i><strong style="left:75px; text-align:left;"><?php if ($this->_tpl_vars['s'] == 'bk'): ?><?php echo $this->_tpl_vars['matchInfo']['h_cn']; ?>
<?php else: ?><?php echo $this->_tpl_vars['matchInfo']['a_cn']; ?>
<?php endif; ?></strong></div></td>
            <td valign="middle"><div style="width:155px;line-height:20px;margin:0 auto;word-wrap: break-word;word-break: normal;word-break:break-all;"><?php echo $this->_tpl_vars['matchInfo']['key_str']; ?>
</div></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          </tbody>
          
        </table>
      </div>
      <!--投注确认提交 start-->
      <div>
        <div class="confiRma">
          <p class="check none">
            <input type="checkbox" checked>
            同意<a href="<?php echo @ROOT_DOMAIN; ?>
/about/xieyi.html" target="_blank">《聚宝网代购协议》</a>，并已确认投注详情。</p>
          <p>
            <input type="submit" id="form_submit" class="confiRmaSub" value="确认购买" />
          </p>
        </div>
      </div>
      <!--投注确认提交 end-->
    </div>
  </div>
</form>
<!--center end-->
<!--footer start-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../ios/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--footer end-->
</body></html>
<?php /* Smarty version 2.6.17, created on 2017-10-18 11:17:16
         compiled from confirm/confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'confirm/confirm.html', 3, false),)), $this); ?>
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
<script type="text/javascript">
      /* 当鼠标在表格上移动时，离开的那一行背景恢复 */
      $(document).ready(function(){ 
            $(".admintable tr td").mouseout(function(){
                var bgc = $(this).parent().attr("bg");
                $(this).parent().find("td").css("background-color",bgc);
            });
      })
      
      $(document).ready(function(){ 
            var color="#f1f1f1"
            $(".admintable tr:odd td").css("background-color",color);  //改变偶数行背景色
            /* 把背景色保存到属性中 */
            $(".admintable tr:odd").attr("bg",color);
            $(".admintable tr:even").attr("bg","#fff");
      })
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
    <div class="touzhutips"><em>!</em><?php if ($this->_tpl_vars['s'] != 'bd'): ?>
      奖金可能在出票时变化，实际数值以票样信息为准。
      <?php else: ?>
      北单奖金SP值以北京体彩中心官方开奖为准!
      <?php endif; ?> </div>
    <!--提示文字信息  end-->
    <div>
<style>
.ustab{}
.ustab table tr{border-bottom:1px solid #ddd;}
.ustab table tr td{ line-height:30px;border-right:1px solid #ddd; padding:4px 0;}
</style>
      <div class="ustab">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr> <?php if ($this->_tpl_vars['s'] == 'bk'): ?>
              <th>客队</th>
              <th>主队</th>
              <?php else: ?>
              <th>主队</th>
              <th>客队</th>
              <?php endif; ?>
              <th style="border-right:1px solid #6f6f6f;">我的选择</th>
            </tr>
          <?php $_from = $this->_tpl_vars['matchInfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['matchInfo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['matchInfo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['matchInfo']):
        $this->_foreach['matchInfo']['iteration']++;
?>
          <tr>
            <td><div class=""><?php if ($this->_tpl_vars['s'] == 'bk'): ?><?php echo $this->_tpl_vars['matchInfo']['a_cn']; ?>
<?php else: ?><?php echo $this->_tpl_vars['matchInfo']['h_cn']; ?>
<?php endif; ?></div></td>
            <td><div class=""><?php if ($this->_tpl_vars['s'] == 'bk'): ?><?php echo $this->_tpl_vars['matchInfo']['h_cn']; ?>
<?php else: ?><?php echo $this->_tpl_vars['matchInfo']['a_cn']; ?>
<?php endif; ?></div></td>
            <td><?php echo $this->_tpl_vars['matchInfo']['key_str']; ?>
</td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          </tbody>
          
        </table>
      </div>
      <div class="waptouzhu" style="border-top:1px solid #ddd; position:relative;top:-1px;">
        <ul>
          <li>投注金额：<b><?php echo $this->_tpl_vars['money']; ?>
元</b></li>
          <li>过关方式：<b><?php if ($this->_tpl_vars['user_select'] == '1x1'): ?>单关<?php else: ?><?php echo $this->_tpl_vars['user_select']; ?>
<?php endif; ?></b></li>
          <li><span>(错误的串关将无法出票，请确认。)</span></li>
        </ul>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "../wap/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--footer end-->
</body></html>
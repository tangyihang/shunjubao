<?php /* Smarty version 2.6.20, created on 2016-01-26 19:58:04
         compiled from quan_post.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'quan_post.html', 49, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>圈子用户</title>
<link href="./js/common.css" type="text/css" rel="stylesheet">
<link href="./css/layout.css" rel="stylesheet" type="text/css">
<SCRIPT language=javascript src="js/jquery.js"></SCRIPT>
<SCRIPT language=javascript src="js/common.js" ></SCRIPT>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style></head>
<body style="margin:30px 0px 0px 8px;">
<form name="myform"  id="myform" method="Post">
<table width="99%"  border="0" cellpadding="3" cellspacing="1" class="p_table_order">
  <tr bgcolor="#F7F7F7">
  	<td colspan="12">
	
	<div align="left"><strong><span style="color:#FF0000"><span class="STYLE1">贴子列表</span></span></strong> <strong style="color:#FF0000">关键字</strong>:
          <input name="keywords" id="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
" size="8"/>,<strong  style="color:#FF0000">板块:</strong> 
          <?php echo $this->_tpl_vars['quan']; ?>
 ,<strong>是否置顶：</strong><input name="istop" id="istop" type="checkbox" value="1" <?php if ($this->_tpl_vars['topcheck'] == 1): ?>  checked="checked" <?php endif; ?>/> <input type="submit" name="Submit" value=" 搜 索 " />,<a href="quan_post.php">取消查询条件</a></div>	</td>
  </tr>
 
  <tr bgcolor="#F7F7F7">
  	<td width="55"><div align="center"><STRONG>系统ID</STRONG></div></td>
    <td width="75" bgcolor="#F7F7F7"><div align="center">模块</div></td>
    <td bgcolor="#F7F7F7"><div align="center">u_id</div></td>
    <td bgcolor="#F7F7F7"><div align="center">发贴人</div></td>
    <td bgcolor="#F7F7F7"><div align="center">昵称</div></td>
    <td bgcolor="#F7F7F7"><div align="center">内容</div></td>
    <td bgcolor="#F7F7F7"><div align="center">发布时间</div></td>
    <td width="115" bgcolor="#F7F7F7"><div align="center">排序号</div></td>
    <td width="115" bgcolor="#F7F7F7"><div align="center">是否置顶</div></td>
    <td width="115" bgcolor="#F7F7F7"><div align="center">点赞数</div></td>
    <td width="82" bgcolor="#F7F7F7"><div align="center">回复数</div></td>
    <td width="203" bgcolor="#F7F7F7"><div align="center"><strong>操作</strong></div></td>
  </tr>
  <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['datalist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
  <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#F7F8F8'">
  	<td width="55"><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
</div></td>
    <td><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['qid_name']; ?>
</div></td>
    <td width="67"><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['u_id']; ?>
</div></td>
    <td width="76"><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['u_name']; ?>
</div></td>
    <td width="77"><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['u_nick']; ?>
</div></td>
    <td width="220"><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['q_content']; ?>
</div></td>
    <td width="123"><div align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['datalist'][$this->_sections['a']['index']]['dtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</div></td>
    <td><div align="center"> <input name="orderby<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
" id="orderby<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
"  value="<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['orderby']; ?>
" size="3"  onblur="update_orderby('<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
')" onkeyup="this.value=this.value.replace(/[^\d]/ig,'')" onafterpaste="this.value=this.value.replace(/[^\d]/ig,'')"/><span id="orderbytip<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
"></span></div></td>
    <td><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['istop_show']; ?>
</div></td>
    <td><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['goodnum']; ?>
</div></td>
    <td><div align="center"><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['postnums']; ?>
</div></td>
    <td><div align="center">
      
      <?php if ($this->_tpl_vars['datalist'][$this->_sections['a']['index']]['istop'] == 1): ?>
      [<a href="<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['filename']; ?>
?action=update&id=<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
&istop=0&qid=<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['qid']; ?>
" > 取消置顶 </a>]
      <?php else: ?>
      [<a href="<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['filename']; ?>
?action=update&id=<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
&istop=1&qid=<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['qid']; ?>
" > 设为置顶 </a>]
      <?php endif; ?>
      [<a href="<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['filename']; ?>
?action=delete&id=<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['id']; ?>
" onclick="javascript:return confirm('将同时删除回复帖子？一旦删除将不可恢复');">删除</a>]
      </div>
    </td>
    </tr>
  <?php endfor; endif; ?>
  <tr bgcolor="#FFFFFF">
    <td colspan="12"><div align="center">每页<font color="#FF0000"> 
      <?php echo $this->_tpl_vars['pageSize']; ?>

      </font>条 共<font color="#FF0000">
        <?php echo $this->_tpl_vars['page']; ?>
 
        </font>页  共<font color="#FF0000">
          <?php echo $this->_tpl_vars['totalRecord']; ?>
 
          </font>条记录
      <?php echo $this->_tpl_vars['multi']; ?>

      </div></td>
  </tr>
  <tr bgcolor="#FFFFFF" style="height:30px;">
    <td colspan="12"><div align="center"></div></td>
  </tr>
</table>

</form>
<script>

	function update_orderby(id){
		

	if(id==''){
		return;
	}
		
	var orderby_value = $("#orderby"+id).val();
		
	$.ajax({
			type:'POST', //URL方式为POST
			url:'ajax_update_orderby.php', //这里是指向登录验证的頁面
			data:'id='+id+'&orderby_value='+orderby_value, //把要验证的参数传过去 
			dataType: 'json', //数据类型为JSON格式的验证 
			success: function(data) {
				if (data.status == "success") {
					$("#orderbytip"+id).html('ok');
					return true;
					//alert('修改成功');
				}else{
					$("#orderbytip"+id).html('出错');
					
					//$("#phone").focus();
					return true;
				}
			}
		});
		
	}
</script>

</body>
</html>
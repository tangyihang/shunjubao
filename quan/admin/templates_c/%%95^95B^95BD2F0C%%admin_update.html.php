<?php /* Smarty version 2.6.20, created on 2016-01-04 19:31:15
         compiled from admin_update.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="js/common.css" type="text/css" rel="stylesheet">
<link href="./css/layout.css" rel="stylesheet" type="text/css">
<script>
function check_pass(frm){
	if(frm.real_name.value==''){
	  alert('请输入真实姓名');
	  frm.real_name.focus();
	  return false;
	}
   if(frm.newcode2.value!=frm.newcode.value){
	  alert('两次密码输入不一致');
	  frm.newcode2.focus();
	  return false;
	}
}
</script>
</head>
<body style="margin:20px 0px 0px 8px;">
   <form action="" method="post" enctype="multipart/form-data" name="frm" id="frm" onSubmit="return check_pass(this)">
	<table width="99%" border="0" align=center cellpadding="3" cellspacing=1 class="p_table_order">
	<tr bgcolor="#FFFFFF">
	  <td><div align="right">登录名：</div></td>
	  <td><?php echo $this->_tpl_vars['username']; ?>
</td>
	</tr>
	<tr bgcolor="#FFFFFF">
	  <td><div align="right">真实姓名：</div></td>
	  <td><input name="real_name" type="text" id="real_name" class="input_text" value="<?php echo $this->_tpl_vars['real_name']; ?>
" />
      <font color="#ff6600">*</font></td>
	  </tr>
	<tr bgcolor="#FFFFFF">
		<td ><div align="right">原密码：</div></td>
		<td ><input name="oldcode" type="password" class="input_text" id="oldcode"></td>
	</tr>
	<tr bgcolor="#FFFFFF">
      <td><div align="right">新密码：</div></td>
	  <td><input name="newcode" type="password" class="input_text" id="newcode" /></td>
	  </tr>
	<tr bgcolor="#FFFFFF">
      <td><div align="right">确认密码：</div></td>
	  <td><input name="newcode2" type="password" class="input_text" id="newcode2" />
      <input name="action" type="hidden" id="action" value="update" /></td>
	  </tr>
	<tr bgcolor="#FFFFFF">
	  <td height="40" colspan="2"><div align="center">
          
          <input type=submit name=btnSubmit value=" 提　交 " class="input_submit">
          　　　　　
          <input type=button name=btnReset value=" 返  回 " class="input_submit" onclick="javascript:history.go(-1)" >
      </div></td>
	  </tr>
	</table>
   </form>
</body>
</html>
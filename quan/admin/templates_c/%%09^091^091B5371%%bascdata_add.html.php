<?php /* Smarty version 2.6.20, created on 2016-01-04 19:34:24
         compiled from bascdata_add.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./js/common.css" type="text/css" rel="stylesheet">
<link href="./css/layout.css" rel="stylesheet" type="text/css">
<SCRIPT language=javascript src="js/jquery.js"></SCRIPT>
<SCRIPT language=javascript src="js/common.js" ></SCRIPT>
</head>
<body style="margin:30px 0px 0px 8px;">
<form name="myform" method="Post" >
<table width="99%"  border="0" cellpadding="3" cellspacing="1" class="p_table_order">

  <tr bgcolor="#F7F7F7">
  	<td colspan="13">
    	<div align="left"><strong>添加数据</strong></div></td>
  </tr>

  <tr bgcolor="#FFFFFF">
    <td><div align="right">名称： </div>      
    <strong><label>
      </label>
      </strong></td>
    <td><label>
      <input name="tname" type="text" id="tname"  value="" size="30"/>
    </label>     </td>
    </tr>
  <tr bgcolor="#FFFFFF">
    <td><div align="right">类型：
    </div>      
      <label>      </label></td>
    <td><?php echo $this->_tpl_vars['key']; ?>

      <label>
      <select name="ttype" id="ttype">
        <option value="1">单选</option>
		<option value="2">多选</option>
		<option value="3">下拉</option>
      </select>
      </label></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><div align="right">中文标记： </div>
        <strong>
          <label> </label>
      </strong></td>
    <td><label>
      <input name="ttag" type="text" id="ttag"  value="" size="30"/>
      </label>    </td>
    </tr>
  <tr bgcolor="#FFFFFF">
    <td><div align="right">启用： </div>
        <strong>
        <label> </label>
      </strong></td>
    <td><label>
      <input name="tstatus" type="checkbox" id="tstatus" value="1" checked="checked" />
      </label>
      （选中为启用） </td>
    </tr>
  <tr bgcolor="#FFFFFF">
    <td><div align="right">备注说明： </div>
        <strong>
        <label> </label>
      </strong></td>
    <td><label>
      <textarea name="tdesc" cols="25" rows="3" id="tdesc"></textarea>
      </label>    </td>
    </tr>    
  <tr bgcolor="#FFFFFF">
    <td width="14%"></td>
    <td width="86%"><label>
    <input type="submit" name="Submit" value="提交" />
    <input type="button" name="Submit2" onclick="history.go(-1);" value="返回" />
    <input name="action" type="hidden" id="action" value="add_action" />
	
    </label></td>
  </tr>
</table>
</form>
</body>
</html>
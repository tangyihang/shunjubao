<?php /* Smarty version 2.6.17, created on 2017-10-19 14:16:07
         compiled from shendan.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="有人的地方，就有江湖，有江湖，就有大侠。智赢网，高手云集，各显神通，江湖风起云涌。神单展厅，汇集玄妙神功，天下间广为流传，引无数人献上膝盖。事了拂衣去，深藏身与名……">
<meta name="author" content="#">
<title>智赢网智赢神单展厅</title>
<link rel="stylesheet" href="css/menu.css">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Custom Fonts -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- Core JavaScript Files -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
  <div id='cssmenu' >
    <ul>
      <li><a href='http://www.zhiying365.com/'><span>智赢网</span></a></li>
      <!--      <li><a href='http://www.zhiying365.com/football/hhad_list.php'><span>竞彩足球</span></a></li>
      <li><a href='http://www.zhiying365.com/basketball/hdc_list.php'><span>竞彩篮球</span></a></li>
      <li><a href='http://www.zhiying365.com/ticket/show.php'><span>跟单中心</span></a></li>
      <li><a href='http://www.zhiying365.com/ticket/dingzhi.php'><span>跟单定制</span></a></li>
      <li class='last'><a href='http://news.zhiying365.com/footballtj/'><span>竞彩推荐</span></a></li>-->
    </ul>
  </div>
</div>
<div class="shandantips">
  <p>有人的地方，就有江湖，有江湖，就有大侠。</p>
  <p>智赢网，高手云集，各显神通，江湖风起云涌。</p>
  <p>神单展厅，汇集玄妙神功，天下间广为流传，引无数人献上膝盖。</p>
  <p> 事了拂衣去，深藏身与名……</p>
</div>
<div id="page-content" class="index-page">
  <div id="container">
    <!-- These are our grid blocks -->
    
    
    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['a'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['a']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['a']['iteration']++;
?>
    <div class="item"> <a class="example-image-link" href="http://www.zhiying365.com/www/statics/i/_r1_c1.png" data-lightbox="example-set" data-title="<?php echo $this->_tpl_vars['item']['tdesc']; ?>
"><img class="example-image" src="http://quan.zhiying365.com/<?php echo $this->_tpl_vars['item']['tpic']; ?>
" alt=""/></a>
      <div class="content-item">
        <p class="info"><?php echo $this->_tpl_vars['item']['tdesc']; ?>
</p>
      </div>
    </div>
   <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
<div class="page">
 <?php echo $this->_tpl_vars['multi']; ?>

</div>
</div>
<!-- Once the page is loaded, initialized the plugin. -->
<script type="text/javascript" src="js/jquery-2.1.1.js" ></script>
<!-- jQuery Pinterest -->
<script type="text/javascript" src="js/jquery.pinto.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- Light Box -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- Menu -->
<script src="js/script.js"></script>
<script type="text/javascript">
		$('#container').pinto();
	</script>
</body>
</html>
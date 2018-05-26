<?php /* Smarty version 2.6.17, created on 2017-10-19 14:45:19
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
<link href="http://m.zhiying365.com/www/statics/c/wap_header.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="http://www.zhiying365.com/www/statics/c/footer.css" />
<script type="text/javascript" src="http://m.zhiying365.com/www/statics/j/jquery-1.9.1.min.js"></script>
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
<body style="background:#f5f5f5;">
<script type="text/javascript">
var TMJF = jQuery.noConflict();
TMJF(function($) {
	var u_name = '';
	var cash = 0.00;
	var u_img ='';
	var arrCookie = document.cookie.split(/;\s*/); 
	//遍历cookie数组，处理每个cookie对 
	for(var i=0;i<arrCookie.length;i++){
		var arr = arrCookie[i].split("=");
		//找到名称为userId的cookie，并返回它的值
		if("u_name" == arr[0]){
			u_name = decodeURIComponent(arr[1]); 
		}
		if("cash" == arr[0]){
			cash = arr[1];
		}
		if("u_img" == arr[0]){
		u_img = decodeURIComponent(arr[1]); 
	}
	}
	var welcome_str = "&nbsp;";
	if (u_name != '') {
		if (u_img != '') {
		
			var u_img_str ='<img src="'+u_img+'">';
			
		}else{
			var u_img_str ='<img src="http://www.zhiying365.com/www/statics/i/touxiang.jpg">';
		}
		welcome_str += "<a href=\"http://www.zhiying365.com/account/user_center.php\">" + u_img_str +"<b>" + u_name + "</b></a><span>|</span><a href=\"http://www.zhiying365.com/account/user_charge.php\">充值</a><span>|</span><a href=\"http://www.zhiying365.com/passport/logout.php\">退出</a></h1>";
	} else {
		welcome_str += "<a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/login.php\">登录</a><span>|</span><a href=\"<?php echo @ROOT_DOMAIN; ?>
/passport/reg.php\">注册</a></h1>";
	}
	$(".topCenter").find("h1").eq(0).html(welcome_str);
	
});
var $ = jQuery.noConflict(true);
</script>
<div class="top">
  <div class="logo">
    <h1><a href="http://www.zhiying365.com/">智赢网</a></h1>
  </div>
  <div class="topCenter">
    <h1></h1>
    <div class="clear"></div>
  </div>
</div>
<div class="shandantips">
  <ul>
    <li style=" width:330px;">
      <dl>
        <dt><img src="http://www.zhiying365.com/www/statics/i/dalishuishou.jpg"></dt>
        <dd>
          <p>大力水手订阅号</p>
          <p>wanbocai</p>
          <p>每日精选赛事推荐！</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="http://www.zhiying365.com/www/statics/i/tuijianw.jpg"></dt>
        <dd>
          <p>智赢团队推荐号</p>
          <p>zhiyingwangtuandui</p>
          <p>第一手资讯及推荐！</p>
        </dd>
      </dl>
    </li>
    <li class="right" id="autotype">
      <p>有人的地方<span>，</span>就有江湖<span>，</span>有江湖<span>，</span>就有大侠。</p>
      <p>智赢网<span>，</span>高手云集<span>，</span>各显神通<span>，</span>江湖风起云涌。</p>
      <p>神单展厅<span>，</span>汇集玄妙神功<span>，</span>天下间广为流传<span>，</span>引无数人献上膝盖。</p>
      <p> 事了拂衣去，深藏身与名……</p>
    </li>
  </ul>
</div>
<script>
 $.fn.autotype = function(){
  var $text = $(this);
  console.log('this',this);
  var str = $text.html();//返回被选 元素的内容
  var index = 0;
  var x = $text.html('');
  //$text.html()和$(this).html('')有区别
  var timer = setInterval(function(){
   //substr(index, 1) 方法在字符串中抽取从index下标开始的一个的字符
   var current = str.substr(index, 1);
   if(current == '<'){
   //indexOf() 方法返回">"在字符串中首次出现的位置。
    index = str.indexOf('>', index) + 1;
   }else{
    index ++ ;
   }
   //console.log(["0到index下标下的字符",str.substring(0, index)],["符号",index & 1 ? '_': '']);
   //substring() 方法用于提取字符串中介于两个指定下标之间的字符
   $text.html(str.substring(0, index) + (index & 1 ? '_': ''));
   if(index >= str.length){
    clearInterval(timer);
   }
  },100);
 };
 $("#autotype").autotype();
</script>
<div id="page-content" class="index-page">
  <div id="container">
    <!-- These are our grid blocks -->
    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['a'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['a']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['a']['iteration']++;
?>
    <div class="item"> <a class="example-image-link" href="http://quan.zhiying365.com/<?php echo $this->_tpl_vars['item']['tpic']; ?>
" data-lightbox="example-set" data-title="<?php echo $this->_tpl_vars['item']['tdesc']; ?>
"><img class="example-image" src="http://quan.zhiying365.com/<?php echo $this->_tpl_vars['item']['tpic']; ?>
" alt=""/></a>
      <div class="content-item">
        <p class="info"><?php echo $this->_tpl_vars['item']['tdesc']; ?>
</p>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?> </div>
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
<?php /* Smarty version 2.6.17, created on 2017-10-28 18:08:20
         compiled from zhuanjia/zhuanjia_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'zhuanjia/zhuanjia_list.html', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../default/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../default/menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo ((is_array($_tmp='zj.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" >
<script type="text/javascript">
$(function(){

$("#hacker tr:odd").addClass('listtd');});</script>
<body>
<div id="fade" class="black_overlay"></div>
<!--专家中心center-->
<div class="center">
  <div class="tipsters">
    <div class="NewsNav">
      <h1><b>聚宝专家</b><em>停止盲目猜测...<br/>
        <span>跟随聚宝网专业分析师的建议</span></em>
        <ul>
          <li class="active"><a href="zhuanjia_list.php">浏览订阅分析师</a></li>
        </ul>
      </h1>
    </div>
  </div>
  <div class="haochu">
    <dl>
      <dt>1</dt>
      <dd>聚宝网的专家都是实战派</dd>
      <dt>2</dt>
      <dd>跟随专家推荐</dd>
      <dt>3</dt>
      <dd>提高您的收益率、命中率。</dd>
      <dt>4</dt>
      <dd>让您的利润蒸蒸日上 !</dd>
      <dd class="link"><a href="zhuanjiashenqing.php">专家<br/>
        申请</a></dd>
    </dl>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="zjlist">
    <h1><b>聚宝专家团<em>浏览订阅最牛的专家</em></b></h1>
    <div class="clear"></div>
    <dl>
      <dd>
        <h2>最优秀专家</h2>
        <h3>最好的服务</h3>
        <h4>谁是下一个</h4>
        <h5><img src="http://www.zhiying365.com/www/statics/i/sbgs.png"></h5>
      </dd>
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
      <dt>
        <p><img src="<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['u_img']; ?>
"><b><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['u_name']; ?>
</b><strong>胜率：<em><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['lv']; ?>
</em>&nbsp;&nbsp;&nbsp;&nbsp;战绩：<u><?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['zj']; ?>
赢<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['wzj']; ?>
输</u></strong><a href='zhuanjia_show.php?id=<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['eid']; ?>
'>查看详细</a><span><a href="javascript:void(0)" onClick="booking_expert('<?php echo $this->_tpl_vars['datalist'][$this->_sections['a']['index']]['eid']; ?>
')">订阅</a></span></p>
      </dt>
      <?php endfor; endif; ?>
    </dl>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="sharepages">
    <div align="center"><?php echo $this->_tpl_vars['multi']; ?>
 </div>
  </div>
  <div class="clear"></div>
</div>
<div id="light1" class="white_content">
  <div class="dyCenter">
    <h1>订阅聚宝专家<a href="">服务细则</a><span><a href="javascript:void(0)" onClick="document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'">关闭</a></span></h1>
    <div class="tips">
      <p>在订阅聚宝专家之前，请您确保您在聚宝网里的账户余额够支付此次订阅的费用!
      <p> 
    </div>
    <form action="booking_action.php" method="post">
      <div class="dyother">
        <dl>
          <dt>您的用户名：</dt>
          <dd><b><span id="yname"></span></b></dd>
        </dl>
        <dl>
          <dt>您订阅的专家：</dt>
          <dd><b><span id="ename"></span></b></dd>
        </dl>
        <dl>
          <dt>订阅内容：</dt>
          <dd>
            <ul>
              <li>
                <input type="radio" name='booktype' id="ifzj" value="1" >
              </li>
              <li>单场推荐(<span id="single"></span>元)</li>
              <li>
                <input type="radio"  name='booktype' value="2" checked="checked">
              </li>
                <li>订阅一周(<span id="week_money">50</span>元/周)</li>
              <li>
                <input type="radio"  name='booktype' value="3" >
              </li>
                <li>订阅一个月(<span id="month_money">188</span>元/月)</li>
            </ul>
          </dd>
        </dl>
        <dl class="dy">
          <dt>
            <input type="submit"  value="确认订阅" class="dingyuesub" name='' id="">
            <input name="action"  id="action" type="hidden" value="add_action">
            <input name="bookid"  id="bookid" type="hidden" value="">
            <input name="t"  id="t" type="hidden" value="">
          </dt>
        </dl>
        <div class="clear"></div>
        <div class="feiyong"><span>*</span>包周的专家一周至少推荐场次不低于7场；<em>包月的专家一月至少推荐场次不低于30场。</em></div>
      </div>
    </form>
    <h2>停止盲目猜测...跟随聚宝网专业分析师的建议。</h2>
  </div>
</div>
<!--专家中心end--> 
<!--聚宝页面底部 start-->
<div style="width:960px; margin:0 auto;">
 <script type="text/javascript">
    /*通栏图片960*60 创建于 2014-12-04*/
    var cpro_id = "u1844009";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!--聚宝页面底部 end-->
<script>



function booking_expert(id){ 

				$("#ifzj").attr("disabled", true);

		$.ajax({



			type: "post",



			url : "http://www.zhiying365.com/zhuanjia/booking_expert.php",



			dataType:'json',



			data: 'id='+id, 



			success: function(json){



				//alert(json.error);



				if(json.error=="no_login"){



					alert('请先登录!');	



					window.location.href="http://www.zhiying365.com/passport/login.php";



					return false;



				}else if(json.error=="err_value"){



					alert('订阅数据出错!');	



					return false;



				}else if(json.error=="err_id"){



					alert('订阅ID出错!');	



					return false;



				}else{



					



				   $("#yname").text(json.yname);



				    $("#ename").text(json.ename);



				    $("#single").text(json.single);
					$("#week_money").text(json.week_money);
				    $("#month_money").text(json.month_money);



					 $("#bookid").val(id);

					   $("#t").val('2');



					$("#light1").css("display","block");



					$("#fade").css("display","block");



					return true;



				}



				



			 }   



		});



}







function booking_sigle(id){ 

		$("#ifzj").attr("disabled", false);

		$.ajax({



			type: "post",



			url : "http://www.zhiying365.com/zhuanjia/booking.php",



			dataType:'json',



			data: 'id='+id, 



			success: function(json){



				//alert(json.error);



				if(json.error=="no_login"){



					alert('请先登录!');	



					window.location.href="http://www.zhiying365.com/passport/login.php";



					return false;



				}else if(json.error=="err_value"){



					alert('订阅数据出错!');	



					return false;



				}else if(json.error=="err_id"){



					alert('订阅ID出错!');	



					return false;



				}else{



					



				   $("#yname").text(json.yname);



				    $("#ename").text(json.ename);



				    $("#single").text(json.single);
					$("#week_money").text(json.week_money);
				    $("#month_money").text(json.month_money);



					 $("#bookid").val(id);

					   $("#t").val('1');



					$("#light1").css("display","block");



					$("#fade").css("display","block");



					return true;



				}



				



			 }   



		});



}



</script>
</body>
</html>
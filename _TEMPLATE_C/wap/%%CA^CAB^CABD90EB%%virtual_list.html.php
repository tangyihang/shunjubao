<?php /* Smarty version 2.6.17, created on 2018-03-05 04:31:00
         compiled from virtual_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'virtual_list.html', 196, false),)), $this); ?>
<title>CBA\中超-积分投注触屏版，竞猜CBA\中超来智赢!!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1' name='viewport' />
<meta content='yes' name='apple-mobile-web-app-capable' />
<meta content='black' name='apple-mobile-web-app-status-bar-style' />
<meta content='telephone=no' name='format-detection' />
<meta name="keywords" content="积分投注,CBA,CBA投注,中超投注,中超联赛,中国足球智赢网，智赢彩票"/>
<meta name="description" content="积分投注，专为中国CBA、中超球迷提供！" />
<link href="http://m.shunjubao.xyz/www/statics/c/wap_header.css" type="text/css" rel="stylesheet" />
<link href="http://m.shunjubao.xyz/www/statics/c/wap_footer.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="http://m.shunjubao.xyz/www/statics/c/wap_Jf.css" >
<script type="text/javascript" src="http://m.shunjubao.xyz/www/statics/j/jquery.js"></script>
<script type="text/javascript" src="http://m.shunjubao.xyz/www/statics/j/jquery-1.9.1.min.js"></script>
<script language="javascript" src="http://m.shunjubao.xyz/www/statics/j/common.js"></script>
<script language="javascript">
var Domain = 'http://m.shunjubao.xyz';
var ZY_CDN = 'http://m.shunjubao.xyz/www/statics';
var TMJF = jQuery.noConflict(true);
TMJF.conf = {
    	cdn_i: "http://m.shunjubao.xyz/www/statics/i"
    	, domain: "http://m.shunjubao.xyz"
};
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
var Domain = '<?php echo @ROOT_DOMAIN; ?>
';
</script>
<script type="text/javascript">
      /* 当鼠标在表格上移动时，离开的那一行背景恢复 */
      $(document).ready(function(){ 
            $(".stripe tr td").mouseout(function(){
                var bgc = $(this).parent().attr("bg");
                $(this).parent().find("td").css("background-color",bgc);
            });
      })
      
      $(document).ready(function(){ 
            var color="#f1f1f1"
            $(".stripe tr:odd td").css("background-color",color);  //改变偶数行背景色
            /* 把背景色保存到属性中 */
            $(".stripe tr:odd").attr("bg",color);
            $(".stripe tr:even").attr("bg","#fff");
      })
      </script>

</head>
<script type="text/javascript">
	$(document).ready(function(){
		$.post(Domain + '/prize/getPrize.php', {
			type : 1,
			limit : 40,
		}, function(data) {
			var jishi_html = '';
			if(data.ok) {
				var data_msg = data.msg;
				jishi_html += "<ul>";
				for(var key in data_msg) {
					jishi_html += "<li>"+data_msg[key].u_name+"<span>"+data_msg[key].prize+"元</span></li>";
				}
				jishi_html += "</ul>"
			}
			$("#scrollDiv_keleyi_com").html(jishi_html);
		}, 'json'
		);
		
	$("#subBtn").click(function(){
		var Multiple = Number($("#Multiple").val());
		Multiple = Multiple - 1;
		$("#Multiple").val(Multiple);
		cal();
	});
	$("#addBtn").click(function(){
		var Multiple = Number($("#Multiple").val());
		Multiple = Multiple + 1;
		$("#Multiple").val(Multiple);
		cal();
	});
	
	$("#Multiple").change(function(){
		cal();
	});
	$("#Multiple").keyup(function(){
		cal();
	});
	$(".o").click(function() {
		var active = $(this).hasClass("active");
		if(active) {
			$(this).removeClass("active");
		} else {
			$(this).addClass("active");
		}
		cal();
	});
	 
	$(".hideMatch").click(function(){
		var tr = $(this).closest('tr');
		tr.addClass('none');
	});
	
	$("#submit1").click(function(){
		
		var Multiple = $("#Multiple").val();
		var money = $("#money").val();
		var combination = $("#combination").val();
		if(money==''||money==0) return false;
		if(Multiple==''||Multiple==0) return false;
		if(combination=='') return false;
		
		return true;
	});
});
//投注1|h#1&a#1,2|a#2
function getCombination() {
	var combination = '';
	$(".match").each(function(){
		if(!$(this).hasClass('none')) {
			var a = $(this).find('.o');
			var odds = '';
			var matchId = $(this).attr('matchId');
			a.each(function(){
				if($(this).hasClass('active')) {
					var odd = $(this).attr('odd');
					if($(this).hasClass('oddh')) {
						odd = 'h#' + odd;
					}
					if($(this).hasClass('odda')) {
						odd = 'a#' + odd;
					}
					odds += odd + '&';
				}
			});
			if(odds !=''){
				odds = odds.substr(0, odds.length - 1);
				combination += matchId + '|' + odds + ',';
			}
		}
	});
	if(combination !='') combination = combination.substr(0, combination.length - 1);
	return combination;
}
//计算投注积分
function cal() {
	var Multiple = Number($("#Multiple").val());
	
	if(isNaN(Multiple)) {
		Multiple = 1;
	}
	
	if(Multiple>=100001) {
		alert('最大允许投注100000倍');
		Multiple=100000;
	}
	
	if(Multiple==0) Multiple=1;
	
	$("#Multiple").val(Multiple);
	
	var select = 0;
	$(".o").each(function(){
		if($(this).hasClass("active")) select++;
	});
	
	var money = select*Multiple*2;
	$("#betMoney").text(money);
	$("#money").val(money);
	$("#combination").val(getCombination());
}
</script>
<body>
<!--智赢页面头部 end-->
<div class="touzhutips"><em>!</em>所有赛事只能投注单场，不能串关!</div>
<!---->
<div class="tipsters">
  <div class="NewsNav">
    <h1><em>支持中国人自己的联赛!<br/>
      积分竞猜CBA/中超赢取彩金...</em></h1>
  </div>
</div>
<!---->
<!--center start-->
<div class="center">
  <div class="BitCenter">
    <div>
      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="stripe" id="dataList">
        <tr>
          <td><table cellspacing="0" cellpadding="0">
              <tbody>
              <?php $_from = $this->_tpl_vars['vb_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
              <tr matchId="<?php echo $this->_tpl_vars['item']['id']; ?>
" class="match">
                <td><div></div></td>
                <td style="width:65px;"><div class="Saishi">
                    <dl>
                      <dt><b class="name ssName" style="background:#<?php if ($this->_tpl_vars['item']['sport'] == 'fb'): ?>4D94FC<?php else: ?>FF6600<?php endif; ?>; color:#fff;"><?php echo $this->_tpl_vars['sportDesc'][$this->_tpl_vars['item']['sport']]['desc']; ?>
</b></dt>
                      <dd>
                        <p><u></u><i></i><strong style="font-weight:300;"><?php echo $this->_tpl_vars['item']['num']; ?>
</strong></p>
                        <p><span><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['start_time'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "") : smarty_modifier_truncate($_tmp, 10, "")); ?>
</span><em>截止</em></p>
                      </dd>
                      <dl>
                      </dl>
                    </dl>
                  </div></td>
                <td><div class="lcdxf">
                    <ul>
                      <li><b>
                        <hn><?php echo $this->_tpl_vars['item']['host_team']; ?>
</hn>
                        </b></li>
                      <li><span>VS</span></li>
                      <li><strong>
                        <gn><?php echo $this->_tpl_vars['item']['guest_team']; ?>
</gn>
                        </strong></li>
                      <li></li>
                    </ul>
                    <dl>
                      <dt>
                        <p><a class="o oddh" href="javascript:void(0);" odd="<?php echo $this->_tpl_vars['item']['h']; ?>
"><b>主队</b><span><?php echo $this->_tpl_vars['item']['h']; ?>
</span></a></p>
                        <p class="Rangfen"><?php echo $this->_tpl_vars['item']['remark']; ?>
</p>
						<p><a class="o odda" href="javascript:void(0);" odd="<?php echo $this->_tpl_vars['item']['a']; ?>
"><b>客队</b><span><?php echo $this->_tpl_vars['item']['a']; ?>
</span></a></p>
                      </dt>
                    </dl>
                  </div></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              </tbody>
              
            </table></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<form action="<?php echo @ROOT_DOMAIN; ?>
/confirm/confirm_vb.php" method="post" id="form1">
  <div class="betbox">
    <div class="jfc">
      <div class="Tbeishu">
        <ul>
          <li class="jian"><a class="" href="javascript:void(0);" id="subBtn">-</a></li>
          <li class="text">
            <input type="text" value="1" maxlength="7" autocomplete="off" id="Multiple" name="multiple">
          </li>
          <li class="jia"><a class="" href="javascript:void(0);" id="addBtn">+</a></li>
        </ul>
        <ul style="padding:10px 0 0 0;">
          <li class="jf">投注<b id="betMoney">0</b>积分</li>
        </ul>
      </div>
      <div class="BetCheckT">
        <div class="touzhuSub">
          <input type="hidden" name="money" id="money" value="0"/>
          <input type="hidden" name="combination" id="combination" value=""/>
          <input type="submit" id="submit1" value="立即投注">
        </div>
      </div>
    </div>
  </div>
</form>
<!--center end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../wap/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
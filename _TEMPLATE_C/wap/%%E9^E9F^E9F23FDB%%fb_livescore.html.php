<?php /* Smarty version 2.6.17, created on 2017-10-19 05:04:04
         compiled from livescore/fb_livescore.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'livescore/fb_livescore.html', 11, false),)), $this); ?>
<!DOCTYPE html>
<head>
<title>竞彩足球即时比分-聚宝网聚宝竞彩聚宝彩票触屏版！</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1' name='viewport' />
<meta content='yes' name='apple-mobile-web-app-capable' />
<meta content='black' name='apple-mobile-web-app-status-bar-style' />
<meta content='telephone=no' name='format-detection' />
<meta name="keywords" content="聚宝竞彩,聚宝彩票,足球比分,手机足球比分,竞彩足球,手机买竞彩,手机投注竞彩,手机玩球,手机买足彩,手机彩票,手机竞彩,wap竞彩,wap竞彩投注,聚宝手机版,聚宝触屏版买彩。" />
<meta name="description" content="竞彩足球即时比分，聚宝网聚宝竞彩聚宝彩票触屏版！" />
<link href="<?php echo ((is_array($_tmp='wap_header.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<link href="<?php echo ((is_array($_tmp='wap_footer.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<link href="<?php echo ((is_array($_tmp='bifen.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo ((is_array($_tmp='jquery.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='jquery-1.9.1.min.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
"></script>
</head>
<body>
<!--聚宝页面头部-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--center start-->
<div class="wapBftags">
  <ul>
    <li><a href="http://m.zhiying365.com/livescore/fb_livescore.php" class="active">竞彩足球</a></li>
    <li><a href="http://m.zhiying365.com/livescore/bk_livescore.php">竞彩篮球</a></li>
    <li class="right"><a href="http://m.zhiying365.com/livescore/fb_match_result.php">赛果开奖</a></li>
  </ul>
</div>
<div class="center">
  <div>
    <div>
      <div class="wapbifen"> <?php $_from = $this->_tpl_vars['show_betting']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['name']['iteration']++;
?>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" style="position:relative;">&nbsp;&nbsp;<i><?php echo $this->_tpl_vars['item']['m_num']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['l_cn']; ?>
</i><span style="position:absolute;top:23px;left:3px;"><?php echo $this->_tpl_vars['item']['weather']; ?>
</span></td>
            <td align="center" width="65"><div class="wapbiFentime"><?php echo $this->_tpl_vars['item']['starttime']; ?>
</div></td>
            <td align="right"><em id="status_<?php echo $this->_tpl_vars['item']['m_id']; ?>
"><?php echo $this->_tpl_vars['item']['status']; ?>
</em>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td align="right" width="140"><b><span><?php echo $this->_tpl_vars['item']['h_rc']; ?>
</span>&nbsp;<span><?php echo $this->_tpl_vars['item']['h_yc']; ?>
</span>&nbsp;<?php echo $this->_tpl_vars['item']['a_cn']; ?>
</b></td>
            <td align="center" width="65" style="padding:0; margin:0;width:65px;"><div class="wapbiFentime"><strong id="livescore_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['full']; ?>
</strong></div></td>
            <td align="left" width="140"><b><?php echo $this->_tpl_vars['item']['h_cn']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['a_yc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['a_rc']; ?>
</b></td>
          </tr>
        </table>
        <?php endforeach; endif; unset($_from); ?> </div>
      <div class="gonggao"><em style="color:#FF0000;">█ </em>红牌&nbsp;&nbsp;<span style="color:#FFFF00;">█ &nbsp;</span>&nbsp;黄牌&nbsp;&nbsp;&nbsp;暂停、取消、推迟：因场地或天气等原因比赛被迫暂停、取消或推迟开赛时间。详情请查看<a href="http://news.zhiying365.com/saishi/wap.php">销售公告</a>
        <p>特别提醒：比分数据仅供参考，最终结果以“赛果开奖”公布内容为准。</p>
      </div>
    </div>
  </div>
</div>
</div>
<script>
$(document).ready(function(){
setInterval(function (){check_livescore();}, 3000);
function check_livescore(){
	$.ajax({
			type:'POST', //URL方式为POST
			url:'fb_livescore_ajax.php', //这里是指向登录验证的頁面
			data:'date=1', //把要验证的参数传过去 
			dataType: 'json', //数据类型为JSON格式的验证 
			success: function(data) {
				if (data.status == "none") {
					//alert('当前无实时比分！');
					return;
				}else{
					var a = data.live_info; 
					for(var i = 0;i < a.length; i++) {
						//更新比分
						$("#livescore_"+a[i].m_id).html(a[i].live_score);
						
						$("#livescore_show_"+a[i].m_id).fadeOut(200).fadeIn(200);
						var beginTime = a[i].starttime;
						var endTime = new Date().Format("yyyy-MM-dd hh:mm:ss");
						var goTime = Math.round((Date.parse(endTime) - Date.parse(beginTime))/1000/60,0);
						
						if(goTime>120){
							var status = '完';
						}else{
							var status ="<img src='http://www.zhiying365.com/www/statics/i/in.gif' border=0>"+a[i].minute;
							
						}
						if(a[i].status=="中"){
							var status = '中';
	
						}
						//更新牌数
						//h_rc_  h_yc_  h_rc_ a_yc_
						if(a[i].h_rc>0){
							$("#h_rc_"+a[i].m_id).html(a[i].h_rc);
						}else{
							$("#h_rc_"+a[i].m_id).html('');
						}
						
						if(a[i].h_yc>0){
							$("#h_yc_"+a[i].m_id).html(a[i].h_yc);
						}else{
							$("#h_yc_"+a[i].m_id).html('');
						}
						
						if(a[i].a_rc>0){
							$("#a_rc_"+a[i].m_id).html(a[i].a_rc);
						}else{
							$("#a_rc_"+a[i].m_id).html('');
						}
						
						if(a[i].a_yc>0){
							$("#a_yc_"+a[i].m_id).html(a[i].a_yc);
						}else{
							$("#a_yc_"+a[i].m_id).html('');
						}
						
						
						$("#livescore_half_"+a[i].m_id).html(a[i].half);
						$("#status_"+a[i].m_id).html(status);
						$("#status_"+a[i].m_id).css("color","#00F");
			
					}
					return;
				}
			}
		});
		
	}
	
});




Date.prototype.Format = function (fmt) { 
    var o = {
        "M+": this.getMonth() + 1, //月份 
        "d+": this.getDate(), //日 
        "h+": this.getHours(), //小时 
        "m+": this.getMinutes(), //分 
        "s+": this.getSeconds(), //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
        "S": this.getMilliseconds() //毫秒 
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}

</script>
<!--center end-->
<!--聚宝页面底部 start-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../wap/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--聚宝页面底部 end-->
</body>
</html>
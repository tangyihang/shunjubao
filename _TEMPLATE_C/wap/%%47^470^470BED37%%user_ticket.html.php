<?php /* Smarty version 2.6.17, created on 2017-11-06 09:14:34
         compiled from user_ticket.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'user_ticket.html', 3, false),array('modifier', 'getPoolDesc', 'user_ticket.html', 395, false),)), $this); ?>
<div id="fade" class="black_overlay"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo ((is_array($_tmp='calendar.css')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" >
<script type="text/javascript" src="<?php echo ((is_array($_tmp='calendar.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='calendar-zh.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" ></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp='calendar-setup.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
"></script>
<style>
.calendar{border:none;}
table{text-align:center;border-bottom-width:0px;border-collapse:collapse;background:#fff;margin:0 auto;overflow:hidden; font-size:12px;}
table tr{}
table tr td{background:#fff;border:1px solid #e9e9e9;height:26px;line-height:26px;}
.shaidantable{border-top:none; margin:auto auto 20px auto; width:99%; font-size:12px;}
.shaidantable table{text-align:center;border-bottom-width:0;border-collapse:collapse;background:#fff;margin:0 0 30px 0;}
.shaidantable table tr{}
.shaidantable table tr:hover{background:#f9f9f9;}
.shaidantable table tr th{height:34px;line-height:34px;font-weight:300; background:#eee;}
.shaidantable table tr th span{ padding:0 0 0 10px;}
.shaidantable table tr td{height:36px;line-height:36px;border:none;border-bottom:1px solid #eee;}
.shaidantable table tr td.first{text-align:left;}
.shaidantable table tr td b{ont-weight:300;}
.shaidantable table tr td u{text-decoration:none;color:#666;}
.shaidantable table tr td em{border:1px solid #dc0000;padding:5px 7px;display:inline-table;display:inline-block;zoom:1;*display:inline;height:12px;line-height:12px;position:relative;top:-3px;left:10px;font-style:normal;color:#dc0000;}
.shaidantable table tr td b span{position:relative;top:-3px;}
.shaidantable table tr td b img{width:30px;height:30px;border:1px solid #ccc;border-radius:30px;margin:0 10px 0 2px;position:relative;top:7px;}
.shaidantable table tr td a{border:1px solid #ccc;color:#000;display:inline-table;display:inline-block;zoom:1;*display:inline;text-align:center;height:26px;line-height:26px; padding:0 8px;}
.shaidantable table tr td span{ padding:0 4px 0 0;}
.shaidantable table tr td span a{border:1px solid #dc0000;color:#dc0000;}
.shaidantable table tr td strong a:hover{}
.shaidantable table tr td.type{ position:relative; text-align:left;}
.shaidantable table tr td.type p{width:50px; height:26px; line-height:26px; overflow:hidden;}
.shaidantable table tr td.type em{ font-style:normal; position:absolute;top:8px; left:53px; width:20px; height:20px;border:1px solid #0099FF;line-height:20px; text-align:center; background:#fff;padding:0;color:#0099FF;}
.chaxunuser{ width:99%;margin:18px auto auto auto;}
.chaxunuser ul{width:100%;height:40px;}
.chaxunuser ul li{ float:left;height:32px;line-height:32px;text-align:left;}
.chaxunuser ul li.jiange{width:10px; text-align:center;}
.chaxunuser ul li.text{border:1px solid #ccc;width:30.2%;}
.chaxunuser ul li.text input{ background:#fff;border:1px solid #fff;color:#000;border:none;width:100%;height:30px;line-height:30px;text-align:left; padding:0;}
.chaxunuser ul li.sub{ background:#BC1E1F;width:32%;border-radius:2px;height:34px;line-height:34px;margin:0 2px 0 0;cursor:pointer; float:right;}
.chaxunuser ul li input{ background:none;color:#fff;border:none;width:100%;height:32px;line-height:32px;display:inline-table;display:inline-block;zoom:1;*display:inline;}
#start_time{background:none;border:none;width:100%;display:inline-table;display:inline-block;zoom:1;*display:inline;}
#end_time{background:none;border:none;width:100%;display:inline-table;display:inline-block;zoom:1;*display:inline;}
.black_overlay{display:none;background-color:#999;width:100%;height:100%;left:0;top:0;/*FF IE7*/
filter:alpha(opacity=80);/*IE*/
opacity:0.8;/*FF*/
z-index:9999999999999999999999;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/

}



.black_overla{display:none;background-color:#999;width:100%;height:100%;left:0;top:0;/*FF IE7*/
filter:alpha(opacity=80);/*IE*/
opacity:0.8;/*FF*/
z-index:9999999999999999999999;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/

}


.white_content{display:none;left:0%;/*FF IE7*/
top:0;/*FF IE7*/

z-index:9999999999999999999999;margin:0 auto;width:100%;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/}


.white_conten{display:none;left:0%;/*FF IE7*/
top:0;/*FF IE7*/

z-index:9999999999999999999999;margin:0 auto;width:100%;position:fixed!important;/*FF IE7*/
position:absolute;/*IE6*/

_top:e&shy;xpression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-

this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - 

this.clientHeight)/2);/*IE5 IE5.5*/background:#000;opacity:0.9;filter:alpha(opacity=90);height:100%;}
.white_conten h1{ height:50px;line-height:50px;}
.white_conten h1 a{}
.white_conten h1 a:hover{}
.white_conten dl{display:inline-table;display:inline-block;zoom:1;*display:inline;vertical-align:middle;text-align:center;}
.white_conten dl dt img {}
.white_conten dl dd{color:#fff;margin:0 auto;text-align:left;padding:20px 0 0 0;font-size:14px;}
.white_conten dl dd span{color:#666;font-size:12px;float:right;}
.MSCenter{border:2px solid #888;width:94%;height:100%;margin:0 auto;text-align:left;background:#fff;padding:10px;position:relative;margin:0 auto auto auto; text-align:left;}
.MSCenter h1{font-size:18px;font-weight:900;font-family:'微软雅黑';border-bottom:1px solid #ccc;height:40px;line-height:40px;position:relative; padding:0 0 10px 0; margin:0;}
.MSCenter h1 a{padding:0 0 0 10px;position:absolute;right:10px;top:0;color:#565656;font-size:14px;color:#dc0000;}
.MSCenter h2{font-size:12px;font-weight:300;font-family:'';height:24px;line-height:24px;text-align:center;background:#ccc;position:absolute;left:0;bottom:0;display:block;width:100%;color:#999;}
.sdanopenwindows{}
.sdanopenwindows h4{ height:40px; line-height:40px; font-weight:300; font-size:12px; padding:20px 0 0 28px;}
.sdanopenwindows h4 strong{ font-size:14px; font-weight:900;color:#dc0000;}
.sdanopenwindows ul li.sub{padding:15px 0 0 45px;}
.sdanopenwindows ul li.sub input{border:none;background:#CE050B;color:#fff;width:234px;height:38px;line-height:38px;text-align:center;font-size:16px;font-weight:900;cursor:pointer;font-family:'微软雅黑';display:inline-table;display:inline-block;zoom:1;*display:inline;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
.sdanopenwindows dl{ padding:10px 0;}
.sdanopenwindows dl.tips{ padding:5px;color:#777; clear:both; text-align:left;}
.sdanopenwindows dl.tips span{ font-size:14px; font-weight:900;color:red; position:relative;top:3px;left:-3px;}
.sdanopenwindows dl dt{ font-size:14px; height:50px; line-height:50px; font-weight:900;}
.sdanopenwindows dl dd{display:inline-table;display:inline-block;zoom:1;*display:inline; font-size:14px; font-size:12px;}
.sdanopenwindows dl dd.text{ padding:15px 0 5px 0;}
.sdanopenwindows dl dd.text input{ width:150px; height:26px; line-height:26px; text-align:center;}
.sdanopenwindows dl dd input{ position:relative;top:1px;}
.sdanopenwindows dl dd.sub{ margin:55px 0 150px 0;background:#CE050B; width:100%; height:38px; line-height:38px;display:inline-table;display:inline-block;zoom:1;*display:inline;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
.sdanopenwindows dl dd.sub input{border:none; background:none;color:#fff;height:36px;line-height:36px;text-align:center;font-weight:900;cursor:pointer;font-family:'微软雅黑';display:inline-table;display:inline-block;zoom:1;*display:inline; width:100%; font-size:18px; letter-spacing:3px;}
.NavphTab{ width:98%; margin:0 auto; height:45px;}
.NavphTab table{border:none;}
.NavphTab table tr{border:none;}
.NavphTab table tr td{background:#fff;border:none;}
.NavphTab table tr td a{color:#000;font-weight:300;font-size:14px;border-bottom:2px solid #ddd;height:40px;line-height:40px;display:block;}
.NavphTab table tr td a:hover{}
.NavphTab table tr td a.active{display:block;width:100%;color:#000;border-bottom:2px solid #dc0000; font-weight:300;}
</style>
</style>
</head><body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="NavphTab">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="<?php echo @ROOT_DOMAIN; ?>
/account/user_ticket.php"  class="active">竞彩投注</a></td>
      <td><a href="<?php echo @ROOT_DOMAIN; ?>
/account/user_virtual_ticket.php" >积分投注</a></td>
      <td style="text-align:right;"><a href="<?php echo @ROOT_DOMAIN; ?>
/account/user_encash.php" style="color:#777;font-size:12px;">投注<?php if ($this->_tpl_vars['totalTicketMoney']): ?><?php echo $this->_tpl_vars['totalTicketMoney']; ?>
<?php else: ?>0<?php endif; ?>&nbsp;中奖<?php if ($this->_tpl_vars['totalPrizeMoney']): ?><?php echo $this->_tpl_vars['totalPrizeMoney']; ?>
<?php else: ?><span>0</span><?php endif; ?>&nbsp;&nbsp;</a></td>
    </tr>
  </table>
</div>
<div class="clear"></div>
<form method="post">
  <div class="chaxunuser">
    <ul>
      <li class="text">
        <input type="text" name="start_time" id="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
">
      </li>
      <li class="jiange">-</li>
      <li class="text">
        <input type="text" name="end_time" id="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
">
      </li>
      <li class="sub">
        <input class="sub" name="" type="submit" value="查询">
      </li>
    </ul>
  </div>
</form>
<script type="text/javascript">
TMJF(function($) {
	//(window.parent.document).find("#main").load(function(){
		//var main = $(window.parent.document).find("#main");
		//var thisheight = $(document).height()+30;
		//main.height(thisheight);
	//});
	$("table tr:nth-child(odd)").css("background-color","#f9f9f9");
	$("#start_time").focus(function(){
		//if (!$("#start_time").val()) {
		showCalendar('start_time', 'y-mm-dd');
		//}
	});
	
	$("#end_time").focus(function(){
	   // if (!$("#end_time").val()) {
	    showCalendar('end_time', 'y-mm-dd');
	   // }
	});
	var org_details_html = $("#detail_tr").html();
	$(".show_details").click(function(){
		$(".URcenter").show();
		
		$.post(Domain + '/getUserTicketInfo.php'
                , {id: $(this).attr('userTicketId')
                  }
                , function(data) {
                    if (data.ok) {
                    	var ticketInfo = data.msg;
                    	var html = '';
                    	for(var i = 0; i<ticketInfo.length;i++) {
                    		var k= i+1;
                    		html += '<tr>';
                    		html += '<td>'+ k +'</td>';
                    		html += '<td>'+ ticketInfo[i].num +'</td>';
                    		html += '<td>'+ ticketInfo[i].l_code+'</td>';
                    		html += '<td>'+ ticketInfo[i].date +'&nbsp;&nbsp;'+ ticketInfo[i].time +'</td>';
                    		html += '<td>'+ ticketInfo[i].h_cn +'&nbsp;VS&nbsp;'+ ticketInfo[i].a_cn +'</td>';
                    		html += '<td>'+ ticketInfo[i].spool +'</td>';
                    		var option = ticketInfo[i].option;
                    		var option_html = '';
                    		for(var key in option) {
                    			if (key == 'red') {
                    				option_html += '<font color="red">'+option[key] +'</font>';
                    			} else {
                    				option_html += option[key];
                    			}
                    		}
                    		html += '<td>'+ option_html +'</td>';
                    		html += '<td>'+ ticketInfo[i].results +'</td>';
                    		html += '</tr>'
                    		$("#user_select").html(ticketInfo[i].user_select);
                        }
                    	$("#detail_tr").html(org_details_html + html);
                    	//$("#detail_tr").append(html);
                    } 
                }
                , 'json'
            );
	});
	$(".add_show_ticket").click(function(){
		$.post(Domain + '/operate.php'
                , {id: $(this).attr('userTicketId'),
					operate:'show_ticket'
                  }
                , function(data) {
                    if (data.ok) {
                    	alert('操作成功');
                    	window.location.reload(true);
                    } else {
                    	alert(data.msg);
                    }
                }
                , 'json'
            );
	});
	
	$(".add_show_ticket2").click(function(){
		$("#add_show_ticket2").val($(this).attr('userTicketId'));
		if($(this).attr('money')<64){
			alert('新晒单规则，您当前方案额度低于64元，不可晒单，请重新选择晒单方案！');
			return ;
		}
		$("#light1").show();
		$("#fade").show();
		return ;
	});
	$(".show_ticket_cancel").click(function(){
		$.post(Domain + '/operate.php'
                , {id: $(this).attr('userTicketId'),
					operate:'show_ticket_cancel'
                  }
                , function(data) {
                    if (data.ok) {
                    	alert('操作成功');
                    	window.location.reload(true);
                    } else {
                    	alert(data.msg);
                    }
                }
                , 'json'
            );
	});
});

function mysd(){
	var userTicketId = $("#add_show_ticket2").val();

	var show_range = $('input[name="show_range"]:checked').val();//显示人群
	var pay_rate = $('input[name="pay_rate"]:checked').val();//分成比例
	
	
		$.post(Domain + '/operate.php'
                , {id: userTicketId,show_range: show_range,pay_rate: pay_rate,
					operate:'show_ticket'
                  }
                , function(data) {
                    if (data.ok) {
                    	alert('操作成功');
                    	window.location.reload(true);
                    } else {
						$("#light1").hide();
						$("#fade").hide();
                    	alert(data.msg);
                    }
                }
                , 'json'
            );	
	
}

function show_tips(userTicketId,partent_u_id,partent_u_nick,prize){
	
	$("#add_tips_userTicketId").val(userTicketId);
	$("#tips_to").val(partent_u_id);
	
	$("#partent_u_nick").html(partent_u_nick);
	$("#prize").html(prize);
	
	$("#light2").show();
	$("#fade").show();
}


function mytips(){
	var userTicketId = $("#add_tips_userTicketId").val();
	var tips_to = $("#tips_to").val();
	var other_tips_money = $("#other_tips_money").val();
	if(other_tips_money>0){
		var tips_money = other_tips_money;//其它打赏金额
	}else{
		var tips_money = $('input[name="tips_money"]:checked').val();//打赏金额
	}
	
	
	
	
	$.post(Domain + '/operate.php'
                , {id: userTicketId,tips_to:tips_to,tips_money:tips_money,
					operate:'addtips'
                  }
                , function(data) {
                    if (data.ok) {
                    	alert('打赏成功，谢谢你的打赏！');
                    	window.location.reload(true);
                    } else {
						$("#light2").hide();
						$("#fade").hide();
                    	alert(data.msg);
                    }
                }
                , 'json'
            );	
	
}
function clearNoNum(obj){  
  obj.value = obj.value.replace(/[^\d.]/g,"");  //清除“数字”和“.”以外的字符   
  obj.value = obj.value.replace(/\.{2,}/g,"."); //只保留第一个. 清除多余的   
  obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");  
  obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3');//只能输入两个小数   
  if(obj.value.indexOf(".")< 0 && obj.value !=""){//以上已经过滤，此处控制的是如果没有小数点，首位不能为类似于 01、02的金额  
   obj.value= parseFloat(obj.value);  
  }  
} 


</script>
<!--投注记录 start-->
<div style="padding:15px 0 0 0;">
  <form method="post">
    <div class="timechaxun">
      <ul>
        <li>
          <input type="text" name="start_time" id="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
">
          &nbsp;- </li>
        <li>
          <input type="text" name="end_time" id="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
">
        </li>
        <li>
          <input type="submit" name="" class="TMchaxun" value="查询">
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </form>
  <div>
  <div class="shaidantable">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="stripese">
    <tr>
      <th align="left">方案类型</th>
      <th>金额</th>
      <!--<th>倍数</th>-->
      <th>状态</th>
      <th>奖金</th>
      <th align="right">详情&nbsp;&nbsp;</th>
      <?php if ($this->_tpl_vars['can_show_ticket']): ?>
      <th align="right" >操作&nbsp;&nbsp;</th>
      <?php endif; ?> </tr>
    <?php $this->assign('trade_money_in', 0); ?>
    <?php $_from = $this->_tpl_vars['userTicketInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ticket'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ticket']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['userTicket']):
        $this->_foreach['ticket']['iteration']++;
?>
    <?php $this->assign('trade_money_in', $this->_tpl_vars['userTicket']['money']+$this->_tpl_vars['trade_money_in']); ?>
    <tr>
      <td class="type"><?php if ($this->_tpl_vars['userTicket']['partent_id']): ?> <em>跟</em> <?php endif; ?>
        <p><?php echo ((is_array($_tmp=$this->_tpl_vars['userTicket']['sport'])) ? $this->_run_mod_handler('getPoolDesc', true, $_tmp, $this->_tpl_vars['userTicket']['pool']) : getPoolDesc($_tmp, $this->_tpl_vars['userTicket']['pool'])); ?>
</p></td>
      <td><?php echo $this->_tpl_vars['userTicket']['money']; ?>
</td>
      <!--<td><?php echo $this->_tpl_vars['userTicket']['multiple']; ?>
</td>-->
      <td><?php if ($this->_tpl_vars['userTicket']['print_state'] == 1): ?>
        已出票
         
        <?php elseif ($this->_tpl_vars['userTicket']['print_state'] == 3): ?>
        未出票
        <?php elseif ($this->_tpl_vars['userTicket']['print_state'] == 8): ?>
        失败退款
        <?php else: ?>
        出票中
        <?php endif; ?></td>
      <td align="center"><?php if ($this->_tpl_vars['userTicket']['prize_state'] == 1): ?><i style="font-style:normal;color:#dc0000;"><?php echo $this->_tpl_vars['userTicket']['prize']; ?>
</i> <?php else: ?><?php if ($this->_tpl_vars['userTicket']['prize_state']): ?>
        <?php echo $this->_tpl_vars['userTicketPrizeStateDesc'][$this->_tpl_vars['userTicket']['prize_state']]['desc']; ?>

        <?php else: ?>
        未开奖
        <?php endif; ?><?php endif; ?>
    </div>
    
    </td>
    
    <td class="show_details1" align="right"><a href="<?php echo @ROOT_DOMAIN; ?>
/account/ticket.php?userTicketId=<?php echo $this->_tpl_vars['userTicket']['id']; ?>
" userTicketId="<?php echo $this->_tpl_vars['userTicket']['id']; ?>
">详情</a></td>
      <?php if ($this->_tpl_vars['can_show_ticket']): ?>
      <?php if ($this->_tpl_vars['userTicket']['combination_type'] == 1): ?>
      <td align="right"><a href="javascript:void(0);" style="color:#333;border:none;" class="show_ticket_cancel1" userTicketId="<?php echo $this->_tpl_vars['userTicket']['id']; ?>
">已晒</a></td>
      <?php else: ?>
      <td align="right"><span> <?php if ($this->_tpl_vars['userTicket']['partent_id'] == 0): ?> <a href="javascript:void(0);" class="add_show_ticket2" money="<?php echo $this->_tpl_vars['userTicket']['money']; ?>
" userTicketId="<?php echo $this->_tpl_vars['userTicket']['id']; ?>
">晒</a> <?php endif; ?></span> <?php if ($this->_tpl_vars['userTicket']['partent_id'] > 0 && $this->_tpl_vars['userTicket']['prize_state'] == 1): ?>
        <!--中奖的跟单可以打赏-->
        <span><a href="javascript:void(0);"  href="javascript:void();" onClick="show_tips('<?php echo $this->_tpl_vars['userTicket']['id']; ?>
','<?php echo $this->_tpl_vars['userTicket']['partent_u_id']; ?>
','<?php echo $this->_tpl_vars['userTicket']['partent_u_nick']; ?>
','<?php echo $this->_tpl_vars['userTicket']['prize']; ?>
')">打赏</a></span><?php endif; ?>
        
        <?php endif; ?>
    </div>
    
    </td>
    
    <?php endif; ?>
    </tr>
    
    <?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<div> <?php if ($this->_tpl_vars['previousUrl'] || $this->_tpl_vars['nextUrl']): ?>
  <div class="pages" style="border-bottom:none;"> <?php if ($this->_tpl_vars['previousUrl']): ?> <a href="<?php echo $this->_tpl_vars['previousUrl']; ?>
">上一页</a> <?php endif; ?>
    <?php if ($this->_tpl_vars['nextUrl']): ?> <a href="<?php echo $this->_tpl_vars['nextUrl']; ?>
">下一页</a> <?php endif; ?> </div>
  <?php endif; ?> </div>
<div class="yiwen"><span style="color:red;padding:0 5px 0 0; position:relative;top:3px;">*</span>中奖详情请登录聚宝网站进行查询！</div>
</div>
</div>
<div id="light1" class="white_content">
  <div class="MSCenter">
    <h1>晒单设置<span><a href="javascript:void(0)" onClick="document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'">关闭</a></span></h1>
    <div class="sdanopenwindows">
      <dl>
        <dt>权限设置：</dt>
        <dd>
          <input type="radio" name="show_range" value="1" checked>
          所有人可见</dd>
        <dd>
          <input type="radio" name="show_range" value="2">
          跟单人可见</dd>
        <dd>
          <input type="radio" name="show_range" value="3">
          方案截止后可见 </dd>
      </dl>
      <dl>
        <dt>提成比例：</dt>
        <dd>
          <input type="radio" name="pay_rate" value="0" checked>
          无</dd>
        <dd>
          <input type="radio" name="pay_rate" value="1">
          1%</dd>
        <dd>
          <input type="radio" name="pay_rate" value="2">
          2%</dd>
        <dd>
          <input type="radio" name="pay_rate" value="3">
          3%</dd>
        <dd>
          <input type="radio" name="pay_rate" value="4">
          4%</dd>
        <dd>
          <input type="radio" name="pay_rate" value="5">
          5%</dd>
      </dl>
      <dl class="tips">
        <dd><span>*</span><strong>温馨提示：</strong>提成比例指用户进行跟单后，方案中奖，需要扣除对应的比例给到晒单人。中奖奖金（指的是中奖额度-投注本金）！</dd>
      </dl>
      <dl>
        <dd class="sub">
          <input id="add_show_ticket2" type="hidden" value="">
          <input type="button" name="sd" value="提交" id="sd"  onClick="return mysd()">
        </dd>
      </dl>
    </div>
    <h2>聚宝晒单中心-专家和明星会员推荐,打造竞彩中奖的福地！</h2>
  </div>
</div>
<div id="light2" class="white_content">
  <div class="MSCenter">
    <h1>我要打赏<span><a href="javascript:void(0)" onClick="document.getElementById('light2').style.display='none';document.getElementById('fade').style.display='none'">关闭</a></span></h1>
    <div class="sdanopenwindows">
      <dl class="tips" style="padding:20px 0 0 0;">
        <dd>跟单中了<strong id="prize" style="color:#dc0000;">0</strong>元,我要给<strong id="partent_u_nick" style="color:#dc0000;">0</strong>打赏。</dd>
      </dl>
      <dl>
        <dt>打赏金额</dt>
        <dd>
          <input type="radio" name="tips_money" checked value="1">
          1元</dd>
        <dd>
          <input type="radio" name="tips_money" value="2">
          2元</dd>
        <dd>
          <input type="radio" name="tips_money" value="5">
          5元</dd>
        <dd>
          <input type="radio" name="tips_money" value="10">
          10元</dd>
        <dd>
          <input type="radio" name="tips_money" value="50">
          50元</dd>
        <dd>
          <input type="radio" name="tips_money" value="100">
          100元</dd>
      </dl>
      <dl>
        <dt>其他金额</dt>
        <dd class="text" style="border:1px solid #ccc; width:99%; height:34px; line-height:34px; overflow:hidden; padding:0;">
          <input type="text" name="other_tips_money" id="other_tips_money" style="border:none;  background:#fff; width:99%; height:38px; line-height:38px; position:relative;top:-4px;" value="" onKeyUp="clearNoNum(this)">
        </dd>
        <dd>
      </dl>
      <dl class="tips">
        <dd><span>*</span>温馨提示：提交后，打赏额度直接从您账户余额扣除。</dd>
      </dl>
      <dl>
        <dd class="sub">
          <input id="add_tips_userTicketId" type="hidden" value="">
          <input id="tips_to" type="hidden" value="">
          <input type="button" name="sd" value="提交" id="sd"  onClick="return mytips()">
        </dd>
      </dl>
    </div>
    <h2>红单打赏-感谢晒单人，小小意思下。</h2>
  </div>
</div>
<!--投注记录 end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../wap/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
<?php /* Smarty version 2.6.17, created on 2016-02-18 22:08:02
         compiled from confirm/hilo_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'confirm/hilo_list.html', 169, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../app/confirm/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">

    var curPool = "hilo";

    var curPos = { gameCode: "bk", gameType: "竞彩篮球", poolName: "大小分", dataPool: "hilo" };

    function getDataBack(data) {

        if (Number(data.total) == 0) {
            alert("暂无开售赛事！");
            return;
        }

        var matchNameAry = [];

        var tmpAry = data.datas;

        var filterHtm = "";

        var htmStr = "<tr><td>";

        for (var i = 0; i < tmpAry.length; i++) {

            var obj = tmpAry[i];

            htmStr += "<div><tr><td><div class='DQtime'>" + obj.day + "<em>[11:30-次日11:30]</em><span><a href='javascript:void(0)' class='foldBtn'>隐藏</a></span><strong><a href='javascript:void(0);' class='showHide'>显示隐藏[<label class='hideNum'>0</label>]场</a></strong></div></td></tr>";

            htmStr += "<tr d='" + i + "'><td><table cellpadding='0' cellspacing='0'>";

            var listObj = obj.matchs[0];

            var count = 0;

            for (var key in listObj) {

                count++;

                var matchObj = listObj[key];

                var isFind = -1;

                for (var j = 0; j < matchNameAry.length; j++) {

                    if (matchNameAry[j].name == matchObj.l_cn) {

                        isFind = j;

                        matchNameAry[j].len++;

                        break;

                    }

                }

                if (isFind < 0) {

                    isFind = matchNameAry.length;

                    matchNameAry.push({ name: matchObj.l_cn, len: 1 });

                }

                htmStr += "<tr m='" + isFind + "' id='" + key + "' class='" + ((count % 2 == 0) ? " alt" : "") + ((matchObj.end == 1)?" game_end" : "")+"'>" +

                "<td>" +
				
				"<div>" +
				
				"<td style='width:65px;'>" +
				
				"<div class='Saishi'>" +
						  
				"<dl>" +
						  
				"<dt><b class='name ssName' style='background:" + matchObj.l_color + "; color:#fff;'>" + matchObj.l_cn + "</b></dt>" +
						  
			    "<dd>" +
						  
				"<p><u></u><i></i><strong>"+ matchObj.num + "</strong></p>" +
						  
				"<p><span>"+ matchObj.time+"</span><em>截止</em></p>" +
						  
				"</dd>" +
						  
				"<dt class='hidden'><a class='hideMatch' href='javascript:void(0);'>隐藏本场</a></dt>" +
						  
				"</dd>" +
						  
				"<dl>" +
						  
				"</div>" +
				
				"</td>" +
				
				"<td>" +
				
				"<div class='lcdxf'>" +
				
				"<ul>" +
				
				"<li><b><hn>" +matchObj.a_cn+ "</hn></b></li>" +
				
				"<li><span>VS</span></li>" +
				
				"<li><strong><gn>" + matchObj.h_cn+ "</gn></strong></li>" +
				
				"<li>"+ ((matchObj.danguan == 1)? "<em class='danguan'>单关</em>":"")+"</li>" +
				
				"</ul>" +
				
				"<dl>" +
				
				"<dt>" +
				
				"<p><a class='o' href='javascript:void(0);'><b>大分</b><em><label class='line' pool='hilo'>" + ((matchObj.hilo == undefined) ? "" : matchObj.hilo.goalline) + "</label></em><strong><label class='oddsItem'>"+ ((matchObj.hilo == undefined) ? "" : matchObj.hilo.h) 
				
				+"</label></strong></a></p>" +
				
				"<p><a class='o' href='javascript:void(0);'><b>小分</b><em><label class='line' pool='hilo'>" + ((matchObj.hilo == undefined) ? "" : matchObj.hilo.goalline) + "</label></em><strong><label class='oddsItem'>"+((matchObj.hilo == undefined) ? "" : matchObj.hilo.l)+"</label></strong></a></p>" +

				"</dt>" +
				
				"</dl>" +
				
				"</div>" +
				
				"</td>" +
				
				"</div>" +

                "</td>" +
				  
                "</tr>";

            }

            htmStr += "</table></td></tr>";

            htmStr += "</div>";

            filterHtm += "<em><input type='checkbox' checked />" + obj.num + "[" + count + "]</em>";

        }

        htmStr += "</td></tr>";

        $("#dataList").html(htmStr);

        $("#tip").html("");

        //filterPan

        $("#fDate").html(filterHtm);

        filterHtm = "";

        for (var i = 0; i < matchNameAry.length; i++) {

            filterHtm += "<em><input type='checkbox' checked />" + matchNameAry[i].name + "[" + matchNameAry[i].len + "]</em>";

        }

        $("#fMatches").html(filterHtm);

    }
</script>
<script src="<?php echo ((is_array($_tmp='publicFunc.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/javascript"></script>
</head><body>
<!--top start-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../app/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--top end-->
<!--touzhuNav start-->
<div class="touzhusubNav">
  <h1 class="hdc"><em><a href="<?php echo @ROOT_DOMAIN; ?>
/basketball/hdc_list.php">让分胜负</a><a href="<?php echo @ROOT_DOMAIN; ?>
/basketball/bk_crosspool.php">混合过关</a> <a href="<?php echo @ROOT_DOMAIN; ?>
/basketball/wnm_list.php">胜分差</a><a href="<?php echo @ROOT_DOMAIN; ?>
/basketball/hilo_list.php" class="active">大小分</a></em></h1>
</div>
<!--touzhuNav end-->
<!--center start-->
<div class="center">
  <table id="dataList" width="100%" border="0" class="stripe" cellpadding="0" cellspacing="0">
  </table>
</div>
<!--center end-->
<!--确认投注 strat-->
<script src="<?php echo ((is_array($_tmp='app_betbox.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/javascript"></script>
<!--确认投注 end-->
<!--footer start-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../app/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--footer end-->
</body>
</html>
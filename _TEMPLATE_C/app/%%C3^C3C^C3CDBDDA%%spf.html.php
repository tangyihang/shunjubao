<?php /* Smarty version 2.6.17, created on 2016-02-19 18:44:25
         compiled from beidan/spf.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getStaticsUrl', 'beidan/spf.html', 187, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../app/confirm/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">

    var curPool = "SPF";

    var curPos = { gameCode: "bd", gameType: "北京单场", poolName: "胜平负", dataPool: "SPF" };

    function getDataBack(data) {

        if (Number(data.total) == 0) {
            alert("没有数据！");
            return;
        }

        var lineAry = [1000, -1000];

        var matchNameAry = [];

        var tmpAry = data.datas;

        var filterHtm = "";

        var htmStr = "<tr>";

        for (var i = 0; i < tmpAry.length; i++) {

            var obj = tmpAry[i];

            htmStr += "<div><tr class='time'>";
            htmStr += "<td id='tdwin' colspan='7' style='border:none;'>";
            htmStr += "<div class='DQtime'><b>" + obj.w + "&nbsp;" + obj.day + "&nbsp;[10:00 -- 次日 10:00]</b>";
            htmStr += "<span><a href='javascript:void(0)' class='foldBtn'>隐藏</a></span>";
//             htmStr += "<strong><input type='checkbox' name=''>";
			htmStr += "<strong>";
            htmStr += "<a href='javascript:void(0);' class='showHide'>&nbsp;显示已隐藏比赛<b>[<label class='hideNum'>0</label>]</b>场</a>";
            htmStr += "</strong></div></td></tr>";
            
            htmStr += "<tr d='"+i+"'><td><table width='100%' cellpadding='0' cellspacing='0'><div>";

            
            var listObj = obj.matchs[0];

            var count = 0;

            for (var key in listObj) {

                count++;

                var matchObj = listObj[key];

                var goalLine = Number((matchObj.SPF == undefined) ? "0" : matchObj.SPF.goalline);

                if (goalLine > lineAry[1]) { lineAry[1] = goalLine } else if (goalLine < lineAry[0]) { lineAry[0] = goalLine };

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
                //让球数颜色
				var goalline_color = 'red';//默认让球
                if (matchObj.goalline > 0) {
                	goalline_color = 'green';//受让
                }
                if (matchObj.goalline == 0) {
                	goalline_color = 'black';
                }
                htmStr += "<tr l='" + goalLine + "' m='" + matchObj.num + "' id='" + key + "'" + ((count % 2 == 0) ? " class='alt'" : "") + ">" +

                           "<td style='width:65px;'>" +
						 
						  "<div class='bdSaishi'>" +
						  
						  "<dl>" +
						  
						  "<dt><b class='ssName' style='background:" + matchObj.l_color + "; color:#fff;'>" + matchObj.name + "</b></dt>" +
						  
						  "<dd>" +
						  
						  "<p><u></u><i></i><strong>" + matchObj.num + "</strong></p>" +
						  
						  "<p><span>" + matchObj.time + "</span><em>截止</em></p>" +
						  
						  "</dd>" +
						  
						  "<dt class='hidden' ><a class='hideMatch' href='javascript:void(0);'><em>&rsaquo;</em>&nbsp;隐藏本场</a></dt>" +
						  
						  "<dl>" +
						  
						  "</div>" +			 
						  
						  "</td>" +
						  
						  "<td>" +
						 
						  "<div class='beidanspf'>" +
						  
						  "<ul><li><hn>" + matchObj.h_cn + "</hn></li><li>VS</li><li><gn>" + matchObj.a_cn + "</gn></li></ul>" +
						  
						  "<dl>" +
						  
						  "<dt>" +
						  
						   "<p><a class='o' href='javascript:void(0);'><strong>主胜</strong><label class='oddsItem'>" +  matchObj.SPF.h + "</label></a></p>" +
						   
						   "<p><a class='o' href='javascript:void(0);'><strong>平局</strong><label class='oddsItem'>" +  matchObj.SPF.d + "</label></a></p>" +
						   
						   "<p><a class='o' href='javascript:void(0);'><strong>客胜</strong><label class='oddsItem'>" +  matchObj.SPF.a + "</label></a></p>" +
						   
						   "<p style='width:25px;height:44px;line-height:44px;'><span style='color:"+goalline_color+";border:1px solid "+goalline_color+";'>" + matchObj.goalline + "</span></p>" +
						   
						  "</dt>" +
						  
						  "</dl>" +
						  
						  "</div>" +
						  
						  "</td>" +
                          "</tr>";

            }

            htmStr += "</table></td></tr>";

            htmStr += "</div>";

            filterHtm += "<em><input type='checkbox' checked />" + obj.num + "[" + count + "]</em>";

        }

        htmStr += "</tr>";

        $("#dataList").html(htmStr);

        $("#tip").html("");

        //filterPan

        $("#fDate").html(filterHtm);

        filterHtm = "";

        for (var i = lineAry[0]; i <= lineAry[1]; i++) {

            var len = $("#dataList tr[l=" + i + "]").length;

            if (len != 0) {

                filterHtm += "<em><input type='checkbox' checked num='" + i + "' />" + ((i > 0) ? "客" : "主") + "让" + Math.abs(i) + "球[" + len + "]</em>";

            }

        }

        $("#fLetBall").html(filterHtm);

        filterHtm = "";

        for (var i = 0; i < matchNameAry.length; i++) {

            filterHtm += "<em><input type='checkbox' checked />"+matchNameAry[i].name+"["+ matchNameAry[i].len +"]</em>";

        }

        $("#fMatches").html(filterHtm);

    }
</script>
<script src="<?php echo ((is_array($_tmp='publicFunc_bd.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
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
  <h1>北单<em><a href="<?php echo @ROOT_DOMAIN; ?>
/beidan/spf.php" class="active">胜平负</a><a href="<?php echo @ROOT_DOMAIN; ?>
/beidan/sf.php">胜负<span></span></a><a href="<?php echo @ROOT_DOMAIN; ?>
/beidan/jqs.php">总进球</a><a href="<?php echo @ROOT_DOMAIN; ?>
/beidan/bqc.php">半全场</a><a href="<?php echo @ROOT_DOMAIN; ?>
/beidan/bf.php">比分</a><a href="<?php echo @ROOT_DOMAIN; ?>
/beidan/sxds.php">上下单双</a></em></h1>
</div>
<!--touzhuNav end-->
<!--center start-->
<div class="center">
  <div>
    <!--读取数据结果-->
    <table id="dataList" width="100%" border="0" class="stripe" cellpadding="0" cellspacing="1">
    </table>
    <!--读取数据结果 end-->
  </div>
</div>
<!--center end-->

<!--确认投注 strat-->
<script src="<?php echo ((is_array($_tmp='app_betbox.js')) ? $this->_run_mod_handler('getStaticsUrl', true, $_tmp) : getStaticsUrl($_tmp)); ?>
" type="text/javascript"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../confirm/betbox.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--确认投注end-->
<!--footer start-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../app/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--footer end-->
</body>
</html>
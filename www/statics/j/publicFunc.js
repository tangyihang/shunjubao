﻿//TMJF(function($){
var selAry = {};
var host = Domain;
var urlStr = host + "/confirm/matchlist_memcache.php?s=" + curPos.gameCode + "&p=," + curPos.dataPool;
var dAry, min_maxAry, tAry;
var manual_ticket_selet_limit_num = 4;//人工出票时的投注串关限制,4场或以上时只能投注n串1和n串m
var oddsTitle = { 
		had: ["胜", "平", "负"], 
		hhad: ["胜", "平", "负"], 
		ttg: ["0球", "1球", "2球", "3球", "4球", "5球", "6球", "7+球"], 
		hafu: ["胜胜", "胜平", "胜负", "平胜", "平平", "平负", "负胜", "负平", "负负"], 
		crs: ["1:0", "2:0", "2:1", "3:0", "3:1", "3:2", "4:0", "4:1", "4:2", "5:0", "5:1", "5:2", "胜其他", "0:0", "1:1", "2:2", "3:3", "平其他", "0:1", "0:2", "1:2", "0:3", "1:3", "2:3", "0:4", "1:4", "2:4", "0:5", "1:5", "2:5", "负其他"], 
		
		mnl: ["主负", "主胜"], 
		hdc: ["让分主负", "让分主胜"], 
		hilo: ["大", "小"], 
		wnm: ["客胜1-5", "客胜6-10", "客胜11-15", "客胜16-20", "客胜21-25", "客胜26+", "主胜1-5", "主胜6-10", "主胜11-15", "主胜16-20", "主胜21-25", "主胜26+"],
		
		SPF: ["胜", "平", "负"],
		SF: ["胜", "负"],
		JQS: ["0球", "1球", "2球", "3球", "4球", "5球", "6球", "7+球"],
		SXDS:["上+单","上+双","下+单","下+双"],
		BF:["1:0", "2:0", "2:1", "3:0", "3:1", "3:2", "4:0", "4:1", "4:2","胜其他", "0:0", "1:1", "2:2", "3:3", "平其他", "0:1", "0:2", "1:2", "0:3", "1:3", "2:3", "0:4", "1:4", "2:4", "负其他"],
		BQC:["胜胜", "胜平", "胜负", "平胜", "平平", "平负", "负胜", "负平", "负负"]
};
var oddsCode = {
		had: ["h", "d", "a"], 
		hhad: ["h", "d", "a"], 
		ttg: ["s0", "s1", "s2", "s3", "s4", "s5", "s6", "s7"], 
		hafu: ["hh", "hd", "ha", "dh", "dd", "da", "ah", "ad", "aa"], 
		crs: ["0100", "0200", "0201", "0300", "0301", "0302", "0400", "0401", "0402", "0500", "0501", "0502", "-1-h", "0000", "0101", "0202", "0303", "-1-d", "0001", "0002", "0102", "0003", "0103", "0203", "0004", "0104", "0204", "0005", "0105", "0205", "-1-a"], 
		
		mnl: ["a", "h"], 
		hdc: ["a", "h"], 
		hilo: ["h", "l"], 
		wnm: ["l1", "l2", "l3", "l4", "l5", "l6", "w1", "w2", "w3", "w4", "w5", "w6"],
		
		SPF: ["h", "d", "a"],
		SF: ["h", "a"],
		JQS: ["s0", "s1", "s2", "s3", "s4", "s5", "s6", "s7"],
		SXDS:["sd","ss","xd","xs"],
		BF: ["0100", "0200", "0201", "0300", "0301", "0302", "0400", "0401", "0402", "-1-h", "0000", "0101", "0202", "0303", "-1-d", "0001", "0002", "0102", "0003", "0103", "0203", "0004", "0104", "0204","-1-a"],
		BQC: ["hh", "hd", "ha", "dh", "dd", "da", "ah", "ad", "aa"], 
};
var oddsIndex = [
                 "胜", "平", "负", 
                 "让球胜", "让球平", "让球 负", 
                 "1:0", "2:0", "2:1", "3:0", "3:1", "3:2", "4:0", "4:1", "4:2", "5:0", "5:1", "5:2", "胜其他", 
                 "0:0", "1:1", "2:2", "3:3", "平其他", 
                 "0:1", "0:2", "1:2", "0:3", "1:3", "2:3", "0:4", "1:4", "2:4", "0:5", "1:5", "2:5", "负其他", 
                 "胜胜", "胜平", "胜负", "平胜", "平平", "平负", "负胜", "负平", "负负", 
                 "0球", "1球", "2球", "3球", "4球", "5球", "6球", "7+球"
                 ];
if (curPos.gameCode == "bk") oddsIndex = [
                 "主负", "主胜", 
                 "让分主负", "让分主胜", 
                 "大", "小", 
                 "客胜1-5", "客胜6-10", "客胜11-15", "客胜16-20", "客胜21-25", "客胜26+", 
                 "主胜1-5", "主胜6-10", "主胜11-15", "主胜16-20", "主胜21-25", "主胜26+"
                 ];
if (curPos.gameCode == "bd")  oddsIndex = [
                 "胜", "平", "负", 
                 "胜", "负",
                 "0球", "1球", "2球", "3球", "4球", "5球", "6球", "7+球",
                 "上+单", "上+双", "下+单", "下+双",
                 "1:0", "2:0", "2:1", "3:0", "3:1", "3:2", "4:0", "4:1", "4:2",  "胜其他", 
                 "0:0", "1:1", "2:2", "3:3", "平其他", 
                 "0:1", "0:2", "1:2", "0:3", "1:3", "2:3", "0:4", "1:4", "2:4",  "负其他", 
                 "胜胜", "胜平", "胜负", "平胜", "平平", "平负", "负胜", "负平", "负负"
                 ];
var optionAry = [
                 [],[["1串1", "1"]], 
                 [["2串1", "2"]], 
                 [["3串1", "3"], ["3串3", "2"], ["3串4", "23"]], 
                 [["4串1", "4"], ["4串4", "3"], ["4串5", "34"], ["4串6", "2"], ["4串11", "234"]], 
                 [["5串1", "5"], ["5串5", "4"], ["5串6", "45"], ["5串10", "2"], ["5串16", "345"], ["5串20", "23"], ["5串26", "2345"]], 
                 [["6串1", "6"], ["6串6", "5"], ["6串7", "56"], ["6串15", "2"], ["6串20", "3"], ["6串22", "456"], ["6串35", "23"], ["6串42", "3456"], ["6串50", "234"], ["6串57", "23456"]], 
                 [["7串1", "7"], ["7串7", "6"], ["7串8", "67"], ["7串21", "5"], ["7串35", "4"], ["7串120", "234567"]], 
                 [["8串1", "8"], ["8串8", "7"], ["8串9", "87"], ["8串28", "6"], ["8串56", "5"], ["8串70", "4"], ["8串247", "2345678"]],
                 [["9串1", "9"]],
                 ];
// 每个玩法之前的odds数量，参考oddsIndex
var poolOptionIndex = { 
		had: 0, hhad: 3, crs: 6, ttg: 46, hafu: 37, 
		mnl: 0, hdc: 2, hilo: 4, wnm: 6, crosspool: 0,
		SPF: 0, SF: 3, JQS: 5, SXDS: 13, BF: 17, BQC: 42
};
// 玩法的不同sp值个数
var poolOptionCount = { 
		had: 3, hhad: 3, crs: 31, ttg: 8, hafu: 9, 
		mnl: 2, hdc: 2, hilo: 2, wnm: 12, 
		SF: 2, SPF: 3, JQS: 8, SXDS: 4, BF: 25, BQC: 9
};
var poolIndex = { 
		fb: ["had", "hhad", "crs", "ttg", "hafu" ,"crosspool"], 
		bk: ["mnl", "hdc", "hilo", "wnm","crosspool"],
		bd: ["SF", "SPF", "JQS", "SXDS", "BF", "BQC"]
};
// 玩法串关数限制：比分crs4；总进球ttg6；版全场hafu4;胜分差wnm4；其他8
var selCountAry = { 
		had: 8, crs: 4, ttg: 6, hafu: 4, 
		mnl: 8, hdc: 8, hilo: 8, wnm: 4 ,crosspool: 4, 
		SPF:15, JQS: 6, SF: 15, SXDS: 6, BF: 3, BQC: 6
};
// 让分胜负最大串关数为8
// if (curPos.dataPool == 'mnl,hdc') selCountAry['crosspool'] = 8;
var crossAry = { 
		fb: { had: 0, hhad: 0, crs: 0, ttg: 0, hafu: 0 }, 
		bk: { wnm: 0, mnl: 0, hilo: 0, hdc: 0},
		bd: { SF: 0,  SPF: 0, JQS: 0,  SXDS: 0,BF: 0, BQC: 0}
};
// 串关数最小限制，1表示单关
var minCountAry = {
		fb: { had: 1, hhad: 1, crs: 1, ttg: 1, hafu: 1, crosspool:2}, 
		bk: { wnm: 1, mnl: 1, hilo: 1, hdc: 1, crosspool:2},
		bd: { SF: 3,  SPF: 1, JQS: 1,  SXDS: 1,BF: 1, BQC: 1}
};
$(document).ready(function() {
    // 调用数据接口
// $.getScript(urlStr + "&f=getDataBack", null);
    getScriptData(urlStr + "&_m=" + Math.random());
    // 全删
    $(".clearSel").click(function() {
        clearSel();
        calculate();
        fillOptionsPan();
    });
    // 点击选择面板中的已选项
    $("#selPan").delegate("b", "click", function() {
        // 从.active中删除
        var key = $(this).closest("ul").attr("key");
        var index = Number($(this).attr("index"));
        if (curPool == "crs") {
            $("#" + key).closest("tr").next().find(".o").eq(index - poolOptionIndex[curPool]).removeClass("active");
        } else if (curPool == "crosspool" && index >= 6) {
            $("#" + key).closest("tr").next().find(".o").eq(index - 6).removeClass("active");
        } else {
            $("#" + key).closest("tr").find(".o").eq(index - poolOptionIndex[curPool]).removeClass("active");
        }
        selAry[key].odds[index] = 1;
        //

        if ($(this).parent().children().length == 1) {
            $(this).closest("ul").remove();
            delete (selAry[key]);
        } else {
            $(this).remove();
            fillOptionsPan();
        }

        selCount();
        fillOptionsPan();
        calculate();
    });
    // 定胆
    $("#selPan").delegate("input", "click", function() {
        var key = $(this).closest("ul").attr("key");
        if ($(this).prop("checked")) {
            selAry[key].isDan = true;
        } else {
            selAry[key].isDan = false;
        }
        calculate();
    });
    // 删除一行
    $("#selPan").delegate(".Clear>a", "click", function() {
        var key = $(this).closest("ul").attr("key");
        // 从selAry中删除
        delete (selAry[key]);
        // 从.active中删除
        if (curPool == "crosspool") {
            $("#" + key).next().find(".active").removeClass("active");
            $("#" + key + " .active").removeClass("active");
        } else if (curPool == "crs") {
            $("#" + key).next().find(".active").removeClass("active");
        } else {
            $("#" + key + " .active").removeClass("active");
        }
        // sel面板中
        $(this).closest("ul").remove();
        selCount();
        fillOptionsPan();
        calculate();
    });
    // 隐藏更多过关面板
    $(".hideMore").click(function() {
        $(this).closest(".cMore>p").hide();
    });
    // 点击更多选项面板选项
    $("#optionMorePan").delegate("a", "click", function() {
        var indexAry = $(this).attr("num").split("_");
        var tmpStr = optionAry[indexAry[0]][indexAry[1]][1];
        var user_select_string = optionAry[indexAry[0]][indexAry[1]][0];
        
        $("#options>input").prop("checked", false);
        for (var i = 0; i < tmpStr.length; i++) {
            //var num = Number(tmpStr.charAt(i)) - 2;
            //$("#options>input").eq(Number(num)).prop("checked", true);
            //添加单关后m串n的bug
            var num = Number(tmpStr.charAt(i));
            $("#options>input").each(function(){
                if($(this).attr('opt') == num) {            
                    $(this).prop("checked", true);
                }  
            }); 
        }
        user_select(user_select_string);
        calculate();
    });
    // 点击过关选项
    $("#options").delegate("input", "click", function() {
        var opt = $(this).attr('opt');
        var selcount = selCount();
        //人工出票时串关数限制逻辑
        if (selcount >= manual_ticket_selet_limit_num && selcount<=selCountAry[curPool]) {
        	//非场次串1
        	if(opt != selcount) {
        		alert('请在“更多”中选择M串N容错');
        		return false;
        	}
            //场次串1时，其他串关取消选择
        	$("#options input").each(function() {
                if ($(this).prop("checked") && $(this).attr("opt") < selcount) {
                	$(this).prop("checked", false);
                }
            });
        }
        $("#user_select").val('');// 用户自定义串关时选项为空
        calculate();
    });
    // 倍数-按钮
    $("#subBtn").click(function() {
        changeTimes(-1);
    });
    // 倍数+按钮
    $("#addBtn").click(function() {
        changeTimes(1);
    });
    // 输入倍数
    $("#Multiple").keyup(function() {
        var num = Number($("#Multiple").val());
		if(isNaN(num)) {
			num = 1;
		}
        if (num < 1) num = 1;
        if (num > 100000) num = 100000;
        if ($("#Multiple").val() == '') num = $("#Multiple").val();
        $("#Multiple").val(num);
        calculate();
    });
    // 日期筛选checkbox
    $("#fDate").delegate("input:checkbox", "click", function() {
        $("#dataList a.foldBtn").eq($("#fDate input").index($(this))).click();
        c();
    });
    // 让球筛选checkbox
    $("#fLetBall").delegate("input:checkbox", "click", function() {
        if ($(this).prop("checked")) {
            $("#dataList tr[l=" + $(this).attr("num") + "]").show();
        } else {
            $("#dataList tr[l=" + $(this).attr("num") + "]").hide();
        }
        updateHideNum();
        c();
    });
    // 赛事筛选checkbox
    $("#fMatches").delegate("input:checkbox", "click", function() {
        var index = $("#fMatches input:checkbox").index($(this));
        if ($(this).prop("checked")) {
            $("#dataList tr[m=" + index + "]").show();
        } else {
            $("#dataList tr[m=" + index + "]").hide();
        }
        updateHideNum();
        c();
    });
    // 全选 反选 全清
    $(".DangQian").delegate("a", "click", function() {
        var obj = $("#" + $(this).closest("i").attr("ctl"));
        switch ($(this).text()) {
            case "全选":
                obj.find("input").prop("checked", true);
                $("#dataList tr").show();
                $("#dataList .time").each(function() {
                    $(this).find(".foldBtn").text("隐藏");
                    $(this).find(".hideNum").text("0");
                });
                break;
            case "反选":
                $(this).closest("i").prev().find("input").click();
                break;
            case "全清":
                obj.find("input").prop("checked", false);
                $("#dataList table tr").hide();
                $("#dataList .time").each(function() {
                    $(this).find(".foldBtn").text("显示");
                    $(this).find(".hideNum").text($(this).next().find("tr").length);
                });
                break;
        }
        c();
    });
    // 隐藏按钮
    $("#dataList").delegate("a.foldBtn", "click", function() {
        var index = $("#dataList a.foldBtn").index($(this));
        var obj = $(this).closest("tr");
        if ($(this).text() == "隐藏") {
            $(this).text("显示");
            obj.next().hide();
            var len = obj.next().find("tr").length;
            if (curPool == "crs" || curPool == 'crosspool') len = len / 2;
            obj.find(".hideNum").text(len);
            $("#fDate input").eq(index).removeAttr("checked");
        } else {
            $(this).text("隐藏");
            obj.next().show();
            obj.next().find("tr").show();
            var len = obj.next().find("tr[a!=1]:hidden").length;
            obj.find(".hideNum").text(len);
            $("#fDate input").eq(index).prop("checked", true);
        }
        c();
    });
    // 隐藏一场
    $("#dataList").delegate(".hideMatch", "click", function() {
        $(this).closest("tr").hide();
        if (curPool == "crs" || curPool == "crosspool") $(this).closest("tr").next().hide();
        var obj = $(this).closest("table");
        var len = obj.find("tr[a!=1]:hidden").length;
        obj.closest("tr").prev().find(".hideNum").text(len);
        c();
    });
    // 显示已隐藏的比赛
    $("#dataList").delegate(".showHide", "click", function() {
        var obj = $(this).closest("tr");
        obj.find("a.foldBtn").text("隐藏");
        obj.next().show();
        obj.next().find("tr[a!=1]:hidden").show();
        obj.find(".hideNum").text("0");
        c();
    });
    // 点击奖金
    $("#dataList").delegate(".o", "click", function() {
        if ($(this).text() == "") return;
        if ($(this).hasClass("noBorder")) return;
        
        var obj = $(this).closest("tr");
        if (obj.attr("id") == undefined) {
            obj = obj.prev();
        }
        var key = obj.attr("id");
        var oIndex = $(this).closest("tr").find(".o").index($(this)) + poolOptionIndex[curPool];
        if (curPool == "crosspool" && $(this).closest("tr").attr("id") == undefined) {
            oIndex += $(this).closest("tr").prev().find(".o").length;
        }

        if ($(this).hasClass("active")) {
            // 取消选择
            $(this).removeClass("active");
            // 数组中
            selAry[key].odds[oIndex] = 1;
            //
            if (eval(selAry[key].odds.join("*")) == 1) {
                delete (selAry[key]);
            }
        } else {
            // 选中
            $(this).addClass("active");
            if (selAry[key] == undefined) {
                selAry[key] = {};
                selAry[key].odds = [];
                if (curPos.gameCode == "fb") {
                	for (var o_n = 0; o_n < 54 ; o_n++){
                		selAry[key].odds.push(1);
                	}
                } else if(curPos.gameCode == "bk") {
                	for (var o_n = 0; o_n < 18 ; o_n++){
                		selAry[key].odds.push(1);
                	}
                } else {
                	for (var o_n = 0; o_n < 51 ; o_n++){
                		selAry[key].odds.push(1);
                	}
                }

                selAry[key].num = obj.closest("table").closest("tr").prev().find(".DQtime").find("b").text().substr(0, 2) + obj.find(".hideMatch").text();
                selAry[key].hostTeam = obj.find("hn").text();
                selAry[key].guestTeam = obj.find("gn").text();
                selAry[key].goalLine = {};

                // 判断场数
                if (!checkSelCount()) {
                    $(this).removeClass("active");
                    return;
                }

            }

            var lineObj = $(this).closest("td").find(".line");
            if (lineObj.length > 0) {
                selAry[key].goalLine[lineObj.attr("pool")] = lineObj.text();
            }

            var oddsStr = "";
            if (curPool == "crs" || curPool == "BF") {
                oddsStr = $(this).contents().eq(2).text().replace(/ /g, "");
            } else {
                var oddsItem = $(this).find(".oddsItem");
                if (oddsItem.length == 0) {
                    oddsStr = $(this).text();
                } else {
                    oddsStr = oddsItem.text();
                }
            }
            selAry[key].odds[oIndex] = Number(oddsStr);
        }
        
        fillSelPan();
        fillOptionsPan();
        var selcount = selCount();
        //串关数限制逻辑
        if(selcount >selCountAry[curPool]) {
         	alert('抱歉，只能选择 '+ selCountAry[curPool] +' 场或更少的比赛！ ');
         	$(this).click();
     		return false;
         }
        
        if (selcount >= manual_ticket_selet_limit_num && $("#user_select_count").val() != selcount) {
            //场次串1时，其他串关取消选择
        	$("#options input").each(function() {
                if ($(this).prop("checked") && $(this).attr("opt") < selcount) {
                	$(this).prop("checked", false);
                }
            });
        }
        user_select('');
        calculate();
    });
    // 查看详细
    $("#betBonus").click(function() {
    	return;
        var obj = $("#selDetailDiv");
        if (obj.css("display") == "none") {
// $("#fade").show();
// $("#light1").show();
            if (selCount() < 2) return;
            if ($("#betBonus").text() == "0") return;
            obj.html("&nbsp;&nbsp;计算中，请稍等...（如果浏览器长时间无反应，请刷新页面）");
            obj.show();
            calDetail();
        } else {
            obj.html("");
            obj.hide();
        }
    });
    // 投注按钮
    $(".touzhuSub input").click(function() {
        if ($("#betMoney").text() == "0") return;
        if ($("#Multiple").val() == "") return;
        // 需要登录
        if (!islogin()) {
            window.location = host + '/passport/login.php';
        	return ;
        }
        var subObj = {};
        subObj.sport = curPos.gameCode;
        subObj.select = getSelect();
        subObj.multiple = getMultiple();
        subObj.money = getMoney();
        subObj.combination = getCombination();
        subObj.user_select = getUserSelect();
        
        // 判断混串
        // var crossAry = { fb: { had: 0, hhad: 0, crs: 0, ttg: 0, hafu: 0 },
		// bk: { wnm: 0, mnl: 0, hilo: 0, had: 0} };
        for (var key in selAry) {
            for (var m = 0; m < poolIndex[curPos.gameCode].length; m++) {
                var poolStr = poolIndex[curPos.gameCode][m];
                var tmpStr = "";
                for (var j = poolOptionIndex[poolStr]; j < poolOptionCount[poolStr] + poolOptionIndex[poolStr]; j++) {
                    if (selAry[key].odds[j] != 1) {
                        tmpStr += oddsCode[poolStr][j - poolOptionIndex[poolStr]] + "#" + selAry[key].odds[j] + "&";
                    }
                }
                if (tmpStr != "") {
                    crossAry[curPos.gameCode][poolStr] = 1;
                }
            }
        }
        for (var key in crossAry[subObj.sport]) {
            if (crossAry[subObj.sport][key] == 1) {
                if (subObj.pool == undefined) {
                    subObj.pool = key;
                } else if (key != subObj.pool) {
                    subObj.pool = "crosspool";
                }
            }
        }
        // 投注最小串关数限制判断
        if (selCount() < minCountAry[curPos.gameCode][curPos.dataPool]) {
        	alert('至少选择' + minCountAry[curPos.gameCode][curPos.dataPool] + '场比赛');
        	return false;
        }
        // 比分单关
// if ((subObj.pool == 'crs' || subObj.pool == 'wnm' )&& subObj.select == '') {
// subObj.select = '1x1';
// }
        // $.post("Default.aspx", subObj, function(data, status) {
           // console.info("Data: " + data + "\nStatus: " + status);
        // });
        if (subObj.sport == 'bd') {
        	openBlank(host+"/confirm/confirm_bd.php", subObj, 1);
        } else {
        	openBlank(host+"/confirm/confirm.php", subObj, 1);
        }
        
        // openBlank("http://data.888win.cn/test/webtest/interface/confirm.php",
		// subObj, 1);
    });

    fillSelPan();
    fillOptionsPan();
    calculate();
    jsSelLotNum(curPos);// 初始化日期选择

    $("#jsSelLotNum").change(function() {
        clearSel();
        calculate();
        getScriptData(urlStr + "&d=" + $("#jsSelLotNum").val())
        $("#tip").html("<font color='red'>数据加载中...</font>");
    });
});
// 去掉obj中所有a标签的class
function gameEnd() {
	$(".game_end a").each(function(){
		$(this).removeClass('o');
	});
}
function islogin(){
	var u_name = '';
	var arrCookie = document.cookie.split(/;\s*/); 
	// 遍历cookie数组，处理每个cookie对
	for(var i=0;i<arrCookie.length;i++){
		var arr = arrCookie[i].split("=");
		// 找到名称为userId的cookie，并返回它的值
		if("u_name" == arr[0]){
			u_name = decodeURIComponent(arr[1]);
			break;
		}
	}
	return u_name != '';
}
// 用户选择的组合串关方式：3串4等
function user_select(user_select) {
	var count = selCount();
	var user_select_count = $("#user_select_count").val(); 
	//清除用户串关时，排除场次不变的情况
	if(user_select == '' && user_select_count == count) {
		return true;
	}
	$("#user_select").val(user_select);
	$("#user_select_count").val(count);
}
function getUserSelect() {
	return $("#user_select").val();
}
// 2x1|3x1
function getSelect() {
	var optionStr = getCombinOptStr();
    var selectOption = "";
    for (var i = 0; i < optionStr.length; i++) {
        selectOption += optionStr.charAt(i) + "x1|";
    }
    if ($("#options").html() == "单关") return "1x1";
    return selectOption.substr(0, selectOption.length - 1);
}
function getMultiple() {
	return Number($("#Multiple").val());
}
function getMoney() {
	return $("#betMoney").text();
}
function getCombination() {
	var combination = "";
	// var crossAry = { fb: { had: 0, hhad: 0, crs: 0, ttg: 0, hafu: 0 }, bk: {
	// wnm: 0, mnl: 0, hilo: 0, had: 0} };
    for (var key in selAry) {
        for (var m = 0; m < poolIndex[curPos.gameCode].length; m++) {
            var poolStr = poolIndex[curPos.gameCode][m];
            var tmpStr = "";
            for (var j = poolOptionIndex[poolStr]; j < poolOptionCount[poolStr] + poolOptionIndex[poolStr]; j++) {
            	if (selAry[key].odds[j] != 1) {
                    tmpStr += oddsCode[poolStr][j - poolOptionIndex[poolStr]] + "#" + selAry[key].odds[j] + "&";
                }
            }
            if (tmpStr != "") {
                crossAry[curPos.gameCode][poolStr] = 1;
                combination += poolStr + "|" + key + "|" + tmpStr.substr(0, tmpStr.length - 1) + ",";
            }
        }
    }
    
    if (combination != "") combination = combination.substr(0, combination.length - 1);
    return combination;
}
function getScriptData(urlStr) {
	$.post(urlStr
            , {
              }
            , function(data) {
                if (data.ok) {
                	getDataBack(data.msg);
                	gameEnd();// 结束的比赛去掉选项
                } else {
                	alert(data.msg);
                }
                return;
            }
            , 'json'
        );
}
function updateHideNum() {
    $("#dataList .time").each(function() {
        var len = $(this).next().find("tr[a!=1]:hidden").length;
        $(this).find(".hideNum").text(len);
    });
}
// 已选版面
function fillSelPan() {

    var htmlStr = "";
    for (var key in selAry) {		
        htmlStr += "<ul key='" + key + "'>" +
"                  <li class=\"bianhao\">" + selAry[key].num + "</li>" +
"                  <li class=\"zhu\">" + selAry[key].hostTeam + "</li>" +
"                  <li class=\"ke\">" + selAry[key].guestTeam + "</li>" +
"                  <li class=\"cc\">";

        for (var i = 0; i < selAry[key].odds.length; i++) {
            if (selAry[key].odds[i] != 1) {
                for (var j = 0; j < poolIndex[curPos.gameCode].length; j++) {
                    var poolStr = poolIndex[curPos.gameCode][j];
                    var startNum = poolOptionIndex[poolStr];
                    var endNum = startNum + poolOptionCount[poolStr];
                    if (i >= startNum && i < endNum) {
                        var showStr = oddsTitle[poolStr][i - startNum];
                        if (poolStr == "hhad") {
                            showStr = "(" + selAry[key].goalLine.hhad + ")" + showStr;
                        }
                        htmlStr += "<b pool='" + poolStr + "' index='" + i + "'>" + showStr + "</b>";
                        break;
                    }
                }
            }
        }
        htmlStr +=
"                  </li>" +
"                  <li class=\"Clear\"><a href=\"javascript:void(0);\">删除</a></li>" +
"                </ul>";
    }
    $("#selPan div.FloatC").html(htmlStr);
    selCount();
}
// 已选多少场
function selCount() {
    // 已选多少场
    var len = $("#selPan .FloatC>ul").length;
    $("#selPanBtn>span").text(len);
    return len;
}
// 删除全部已选择项
function clearSel() {
    selAry = {};
    fillSelPan();
    $("#dataList .active").removeClass("active");
}
// 当前选择中包含几场单关比赛
function getDanguanNum() {
	var num = 0;
	if (curPool != 'had' && curPool != 'mnl') {
		$("#dataList .active").each(function(){
			var	match = $(this).closest("tr").html().match("danguan");
			if (match) {
				num++;
			}
		});
	} else {
		$(".dgsaishi a").each(function(){
			var	match = $(this).hasClass('active');
			if (match) {
				num++;
			}
		});
		if (!rq()) num = 0;
	}
	return num;
}
// 足球和篮球让球、非让球玩法下选项是否能够单关
function rq() {
	var biaoqian = 'dl';// 匹配单关范围的标签
	var dg = true;
	if (host.match(/www/)) biaoqian= 'td';
	$("#dataList .active").each(function(){
		var	match = $(this).closest(biaoqian).html().match("dgsaishi");
		if (!match) {
			dg = false;
		}
	});
	return dg;
}
// 是否可以单关固定
function isDangu() {
	if (curPool == 'crs' || curPool == 'wnm' || curPool == 'ttg' || curPool == 'hafu' ) return true;// 比分所有比赛均可
	if (curPool == 'crosspool') return false;// 混合过关所有比赛均不可
	if (selCount() >=2) return false;
	// 让球和非让球的判断特殊
	if (curPool == 'had' || curPool == 'mnl') {
		return rq();
	}
	return getDanguanNum()==1;
}
function fillOptionsPan() {
    var existOptionAry = [];
    var is_dangu = isDangu();// 是否单固比赛
    $("#options input").each(function() {
        if ($(this).prop("checked")) {
            existOptionAry.push($(this).attr("opt"));
        }
    });
    var count = selCount();
    var htmlStr = "";
    var minCount = minCountAry[curPos.gameCode][curPool];
    // 加入单关判断
    if (count < minCount) htmlStr = "请选择" + minCount + "场及以上比赛";// options显示至少几场比赛
    else {
// if (count > 8) {
// count = 8;
// } else
        	if (count > selCountAry[curPool]) {
        		count = selCountAry[curPool];
        	}
        var minCounti = minCount;
        // if (minCount == 1) minCounti = 2;// 串关数最小值，可以单关时最小为2
        for (var i = minCounti; i <= count; i++) {
        	if(i == 1 && is_dangu) {
        		htmlStr += "<input opt='"+i+"' type=\"checkbox\" /><span>单关</span>";
        	} else if(i >1) {
        		htmlStr += "<input opt='"+i+"' type=\"checkbox\" /><span>" + i + "串1</span>";
        	}
        }
        if (curPool == 'had' || curPool == 'mnl') {
        	if(count == 1 && !is_dangu) {
        		htmlStr = "<input opt='2' type=\"checkbox\" /><span>2串1</span>";
        	}
        }
    }
    
    if (htmlStr != '') $("#options").html(htmlStr);

    // 已选择项
    for (var i = 0; i < existOptionAry.length; i++) {
        $("#options input[opt='" + existOptionAry[i] + "']").prop("checked", true);
    }
    
    // 更多面板
    htmlStr = "";
    if (count > 2) {
        //for (var i = 3; i <= count; i++) {
        //		for (var j = 1; j < optionAry[i].length; j++) {
        //           htmlStr += "<a href=\"javascript:void(0);\" num='" + i + "_" + j + "'>" + optionAry[i][j][0] + "</a>";
        //       }
        //}
        for (var i = count; i <= count; i++) {
                for (var j = 1; j < optionAry[i].length; j++) {
                    htmlStr += "<a href=\"javascript:void(0);\" num='" + i + "_" + j + "'>" + optionAry[i][j][0] + "</a>";
               }
        }
    }
    // 胜负过关不显示更多按钮
    if (curPool == 'SF') {
    	$(".cMore").hide();
    }
    $("#optionMorePan").html(htmlStr);
}
// 改变倍数
function changeTimes(type) {
    var times = Number($("#Multiple").val());
    times += type;
    if (times < 1) times = 1;
    if (times > 100000) times = 100000;
    $("#Multiple").val(times);
    calculate();
}
//
function checkSelCount() {
    var count = selCount();
    if (curPool == 'SF') {
    	if (count >= selCountAry[curPool]) {
          alert("最多选择" + selCountAry[curPool] + "场赛事！");
          return false;
      }
    }
    return true;
}
//
function getCombinAryByNum(arr, num) {
    var r = [];
    (function f(t, a, n) {
        if (n == 0) return r.push(t);
        for (var i = 0, l = a.length; i <= l - n; i++) {
            f(t.concat(a[i]), a.slice(i + 1), n - 1);
        }
    })([], arr, num);
    return r;
}
//
/* 四舍六入五成双 */
function rundFunc(data, m) {
    // if (data.toString().indexOf('万') > 0) return data; //如果数据中在万以上，不处理
    var dt = data.toFixed(8).toString();
    var pos = dt.indexOf('.') + 3;
    var key = parseInt(dt.charAt(pos));
    var vals = '';
    if (key < 5) {
        vals = dt.substr(0, pos);
    } else if (key > 5) {
        vals = (parseFloat(dt.substr(0, pos)) + 0.01).toString();
    } else {
        if (parseInt(dt.charAt(pos + 1)) > 0) {
            vals = (parseFloat(dt.substr(0, pos)) + 0.01).toString();
        } else if (parseInt(dt.charAt(pos - 1)) % 2) {
            vals = (parseFloat(dt.substr(0, pos)) + 0.01).toString();
        } else {
            vals = parseFloat(dt.substr(0, pos)).toString();
        }
    }
    return (Number(vals) * m).toFixed(2);
}
//
function oddsMNLimit(bonus, len) {
    bonus = rundFunc(bonus * 2, 1);
    // 奖金限制
    switch (len) {
        case 2:
        case 3:
            if (bonus > 200000) bonus = 200000;
            break;
        case 4:
        case 5:
            if (bonus > 500000) bonus = 500000;
            break;
        case 6:
        case 7:
        case 8:
            if (bonus > 1000000) bonus = 1000000;
            break;
    }
    return Math.round((bonus * Number($("#Multiple").val())) * 100) / 100;
}
//
function getCombinByIndex(len, optionStr) {
    var parse2Num = Math.pow(2, len) - 1;
    var infoAry = [];
    var tmpAry = [];
    for (var m = 0; m < optionStr.length; m++) {
        for (var i = 1; i <= parse2Num; i++) {
            var radix2Str = i.toString(2);
            var addNum = 0;
            var tmpAry = [];
            for (var j = radix2Str.length - 1; j >= 0; j--) {
                var bitValue = Number(radix2Str.charAt(j));
                addNum += bitValue;
                if (bitValue > 0) {
                    var aryIndex = radix2Str.length - 1 - j;
                    tmpAry.push(aryIndex);
                }
            }
            if (addNum == Number(optionStr.charAt(m))) {
                infoAry.push(tmpAry);
            }
        }
    }
    return infoAry;
}
//
function getCombinOptStr() {
    var combinOptionStr = "";
    var optionSelObj = $("#options input:checked");
    
    for (var i = 0; i < optionSelObj.length; i++) {
        var optionStr = optionSelObj.eq(i).attr("opt");
        combinOptionStr += optionStr;
    }
    return combinOptionStr;
}
//
function checkDanCount(optStr, dLen) {
    for (var i = 0; i < optStr.length; i++) {
        var tmpStr = optStr.charAt(i);
        if (Number(tmpStr) < dLen) {
            alert("胆的数量多于当前过关选项中的串关方式");
            return false;
        }
    }
    return true;
}
//
function getOddsLen(ary) {
    var len = 0;
    for (var i = 0; i < ary.length; i++) {
        if (ary[i] > 1) {
            len++;
        }
    }
    return len;
}
//
function getBonus(optionsStr, oddMaxAry, oddDanAry, multiCountAry, dCountAry) {
    // var len = oddMaxAry.length;
    // oddMaxAry = oddMaxAry.slice(len - goalCount);
    // oddMinAry = oddMinAry.slice(0, goalCount);

    var maxBonus = 0;
    // var minBonus = 0;
    var mnCount = 0;
    var selAryLen = selCount();

    for (var i = 0; i < optionsStr.length; i++) {
        var len = Number(optionsStr.charAt(i)) - oddDanAry.length;
        if (len < 0) continue;
        var resultAry = getCombinAryByNum(oddMaxAry, len);
        if (multiCountAry != null) {
            var tmpAry = getCombinAryByNum(multiCountAry, len);
            for (var m = 0; m < tmpAry.length; m++) {
                tmpAry[m] = tmpAry[m].join("*");
                if (tmpAry[m] == "") tmpAry[m] = 1;
                if (dCountAry.length > 0) {
                    tmpAry[m] += "*" + dCountAry.join("*");
                }
            }
            mnCount += eval(tmpAry.join("+"));
        }
        for (var j = 0; j < resultAry.length; j++) {
            var mergeAry = resultAry[j].concat(oddDanAry);
            var tmpBonus = eval(mergeAry.join("*"));
            maxBonus += oddsMNLimit(tmpBonus, selAryLen);
        }
    }
    return { maxBonus: Math.round(maxBonus * 100) / 100, mnCount: mnCount };
}
//
function calculate() {
    $("#betMoney").text("0");
    $("#betBonus").text("0");
    //
    var selAryLen = selCount();
    var combinOptionStr = getCombinOptStr();
    if (combinOptionStr == "" && (selAryLen != 1 && minCountAry[curPos.gameCode][curPool] != 1)) return;
    var times = Number($("#Multiple").val());

    if (selAryLen < 2 && getDanguanNum() >0 ) {
        // 比分单场
        if (minCountAry[curPos.gameCode][curPool] == 1 ) {
            var bonusValue = 0;
            var countValue = 0;
            for (var key in selAry) {
                var len = selAry[key].odds.length;
                for (var i = 0; i < len; i++) {
                    var curValue = selAry[key].odds[i];
                    if (curValue > 1 && bonusValue < curValue * 2 * times) {
                        bonusValue = curValue * 2 * times;
                    }
                    if (curValue > 1) countValue += 2;
                }
                $("#betMoney").text(countValue * times);
                $("#betBonus").text(bonusValue);
                $("#options").html("单关");
            }
        }
        return;
    }

    //
    dAry = [];
    tAry = [];
    for (var key in selAry) {
        if (selAry[key].isDan == undefined || !(selAry[key].isDan)) {
            tAry.push(selAry[key]);
        } else {
            dAry.push(selAry[key]);
        }
    }

    // 判断胆个数
    if (!checkDanCount(combinOptionStr, dAry.length)) {
        return;
    }

    // 胆中最大最小
    var dMaxAry = [];
    var dCountAry = [];
    var dMinAry = [];
    for (var i = 0; i < dAry.length; i++) {
        var minValue = 10000000;
        dCountAry.push(getOddsLen(dAry[i].odds));
        var maxValue = 1;
        for (var j = 0; j < dAry[i].odds.length; j++) {
            if (dAry[i].odds[j] == 1) {
                continue;
            }
            var oddsValue = Number(dAry[i].odds[j]);
            if (oddsValue > maxValue) {
                maxValue = oddsValue;
            }
            if (oddsValue < minValue) {
                minValue = oddsValue;
            }
        }
        dMinAry.push(minValue);
        dMaxAry.push(maxValue);
    }

    // 查找拖最大值和最小值
    var calMaxAry = [];
    var calMinAry = [];
    var multiCountAry = [];
    for (var i = 0; i < tAry.length; i++) {
        multiCountAry.push(getOddsLen(tAry[i].odds));
        var minValue = 10000000;
        var maxValue = 1;
        for (var j = 0; j < tAry[i].odds.length; j++) {
            if (tAry[i].odds[j] == "") {
                continue;
            }
            var oddsValue = Number(tAry[i].odds[j]);
            if (oddsValue > maxValue) {
                maxValue = oddsValue;
            }
            if (oddsValue < minValue) {
                minValue = oddsValue;
            }
        }
        calMinAry.push(minValue);
        calMaxAry.push(maxValue);
    }

    var maxBonus = 0;
    var mnCount = 0;

    var obj = getBonus(combinOptionStr, calMaxAry, dMaxAry, multiCountAry, dCountAry);
    maxBonus = obj.maxBonus;
    minBonus = obj.minBonus;
    mnCount = obj.mnCount;
    $("#betMoney").text(mnCount * 2 * times);
    $("#betBonus").text(maxBonus);

    //
    min_maxAry = { "dMax": dMaxAry, "dMin": dMinAry, "tMax": calMaxAry.sort(), "tMin": calMinAry.sort() };
}
//
function getMMBonus(optionsStr, ary, goalCount) {

    var oddMaxAry = ary.tMax.slice(ary.tMax.length - goalCount + ary.dMax.length);
    var oddMinAry = ary.tMin.slice(0, goalCount - ary.dMax.length);

    var maxBonus = 0;
    var minBonus = 0;

    for (var i = 0; i < optionsStr.length; i++) {
        var optNum = Number(optionsStr.charAt(i));
        if (optNum > goalCount) continue;
        var len = optNum - ary.dMax.length;
        if (len < 0) continue;

        var resultAry = getCombinAryByNum(oddMaxAry, len);
        for (var j = 0; j < resultAry.length; j++) {
            var mergeAry = resultAry[j].concat(ary.dMax);
            var tmpBonus = eval(mergeAry.join("*"));
            maxBonus += oddsMNLimit(tmpBonus, optNum);
        }

        resultAry = getCombinAryByNum(oddMinAry, len);
        for (var j = 0; j < resultAry.length; j++) {
            var mergeAry = resultAry[j].concat(ary.dMin);
            var tmpBonus = eval(mergeAry.join("*"));
            minBonus += oddsMNLimit(tmpBonus, optNum);
        }
    }
    return { maxBonus: Math.round(maxBonus * 100) / 100, minBonus: Math.round(minBonus * 100) / 100, goalCount: goalCount };
}
//
function getMNDetail(ary, optionStr) {
    var infoAry = getCombinByIndex(ary.length, optionStr);
    var returnAry = [];
    var radix = 32;
    for (var i = 0; i < infoAry.length; i++) {
        var tmpAry = infoAry[i];
        var oddsLenAry = [];
        for (var j = 0; j < tmpAry.length; j++) {
            var len = getOddsLen(ary[tmpAry[j]].odds);
            oddsLenAry.push(len.toString(radix));
        }
        var lenStr = oddsLenAry.join("");
        var startNum = parseInt((Math.pow(2, tmpAry.length) - 1).toString(2), radix);
        var endNum = parseInt(lenStr, radix);
        for (var j = startNum; j <= endNum; j++) {
            var tmpStr = j.toString(radix);
            var isContinue = false;
            for (var m = 0; m < tmpStr.length; m++) {
                if (tmpStr.charAt(m) > lenStr.charAt(m)) {
                    isContinue = true;
                    var str = tmpStr.substr(0, m);
                    for (var n = m; n < tmpStr.length; n++) {
                        str += "1";
                    }
                    num = parseInt(str, radix);
                    num += Math.pow(radix, tmpStr.length - m) - 1;
                    j = num;
                    break;
                }
            }
            if (isContinue) continue;
            returnAry.push([tmpStr, i]);
        }
    }
    return { combinAry: infoAry, indexAry: returnAry };
}
//
function calDetail() {
    var optionStr = getCombinOptStr();
    
    if (!checkDanCount(optionStr, dAry.length)) {
        return;
    }
    var htmlStr = "";
    var selAryLen = selCount();
    var times = Number($("#Multiple").val());
    
    // 计算中n场最大最小
    var mmStr = "";
    for (var i = 2; i <= selAryLen; i++) {
        if (i < Number(optionStr.charAt(0))) continue;
        var mmObj = getMMBonus(optionStr, min_maxAry, i);
        mmStr += "中" + mmObj.goalCount + "场[" + mmObj.minBonus + "～" + mmObj.maxBonus + "]";
    }
    htmlStr = "<h1>"+mmStr+"<i onClick='closemx();'>关闭</i></h1>";
// $("#selDetailDiv").html(htmlStr);

    // 计算胆中
    var ary = getMNDetail(dAry, dAry.length + "");
    var combinDAry = ary.combinAry;
    var indexDAry = ary.indexAry;
    var dResultAry = [];
    for (var i = 0; i < indexDAry.length; i++) {
        var oddsIndexStr = indexDAry[i][0] + "";
        var aryIndex = indexDAry[i][1];
        var fOdds = 1;
        var matchIndexStr = "";
        var tmpStr = "";
        for (var j = 0; j < oddsIndexStr.length; j++) {
            matchIndexStr += combinDAry[aryIndex][j];
            var tmpObj = dAry[combinDAry[aryIndex][j]];
            var oIndex = Number(oddsIndexStr.charAt(j)) - 1;
            var tmpOddsAry = [];
            for (var m = 0; m < tmpObj.odds.length; m++) {
                if (tmpObj.odds[m] != 1) {
                    tmpOddsAry.push({ "value": tmpObj.odds[m], "cn": oddsIndex[m],"num":tmpObj.num });
                }
            }

            fOdds *= Number(tmpOddsAry[oIndex].value);
            tmpStr += tmpOddsAry[oIndex].num + "(" + tmpOddsAry[oIndex].cn + "@" + tmpOddsAry[oIndex].value + ")x";
        }
        dResultAry.push({ "str": tmpStr, "bonus": fOdds });
    }

    // 计算拖中
    var combinOpt = "";
    for (var i = 0; i < optionStr.length; i++) {
        var tmpOpt = Number(optionStr.charAt(i)) - dAry.length;
        if (tmpOpt > 0) {
            combinOpt += tmpOpt;
        }
    }
    ary = getMNDetail(tAry, combinOpt);
    var combinAry = ary.combinAry;
    var indexAry = ary.indexAry;
    var resultStr = "";
    if (indexAry.length > 0) {
        for (var i = 0; i < indexAry.length; i++) {
            var oddsIndexStr = indexAry[i][0] + "";
            var aryIndex = indexAry[i][1];
            var fOdds = 1;
            var tmpStr = "";
            var matchIndexStr = "";
            for (var j = 0; j < oddsIndexStr.length; j++) {
                matchIndexStr += combinAry[aryIndex][j];
                var tmpObj = tAry[combinAry[aryIndex][j]];
                var oIndex = Number(oddsIndexStr.charAt(j)) - 1;

                var tmpOddsAry = [];
                for (var m = 0; m < tmpObj.odds.length; m++) {
                    if (tmpObj.odds[m] != 1) {
                        tmpOddsAry.push({ "value": tmpObj.odds[m], "cn": oddsIndex[m],"num":tmpObj.num });
                    }
                }

                fOdds *= Number(tmpOddsAry[oIndex].value);
                tmpStr += tmpOddsAry[oIndex].num + "(" + tmpOddsAry[oIndex].cn + "@" + tmpOddsAry[oIndex].value + ")x";
            }
            if (dResultAry.length > 0) {
                // 添加胆中条目
                for (var n = 0; n < dResultAry.length; n++) {
                    resultStr += "<p>" + (oddsIndexStr.length + dAry.length) + "串1 " + (tmpStr + dResultAry[n].str + times + "倍") + "=" + oddsMNLimit(fOdds * dResultAry[n].bonus, oddsIndexStr.length + dAry.length) + "</p>";
                }
            } else {
                resultStr += "<p>" + (oddsIndexStr.length + dAry.length) + "串1 " + tmpStr + times + "倍" + "=" + oddsMNLimit(fOdds, oddsIndexStr.length) + "</p>";
            }
        }

        //
        if (optionStr.indexOf("" + dAry.length) != -1) {
            for (var n = 0; n < dResultAry.length; n++) {
                resultStr += "<p>" + dAry.length + "串1 " + (dResultAry[n].str + times + "倍") + "=" + oddsMNLimit(dResultAry[n].bonus, dAry.length) + "</p>";
            }
        }

    } else { // 拖为0
        for (var n = 0; n < dResultAry.length; n++) {
            var tmpStr = "<p>" + dAry.length + "串1 ";
            resultStr += (tmpStr + dResultAry[n].str + times + "倍") + "=" + oddsMNLimit(dResultAry[n].bonus, dAry.length) + "</p>";
        }
    }
// $("#selDetailDiv").html(htmlStr + resultStr);
}


function openBlank(action, data, n) {
    var form = $("<form/>").attr('action', action).attr('method', 'post');
    if (n)
        form.attr('target', '_blank');
    var input = '';
    $.each(data, function(i, n) {
        input += '<input type="hidden" name="' + i + '" value="' + n + '" />';
    });
    form.append(input).appendTo("body").css('display', 'none').submit();
}
function jsSelLotNum(CurPos) {

    var dateStr = "";
    var curDate = new Date();
    var preDate = curDate.getTime() - 24 * 60 * 60 * 1000;
    for (var i = 0; i < 7; i++) {
        var preDate = new Date(curDate.getTime() - 24 * 60 * 60 * 1000 * i);
        var monthStr = (preDate.getMonth() + 1) + "";
        if (monthStr.length == 1) monthStr = "0" + monthStr;
        var dayStr = preDate.getDate() + "";
        if (dayStr.length == 1) dayStr = "0" + dayStr;
        var str = preDate.getFullYear() + "-" + monthStr + "-" + dayStr;
        dateStr += "<option " + ((i == 0) ? " selected=\"selected\" " : "") + "value='" + str + "'>" + str + ((i == 0) ? "" : "") + "</option>";
    }
    // 北单的期数与竞彩的不同
    if (CurPos.gameCode == 'bd') {
    	dateStr = "";
    	var urlStr = host + "/operate.php?operate=getIssueNumber";
    	var lotteryId = CurPos.dataPool;
    	$.post(urlStr
                , {
                  }
                , function(data) {
                    if (data.ok) {
                    	var issueNumbers = data.msg[lotteryId];
                    	for (var key in issueNumbers) {
                    		dateStr += "<option " + ((i == 0) ? " selected=\"selected\" " : "") + "value='" + issueNumbers[key] + "'>" + issueNumbers[key] + "</option>";
                    	}
                    	$("#jsSelLotNum").html(dateStr);
                    }
                    return;
                }
                , 'json'
            );
    } 
    if (CurPos.gameCode == 'fb' || CurPos.gameCode == 'bk') {
    	$("#jsSelLotNum").html(dateStr);
    }
}
// });

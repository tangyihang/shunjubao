<?php



/**
 * passport之：注册界面
 */
 
include_once dirname( __FILE__).DIRECTORY_SEPARATOR.'init.php';
$userInfo = Runtime::getUser();
$refer = Request::getReferer();
$tpl = new Template ();
#标题
$TEMPLATE ['title'] = "聚宝圈子";
$TEMPLATE['keywords'] = '专家推荐、单场推荐、付费推荐、专家订阅、竞彩足球、北单、单场竞猜、单场投注、大小球预测、亚盘、亚盘推荐、盘口玩法、赔率解析、亚洲盘口、NBA推荐、篮球推荐、盈利计划';
$TEMPLATE['description'] = '聚宝网专家订阅为彩民提供订阅推荐服务，聘请实战专家指导竞彩、北单及篮彩的投注。';
#埋藏跳转页面
$tpl->assign ('refer',$refer );
include_once ("config.inc.php");

$sql ="SELECT * FROM ".tname("bascdata_value")." where bd_id=1 order by orderby DESC LIMIT 0,100";			
$query = $conn -> Query($sql);
while($value = $conn -> FetchArray($query)){

	$quan_info = quan_info($value["tvalue"]);
	$value["tnums"]=$quan_info["tnums"];
	$value["qnums"]=$quan_info["qnums"];
	
	$result[] = $value;
}
$tpl -> assign('datalist', $result);


$YOKA ['output'] = $tpl->r ('quan/index');
echo_exit ( $YOKA ['output'] );














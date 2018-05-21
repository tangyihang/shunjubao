<?php
/**
 * 用户中心充值页
 */
include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'init.php';

#必须登录
Runtime::requireLogin();
$userInfo = Runtime::getUser();

$tpl = new Template();

#标题
$TEMPLATE ['title'] = "智赢网充值中心 ";
$TEMPLATE['keywords'] = '智赢竞彩,智赢网,智赢用户中心';
$TEMPLATE['description'] = '智赢网充值中心。';

#埋藏跳转页面

$tpl->assign('userInfo', $userInfo);

$objUserRealInfo = new UserRealInfo();
$objUserAccountFront = new UserAccountFront();

$userRealInfo = $objUserRealInfo->get($userInfo['u_id']);
$userAccount = $objUserAccountFront->get($userInfo['u_id']);

$tpl->assign('userRealInfo', $userRealInfo);
$tpl->assign('userAccount', $userAccount);

$YOKA ['output'] = $tpl->r ( 'user_charge_yee' );
echo_exit ( $YOKA ['output'] );
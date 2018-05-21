<?php
/**
 *功能：查询退款结果
 *版本：1.0
 *修改日期：2016-06-08
 '说明：
 '以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己的需要，按照技术文档编写,并非一定要使用该代码。
 '该代码仅供学习和研究派洛贝云计费接口使用，只是提供一个参考。
 */
if (!defined("prlpay_sdk_ROOT"))
{
	define("prlpay_sdk_ROOT", dirname(__FILE__) . DIRECTORY_SEPARATOR);
}
 
require_once(prlpay_sdk_ROOT . 'pearlpay_sdk.php');

$pp_sdk = new prlpay_sdk();

$params = array(
	'version' => $_GET['version'] || 1, // 版本号
	'signType' => 'md5',  // 签名类型 rsa、md5
	'appId' => pp_conf::APP_ID
);

empty($_GET['payNo']) && empty($_GET['outRefundNo']) && empty($_GET['refundNo']) && ( die('payNo、outRefundNo、refundNo 必填其中一项') );
!empty($_GET['outRefundNo']) && ($params['outRefundNo'] = $_GET['outRefundNo']);
!empty($_GET['payNo']) && ($params['payNo'] = $_GET['payNo']);
!empty($_GET['refundNo']) && ($params['refundNo'] = $_GET['refundNo']);


$returnJson = $pp_sdk->query_refund($params); //创建订单
echo $returnJson;
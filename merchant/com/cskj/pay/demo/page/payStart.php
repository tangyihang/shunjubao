<?php 
use com\cskj\pay\demo\common\ConfigUtil;
include '../common/ConfigUtil.php';

//total_fee=50&out_trade_no=wyCMB170824919901&bankCode=CMB&directPay=1&u_id=237

$total_fee = trim($_GET["total_fee"]);
$out_trade_no = trim($_GET["out_trade_no"]);
$bankCode = trim($_GET["bankCode"]);
$directPay = trim($_GET["directPay"]);

error_reporting(0);

date_default_timezone_set("PRC");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<link rel="stylesheet" type="text/css"
	href="../../../../../css/main.css">
<title>demo create order</title>

</head>
<body>
<div style="display:none">
<form action="../action/Gateway_ClientOrder.php" method="post" >
  <div class="content">
    <div class="content_0">
      <label>交易类型-tradeType:</label>
      <input type="txt" name="tradeType" value="cs.pay.submit">
      <br/>
        directPay:   <input type="txt" name="directPay" id="directPay" value="1">
        <br/>
     bankCode: <input type="txt" name="bankCode" id="bankCode" value="<?php echo $bankCode;?>">
 
      <br/>
      
      <label>版本-version:</label>
      <input type="txt" name="version" value="1.0">
      <br/>
      <label>支付渠道-channel:</label>
      <select id="channel" onchange="changeChannel(this)" name="channel">
        <option value="0">---请选择---</option>
        <option value="wxPub">微信公众账号支付</option>
        <option value="wxPubQR">微信公众账号扫码支付</option>
        <option value="wxApp">微信app支付</option>
        <option value="wxMicro">微信付款码支付</option>
        <option value="jdQpay">京东快捷支付</option>
        <option value="jdPay">京东支付</option>
        <option value="jdGateway" >京东网关</option>
        <option value="jdMicro">京东付款码支付</option>
        <option value="jdQR">京东扫码支付</option>
        <option value="gateway"  >网关支付</option>
         <option value="jdGatewayDebit"  selected>京东网关B2C（借）</option> 
        <option value="jdGatewayDebitCredit" >京东网关B2C（借贷）</option>
     
      </select>
      <br/>
      <label>商户号-mchId:</label>
      <input type="txt" name="mchId" value="<?php echo ConfigUtil::get_val_by_key('merchantNum');?>">
      <br/>
      <label>商品描述-body:</label>
      <input type="txt" name="body" value="智赢在线安全支付">
      <br/>
      <label>商户订单号-outTradeNo:</label>
      <input type="txt" name="outTradeNo" value="<?=$out_trade_no?>">
      <br/>
      <label>交易金额-amount:</label>
      <input type="txt" name="amount" value="<?=$total_fee?>">
      <br/>
      <label>附加数据-description:</label>
      <input type="txt" name="description" value="">
      <br/>
      <label>货币类型-currency:</label>
      <input type="txt" name="currency" value="CNY">
      <br/>
      <label>订单支付时间-timePaid:</label>
      <input type="txt" name="timePaid" value="">
      <br/>
      <label>订单失效时间-timeExpire:</label>
      <input type="txt" name="timeExpire" value="">
      <br/>
      <label>商品的标题-subject:</label>
      <input type="txt" name="subject" value="智赢在线安全支付">
      <br/>
      <div id="wxPub" style="display:none">
        <label>指定支付方式-limitPay:</label>
        <input type="txt" name="limitPay" value="">
        <br/>
        <label>openId:</label>
        <input type="txt" name="openId" value="">
        <br/>
        <label>结果通知url-notifyUrl:</label>
        <input type="txt" name="notifyUrl" value="">
        <br/>
        <label>商品标记-goodsTag:</label>
        <input type="txt" name="goodsTag" value="">
        <br/>
      </div>
      <div id="wxPubQR" style="display:none">
        <label>指定支付方式-limitPay:</label>
        <input type="txt" name="limitPay" value="">
        <br/>
        <label>商品id-productId:</label>
        <input type="txt" name="productId" value="">
        <br/>
        <label>结果通知url-notifyUrl:</label>
        <input type="txt" name="notifyUrl" value="">
        <br/>
        <label>商品标记-goodsTag:</label>
        <input type="txt" name="goodsTag" value="">
        <br/>
      </div>
      <div id="wxApp" style="display:none">
        <label>指定支付方式-limitPay:</label>
        <input type="txt" name="limitPay" value="">
        <br/>
        <label>结果通知url-notifyUrl:</label>
        <input type="txt" name="notifyUrl" value="">
        <br/>
        <label>商品标记-goodsTag:</label>
        <input type="txt" name="goodsTag" value="">
        <br/>
      </div>
      <div id="wxMicro" style="display:none">
        <label>授权码-authCode:</label>
        <input type="txt" name="authCode" value="">
        <br/>
        <label>结果通知url-notifyUrl:</label>
        <input type="txt" name="notifyUrl" value="">
        <br/>
        <label>商品标记-goodsTag:</label>
        <input type="txt" name="goodsTag" value="">
        <br/>
      </div>
      <div id="jdPay" style="display:none">
        <label>支付成功跳转路径url-callbackUrl:</label>
        <input type="txt" name="callbackUrl" value="<?php echo ConfigUtil::get_val_by_key('callbackUrl');?>">
        <br/>
        <label>支付完成后结果通知url-notifyUrl:</label>
        <input type="txt" name="notifyUrl" value="<?php echo ConfigUtil::get_val_by_key('notifyUrl');?>">
        <br/>
      </div>

      <input type="submit"   name="showlayerButton" value="下单" id="showlayerButton" class="btn1">
    </div>
  </div>
</form>

</div>
</body>
<script type="text/javascript" src="http://www.zhiying365.com/zx_alipay/js/jquery-2.1.0.min.js"></script>
<script>
$(window).load(function() {
	$('#showlayerButton').click();
});
</script>

<script type="text/javascript">
    function changeChannel(chan){
        for(var i=1;i<chan.length;i++)
        {
            var div = document.getElementById(chan.options[i].value);
            div.style.display="none";
        }
        if(chan.value != 0){
            document.getElementById(chan.value).style.display="";
        }
    }
	
	
    </script>
</html>

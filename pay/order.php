<?php
//error_reporting(0);
require_once "lib/WxPay.Api.php";
require_once "tool/WxPay.JsApiPay.php";
function get_wx_ord_param($nm,$attach,$price,$tags){
    $tools = new JsApiPay();
    $openId = $tools->GetOpenid();
    $input = new WxPayUnifiedOrder();
    $input->SetBody($nm);
    $input->SetAttach($attach);
    $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
    $input->SetTotal_fee($price);
    $input->SetTime_start(date("YmdHis"));
    $input->SetTime_expire(date("YmdHis", time() + 600));
    $input->SetGoods_tag($tags);
    $input->SetNotify_url("http://www.huazhuedu.com/pay/notify.php");
    $input->SetTrade_type("JSAPI");
    $input->SetOpenid($openId);
    $order = WxPayApi::unifiedOrder($input);
    $jsApiParameters = $tools->GetJsApiParameters($order);
    return $jsApiParameters;
//$editAddress = $tools->GetEditAddressParameters();
}

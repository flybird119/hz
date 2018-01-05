<?php
session_start();
require_once ("func_conn.php");
require_once("func_login.php");
require_once("func_sms.php");
error_reporting(0);
$_SESSION["SMS"] = mt_rand(1200,9998);
$mb_to = $_POST["mb"];
if(check_mobile_submit($mb_to)){
    $r =sendSms($mb_to,$_SESSION["SMS"]);
    if($r->Message ==="OK"){
        echo json_encode(["status"=>"yes","msg"=>"注册码已成功发送！"]);
        exit(0);
    }else{
        echo json_encode(["status"=>"no","msg"=>"发送频繁，请一分钟以后再试！"]);
        exit(0);
    }
}else{
    echo json_encode(["status"=>"no","msg"=>"请输入正确的手机号码！"]);
    exit(0);
}
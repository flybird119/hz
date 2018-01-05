<?php
session_start();
require_once('set_conf.php');
require_once('include/func_login.php');
require_once "jssdk/jssdk.php";
$jssdk = new JSSDK("wx4345c824a8e2c268", "1f1e486d69107dec2670ae1d02c90175");
$signPackage = $jssdk->GetSignPackage();
if(!isset($_GET["saler"])){
    $s="";
}else{
    $saler= check_mobile_submit($_GET["saler"]);
    if(!$saler){
        $s="";
    }
}
$smarty = new Smarty_HZ();
$smarty->assign('title',"项目介绍");
$smarty->assign('saler',$s);
$smarty->assign('JP',$signPackage);
$smarty->assign('css0',"./style/intro.css");
$smarty->display('intro.tpl');
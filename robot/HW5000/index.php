<?php
session_start();
require_once('./set_conf.php');
if (!isset($_SESSION["login"]) or !$_SESSION["login"]) {
    header("Content-Type: text/html;charset=utf-8");
    echo "<script>alert('请登陆!');sessionStorage.url=window.location.href;window.location.href='../../login_page.php';</script>";
    exit(0);
}
if(strpos($_SESSION["priv"],"F")===false){
    header("Content-Type: text/html;charset=utf-8");
    echo "<script>alert('此功能需要付费开通才能使用');window.location.href='../../buy.php';</script>";
    exit(0);
}
$smarty = new Smarty_HW5000();
$smarty->assign('title',"火灾报警控制器" );
$smarty->assign('media',1 );
$smarty->display('index.tpl');
?>
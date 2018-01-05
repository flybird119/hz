<?php
session_start();
require_once('set_conf.php');
if (!isset($_SESSION["login"]) or !$_SESSION["login"]) {
    header("Content-Type: text/html;charset=utf-8");
    echo "<script>alert('请先登陆，在进行操作!');sessionStorage.url=window.location.href;window.location.href='login_page.php';</script>";
    exit(0);
}
$mb = $_SESSION["mobile"];
$lvl = $_SESSION["lvl"];
$smarty = new Smarty_HZ();
$smarty->assign('title','会员中心 ');
$smarty->assign('mb',$mb);
$smarty->assign('lvl',$lvl);
$smarty->assign('js0',"script/member.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/member.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('member.tpl');
?>

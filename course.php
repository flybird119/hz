<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_buy.php");
$mysqli = get_conn();
$mb = $_SESSION["mobile"];
$orders= get_user_orders($mysqli,$mb);
close_conn($mysqli);
$smarty = new Smarty_HZ();
$smarty->assign('title','购买课程');
$smarty->assign('name','购买课程');
$smarty->assign('mb',$mb);
$smarty->assign('orders',$orders);
$smarty->assign('js0',"script/course.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/course.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('course.tpl');
?>

<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_my_deal.php");
$mb = $_SESSION["mobile"];
$mysqli=get_conn();
$deals = get_deal($mysqli,$mb);
$money = get_sum($deals);
close_conn($mysqli);
$smarty = new Smarty_HZ();
$smarty->assign('title','');
$smarty->assign('mb',$mb);
$smarty->assign('deals',$deals);
$smarty->assign('m',$money);
$smarty->assign('js0',"script/nz.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/score.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('my_deal.tpl');
?>

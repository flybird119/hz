<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_my_extend.php");
$mb = $_SESSION["mobile"];
$mysqli=get_conn();
$salers = get_extend($mysqli,$mb);
close_conn($mysqli);
$smarty = new Smarty_HZ();
$smarty->assign('title','');
$smarty->assign('mb',$mb);
$smarty->assign('salers',$salers);
$smarty->assign('js0',"script/nz.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/score.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('my_extend.tpl');
?>

<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_score.php");
$mb = $_SESSION["mobile"];
$mysqli = get_conn();
$scores = get_score($mysqli,$mb);
close_conn($mysqli);
$smarty = new Smarty_HZ();
$smarty->assign('title','历史成绩');
$smarty->assign('name','历史成绩');
$smarty->assign('mb',$mb);
$smarty->assign('scores',$scores);
$smarty->assign('js0',"script/nz.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/score.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('score.tpl');
?>

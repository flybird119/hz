<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
$smarty = new Smarty_HZ();
$smarty->assign('title','意见反馈');
$smarty->assign('name','意见反馈');
$smarty->assign('js0',"script/feedback.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/feedback.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('feedback.tpl');
?>

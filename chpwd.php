<?php
require_once('set_conf.php');
$smarty = new Smarty_HZ();
$smarty->assign('title','重置密码');
$smarty->assign('name','重置密码');
$smarty->assign('js0',"script/chpwd.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/chpwd.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('chpwd.tpl');
?>

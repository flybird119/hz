<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
$smarty = new Smarty_HZ();
$smarty->assign('title','代理申请');
$smarty->assign('name','代理申请');
$smarty->assign('js0',"script/dgt.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/dgt.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('dgt_prot.tpl');
?>

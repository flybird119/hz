<?php
session_start();
require_once('set_conf.php');
$smarty = new Smarty_HZ();
$smarty->assign('title',"404");
$smarty->assign('js0',"./script/nz.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/404.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('404.tpl');
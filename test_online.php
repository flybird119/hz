<?php
session_start();
require_once('set_conf.php');
$smarty = new Smarty_HZ();
$smarty->assign('title',"在线测试");
$smarty->assign('name',"在线测试");
$smarty->assign('js0',"./script/test_online.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/test_online.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('test_online.tpl');

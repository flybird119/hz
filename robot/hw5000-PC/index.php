<?php
require_once('./set_conf.php');
$smarty = new Smarty_HW5000();
$smarty->assign('title',"会员注册");
$smarty->assign('name',"会员注册");
$smarty->assign('js0',"./script/sign.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/nz.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('index.tpl');
?>
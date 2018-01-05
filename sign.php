<?php
require_once('set_conf.php');
$title="会员注册";
$smarty = new Smarty_HZ();
$smarty->assign('title',$title);
$smarty->assign('name',$title);
$smarty->assign('js0',"./script/sign.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/nz.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('sign.tpl');
?>

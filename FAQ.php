<?php
require_once('set_conf.php');
require_once('include/func_conn.php');
require_once('include/func_faq.php');
$mysqli = get_conn();
$qs = get_faq($mysqli);
close_conn($mysqli);
$smarty = new Smarty_HZ();
$smarty->assign('title','常见问题');
$smarty->assign('name','常见问题');
$smarty->assign('qs',$qs);
$smarty->assign('js0',"script/nz.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/faq.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('FAQ.tpl');
?>

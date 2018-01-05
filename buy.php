<?php
require_once('set_conf.php');
require_once('./include/func_conn.php');
require_once('./include/func_buy.php');

$mysqli = get_conn();
$goods = get_goods($mysqli);
$c = get_goods_class($goods );
$smarty = new Smarty_HZ();
$smarty->assign('title','套餐服务');
$smarty->assign('name','套餐服务');
$smarty->assign('ch',$c);
$smarty->assign('gs',$goods);
$smarty->assign('js0',"script/buy.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/buy.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('buy.tpl');
?>

<?php
require_once('set_conf.php');
$smarty = new Smarty_HZ();
$smarty->assign('title','趋势分析');
$smarty->assign('name','趋势分析');
$smarty->assign('js0',"script/echarts.simple.min.js");
$smarty->assign('js1',"script/chart.js");
$smarty->assign('css0',"style/chart.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('chart.tpl');
?>

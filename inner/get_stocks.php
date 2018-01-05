<?php
require_once('set_conf.php');
require_once("../include/conn.php");
require_once("include/lib.php");


$stocks= get_stocks($mysqli);

$mysqli->close();
echo var_dump($stocks);
$smarty = new Smarty_HZ();
$smarty->assign('title',"课程预订");
$smarty->assign('stocks',$stocks);

$smarty->display('stocks.tpl');
?>


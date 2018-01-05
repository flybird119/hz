<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_exam.php");
$wr_answer = base64_decode($_POST["p"]);
$wr_array=explode("|",$wr_answer); //从新组装字符串，防止注入
$new_wr_arr=array();
foreach($wr_array as $item){
    array_push($new_wr_arr,(int)$item);
}
$sql_id = implode(",",$new_wr_arr);
$mysqli=get_conn();
$rows =get_wr($mysqli,$sql_id);
close_conn($mysqli);
$count = count($rows);
shuffle($rows);
$title="错题解析";
$smarty = new Smarty_HZ();
$smarty->assign('title',$title);
$smarty->assign('name',$title);
$smarty->assign('show_answer',"");
$smarty->assign('chk_del_question',"");
$smarty->assign('rs',$rows);
$smarty->assign('count',$count);
$smarty->assign('js0',"./script/test.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/exam.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('test.tpl');
?>
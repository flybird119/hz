<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_exam.php");
$mysqli=get_conn();
$wr_answer = get_user_wrong_set($mysqli,$_SESSION["mobile"]);
if(!$wr_answer){
    $msg="错题集为空，请先参加模拟考试！";
    close_conn($mysqli);
    header('content-type:text/html;charset=utf-8');
    echo "<script>alert('$msg');window.history.back();</script>";
    exit(0);
}else{
    $mid= str_replace("|",",",$wr_answer);
    $sql_id=substr($mid,0,strlen($mid)-1);
    $rows =get_wr($mysqli,$sql_id);
}
shuffle($rows);
close_conn($mysqli);
$count = count($rows);
$title="模考错题汇总";
$smarty = new Smarty_HZ();
$smarty->assign('title',$title);
$smarty->assign('name',$title);
$smarty->assign('show_answer',"hidden");
$smarty->assign('chk_del_question',"");
$smarty->assign('rs',$rows);
$smarty->assign('count',$count);
$smarty->assign('js0',"./script/test.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/exam.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('test.tpl');
?>
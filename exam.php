<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_exam.php");
if(strpos($_SESSION["priv"],"D")===false){
    header("Content-Type: text/html;charset=utf-8");
    echo "<script>alert('此功能需要开通理论学习套餐');window.location.href='buy.php';</script>";
    exit(0);
}
$mysqli=get_conn();
$schema = get_exam_schame($mysqli,1001);//第一套考试方案，随机抽题
$scCount=(int)$schema["scCount"];
$mcCount=(int)$schema["mcCount"];
$tfCount=(int)$schema["tfCount"];
$book = $schema["book"];
if($schema["type"]){
    $SC_rows=get_act_exam_question($mysqli,1,$scCount,$book);
    $MC_rows=get_act_exam_question($mysqli,2,$mcCount,$book);
    $TF_rows=get_act_exam_question($mysqli,3,$tfCount,$book);
}
else{
    $SC_rows=get_theory_exam_question($mysqli,1,$scCount,$book);
    $MC_rows=get_theory_exam_question($mysqli,2,$mcCount,$book);
    $TF_rows=get_theory_exam_question($mysqli,3,$tfCount,$book);
}
$mysqli->close();
$smarty = new Smarty_HZ();
$smarty->assign('title',"模拟考试");
$smarty->assign('name',$schema["name"]);
$smarty->assign('exam',$schema);
$smarty->assign('mc_start',$scCount);
$smarty->assign('tf_start',$scCount+$mcCount);
$smarty->assign('count',$scCount+$mcCount+$tfCount);
$smarty->assign('sc',$SC_rows );
$smarty->assign('mc',$MC_rows );
$smarty->assign('tf',$TF_rows );

$smarty->assign('js0',"./script/md5.js");
$smarty->assign('js1',"./script/exam.js");
$smarty->assign('css0',"./style/exam.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('exam.tpl');
?>



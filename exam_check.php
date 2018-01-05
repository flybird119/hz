<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_exam.php");
$c_answer = json_decode($_POST["p"], true);
$wrong_set = array();
$score = array(
    "sc" => array(
        "count" => 0,
        "r_count" => 0,
        "score" => 0.0,
        "p_score"=>0.0
),
    "mc"=>array(
        "count" => 0,
        "r_count" => 0,
        "score" => 0.0,
        "p_score"=>0.0
    ),
    "tf"=>array(
        "count" => 0,
        "r_count" => 0,
        "score" => 0.0,
        "p_score"=>0.0
    )
);

foreach ($c_answer as $item) {
    if ($item["type"] == 1) {
        $score["sc"]["count"]=$score["sc"]["count"]+1;
        $score["sc"]["p_score"]=$item["score"];
        if (change_str($item["answer"]) == $item["right"]) {
            $score["sc"]["r_count"]++;
            $score["sc"]["score"] = $score["sc"]["score"]+$item["score"];
        }
        else{
            array_push($wrong_set, $item["id"]);
        }
    }
    elseif($item["type"] == 2){
        $score["mc"]["count"]=$score["mc"]["count"]+1;
        $score["mc"]["p_score"]=$item["score"];
        if (change_str($item["answer"]) == $item["right"]) {
            $score["mc"]["r_count"]++;
            $score["mc"]["score"] = $score["mc"]["score"]+$item["score"];
        }
        else{
            array_push($wrong_set, $item["id"]);
        }

    }else{
        $score["tf"]["count"]=$score["tf"]["count"]+1;
        $score["tf"]["p_score"]=$item["score"];
        if (change_str($item["answer"]) == $item["right"]) {
            $score["tf"]["r_count"]++;
            $score["tf"]["score"] = $score["tf"]["score"]+$item["score"];
        }
        else{
            array_push($wrong_set, $item["id"]);
        }
    }
}
$totle_score =$score["sc"]["count"]*$score["sc"]["p_score"]+$score["mc"]["count"]*$score["mc"]["p_score"]+$score["tf"]["count"]*$score["tf"]["p_score"];
$r_score=$score["sc"]["score"]+$score["mc"]["score"]+$score["tf"]["score"];
$wrong_post = implode('|',$wrong_set);
$title="个人成绩";
$wr_insert = implode("|",$wrong_set);
$mysqli = get_conn();
$new = dist_str($wr_insert,get_user_wrong_set($mysqli,$_SESSION["mobile"]));
insert_wrong_set($mysqli,$new,$_SESSION["mobile"]);
insert_score($mysqli,$_SESSION["mobile"],$r_score);
close_conn($mysqli);
$smarty = new Smarty_HZ();
$smarty->assign('title', $title);
$smarty->assign('name', $title);
$smarty->assign('score', $score);
$smarty->assign('r_score', $r_score);
$smarty->assign('totle_score', $totle_score);
$smarty->assign('wrong_post', $wrong_post);
$smarty->assign('js0', "./script/exam_check.js");
$smarty->assign('js1', "./script/nz.js");
$smarty->assign('css0', "./style/exam_check.css");
$smarty->assign('css1', "./style/nz.css");
$smarty->display('exam_check.tpl');
?>
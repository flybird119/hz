<?php
function get_score($mysqli,$mb){
    $sql = "select exam_time,score from history_score where mobile = '" . $mb . "'";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}
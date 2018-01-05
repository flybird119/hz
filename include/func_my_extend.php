<?php

function get_extend($mysqli,$mb){
    $sql ="select createTime,mobile from user where saler=$mb;";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}

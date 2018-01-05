<?php

function get_faq($mysqli){
    $sql ="select qus,ans from faq;";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}

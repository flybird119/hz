<?php
function get_video($mysqli,$id_str){
    $sql = "select * from videos where id = {$id_str}";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_assoc();
    $res->free();
    return $result;
}

<?php

function get_act_question($mysqli,$id,$book){
    $str="select id,qType,question,qSelect,qAnswer,qDescribe,cid,qImg from questions where cid like '%s%s'";
    $sql=sprintf($str,$book,$id);
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $rows=$res->fetch_all();
    $res->free();
    return $rows;
}

function chk_act_id($id){
    $r= htmlspecialchars($id);
    return $r;
}

function chk_test_id($id){
    $r= intval($id);
    if ($r <= 1 or strlen($id)!=4){
        $r='0101';
    }
    else{
        $r= htmlspecialchars($id);
    }
    return $r;
}

function chk_book($book){
    $r= intval($book);
    if ($r <= 1 or $r >99 ){
        $r='01';
    }
    else{
        $r= htmlspecialchars($r);
    }
    return $r;
}

function get_act_try($mysqli,$sql_id){
    $fmt ="select id,qType,question,qSelect,qAnswer,qDescribe,cid,qImg from questions where id in (%s);";
    $sql =sprintf($fmt,$sql_id) ;
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $rows=$res->fetch_all();
    $res->free();
    return $rows;
}
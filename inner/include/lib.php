<?php

function get_stocks($mysqli){
    $sql ="select * from stock where status = 1;";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}

function get_user($mysqli,$n){
    $sql ="select * from staff where id = {$n}";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_assoc();
    $res->free();
    return $result;
}


function check_login(){
    if($_SESSION["login"] == true){
        return true;
    }
    else{
        return false;
    }
}

function logout(){
    $_SESSION["login"] = "";
    $_SESSION = [];
    session_destroy();
}


function submit_class($id,$order){
    $flag = false;
    mysql_query("BEGIN"); //或者mysql_query("START TRANSACTION");
    $sql1 = "update stock set status = 0 where id = {$id}";
    $sql2 = "insert into subs_order values ($orders)";
    $res = mysql_query($sql);
    $res1 = mysql_query($sql2);
    if($res && $res1){
    mysql_query("COMMIT");
    $flag = true;
    }else{
    mysql_query("ROLLBACK");
    }
    mysql_query("END"); 
    return $flag;
}

?>
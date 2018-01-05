<?php
session_start();
require("func_conn.php");
require("func_login.php");
error_reporting(0);
$mysqli = get_conn();
$sid = session_id();
$mobile =check_mobile_submit($_POST["mb"]);
$pwd = $_POST["pwd"];
if (!$mobile){
    echo json_encode(["err" => "手机号码非法", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

if(!check_code_submit($_POST["code"],$_SESSION["code_hz"])){
    echo json_encode(["err" => "验证码错误", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

if (login($mysqli, $mobile, $pwd,$sid)) {
    echo json_encode(["err" => "登陆成功","status" => "yes"]);
    close_conn($mysqli);
    exit(0);
} else {
    echo json_encode(["err" => "用户名或者密码错误", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}


/*
if($rem=="false"){
    if (login($mysqli, $mobile, $pwd,$sid)) {
        echo json_encode(["err" => "登陆成功","status" => "yes"]);
        close_conn($mysqli);
        exit(0);
    } else {
        echo json_encode(["err" => "用户名或者密码错误11", "status" => "no"]);
        close_conn($mysqli);
        exit(0);
    }
}else{
    $pass=md5($pwd);
    if (login_remember($mysqli, $mobile, $pass,$sid)) {
        echo json_encode(["err" => "登陆成功","status" => "yes"]);
        close_conn($mysqli);
        exit(0);
    } else {
        echo json_encode(["err" => "用户名或者密码错误22", "status" => "no","ss"=>$rem]);
        close_conn($mysqli);
        exit(0);
    }
}

*/
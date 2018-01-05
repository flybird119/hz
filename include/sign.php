<?php
session_start();
require("func_conn.php");
require("func_login.php");
error_reporting(0);
$mysqli = get_conn();
$sid = session_id();
$mobile =check_mobile_submit($_POST["mb"]);
$pwd = check_pwd_submit( $_POST["pwd"]);
$saler=check_mobile_submit($_POST["saler"]);
$levels=0;//新用户等级:0
if (!$mobile){
    echo json_encode(["err" => "手机号码非法", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}
if (!$saler){
    $saler="zf";
}

if (!$pwd) {
    echo json_encode(["err" => "密码不符合要求", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

if(!check_code_submit($_POST["code"],$_SESSION["SMS"])){
    echo json_encode(["err" => "验证码错误", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

if (!check_mobile($mysqli, $mobile)) {
    echo json_encode(["err" => "您已经是我们的用户了，请登陆", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}
/*
if (sign_user($mysqli, $mobile, $pwd, date("Y-m-d H:i:s"), $_SERVER["REMOTE_ADDR"], date("Y-m-d H:i:s"), $_SERVER["REMOTE_ADDR"],$saler,$levels) == 1) {
    gen_new_user_order($mysqli,$mobile,"01a001");
    if(login($mysqli,$mobile,$pwd,$sid)){
        echo json_encode(["err" => "注册成功", "status" => "yes"]);
    }else{
        echo json_encode(["err" => "注册成功,登录失败", "status" => "yes"]);
    }

} else {
    echo json_encode(["err" => "注册失败", "status" => "no"]);
}
close_conn($mysqli);
exit(0);
*/

if (sign_user_1($mysqli, $mobile, $pwd, date("Y-m-d H:i:s"), $_SERVER["REMOTE_ADDR"], date("Y-m-d H:i:s"), $_SERVER["REMOTE_ADDR"],$saler,$levels)) {
    gen_new_user_order($mysqli,$mobile,"01a001");
    if(login($mysqli,$mobile,$pwd,$sid)){
        echo json_encode(["err" => "注册成功", "status" => "yes"]);
    }else{
        echo json_encode(["err" => "注册成功,登录失败", "status" => "yes"]);
    }

} else {
    echo json_encode(["err" => "注册失败", "status" => "no"]);
}
close_conn($mysqli);
exit(0);
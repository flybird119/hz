<?php
session_start();
require_once("func_conn.php");
require_once("func_login.php");
error_reporting(0);
$mysqli = get_conn();
$mb= check_mobile_submit($_POST["mb"]);
if(!$mb){
    echo json_encode(["err" => "手机号码不符合要求", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

if(check_mobile($mysqli,$mb)){
    echo json_encode(["err" => "您还不是我们的会员，请先注册", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

$pwd =check_pwd_submit($_POST["pwd"]);
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
$p_new = md5($pwd,false);
if(ch_pwd($mysqli,$mb,$p_new)>0){
    echo json_encode(["err" => "修改成功，请重新登陆！", "status" => "yes"]);
    logout();
    close_conn($mysqli);
    exit(0);
}else{
    echo json_encode(["err" => "修改密码失败！", "status" => "no"]);
    close_conn($mysqli);
    exit(0);
}

<?php
require_once("chk_login.php");
require_once("func_feedback.php");
error_reporting(0);
if($_POST["code"]!=$_SESSION["code_hz"]){
    echo json_encode(["err" => "验证码错误", "status" => "no"]);
    exit(0);
}else{
    $mb = $_SESSION["mobile"];
    $c=substr_replace(htmlspecialchars($_POST["content"]),"...",200);
    $mysqli = get_conn();
    insert_feedback($mysqli,$mb,$c);
    close_conn($mysqli);
    echo json_encode(["err" => "信息已经录，谢谢您的参与！", "status" => "yes"]);
    exit(0);
}

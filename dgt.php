<?php
require_once("include/chk_login.php");;
require_once("include/func_dgt.php");
error_reporting(0);
if($_SESSION["up"]===true){
    echo json_encode(["err" => "您已经提交成功，请勿重复操作", "status" => "no"]);
    exit(0);
}
if ($_POST["code"]!=$_SESSION["code_hz"]){
    echo json_encode(["err" => "验证码错误", "status" => "no"]);
    exit(0);
}
$name=check_name_submit($_POST["uname"]);
$mb =check_mobile_submit($_POST["mb"]);
if (!$mb){
    echo json_encode(["err" => "手机号码非法", "status" => "no"]);
    exit(0);
}
$id=check_idd_submit($_POST["id"]);
if (!$id){
    echo json_encode(["err" => "身份证号码非法", "status" => "no"]);
    exit(0);
}
$addr=check_addr_submit($_POST["addr"]);
$des = check_des_submit($_POST["des"]);
$mysqli = get_conn();
if(insert_dgt_apply($mysqli,$mb,$name,$id,$addr,$des)){
    close_conn($mysqli);
    $_SESSION["up"]=true;
    echo json_encode(["err" => "申请提交成功", "status" => "yes"]);
    exit(0);
}else{
    close_conn($mysqli);
    $_SESSION["up"]=false;
    echo json_encode(["err" => "申请提交失败", "status" => "no"]);
    exit(0);
}

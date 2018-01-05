<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_exam.php");
$mb = $_SESSION["mobile"];
$mysqli = get_conn();
$new_arr = json_decode($_POST["p"]);
$old_str = get_user_wrong_set($mysqli,$mb);
$old_arr = explode("|",$old_str);
$r_arr = array_diff($old_arr,$new_arr);
$r_str = implode("|",$r_arr);
insert_wrong_set($mysqli,$r_str,$mb);
close_conn($mysqli);
echo json_encode(["result"=>"删除成功!"]);
?>
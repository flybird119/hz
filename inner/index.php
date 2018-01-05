<?php
header("Content-Type: text/html; charset=utf-8");
require_once('set_conf.php');
require_once("../include/conn.php");
require_once("include/lib.php");
echo "dfgdg";
session_start();
$name=$_POST["name"];
$pass = $_POST["passwd"];

$user = get_user($mysqli,1);
echo $user["pwd"];
if("123456" == $user["pwd"]){
    $_SESSION["login"]=true;
    $_SESSION["name"]="gehuijun";

    echo "OK";
}
else {
    echo "shibai";
}
?>






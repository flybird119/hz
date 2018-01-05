<?php
session_start();
require_once("include/func_img_code.php");
$checkcode = make_rand(4);
$_SESSION['code_hz']=strtolower($checkcode);
getAuthImage($checkcode);
?>

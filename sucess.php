<?php
session_start();
require_once("include/chk_login.php");
require_once("include/func_login.php");
$mysqli= get_conn();
$_SESSION["priv"] = get_user_priv($mysqli,$_SESSION["mobile"]);
close_conn($mysqli);
setcookie(session_name(),session_id(),time()+3600*2,"/");
header("Location:test_online.php ");
exit(0);

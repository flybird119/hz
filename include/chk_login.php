<?php
session_start();
require_once("func_conn.php");
require_once("func_login.php");
$mysqli = get_conn();
$sid = session_id();
$mb = $_SESSION["mobile"];
$r=check_sid_in_db($mysqli,$mb,$sid);
if (!$_SESSION["login"] or $r == "0") {
    logout();
    close_conn($mysqli);
    header("Location: login_page.php");
}else{
    close_conn($mysqli);
}



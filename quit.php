<?php
session_start();
require_once("include/func_login.php");
logout();
header("Location:test_online.php ");
exit(0);

<?php
require_once('include/lib.php');
session_start();
if(check_login()){
    echo $_SESSION["name"];

}
else{
    echo "-------------";
}
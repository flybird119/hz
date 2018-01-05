<?php

require_once ("func_buy.php");
/*
 * 设置登陆并刷新session表，调用mysql函数
 */
function login($mysqli, $mobile, $pwd,$sid){
    $pass = md5($pwd, false);
    $sql = "call login_new(\"$mobile\",\"$pass\",\"$sid\",@ls,@r)";
    $mysqli->query($sql);
    $res = $mysqli->query("select @ls,@r");
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $row = $res->fetch_assoc();
    $res->free();
    if ($row["@r"] == "1") {
        $_SESSION["login"] = true;
        $_SESSION["mobile"] = $mobile;
        $_SESSION["lvl"] = intval($row["@ls"]);
        $_SESSION["priv"] = get_user_priv($mysqli,$mobile);
        setcookie(session_name(),session_id(),time()+3600*2,"/");
        return true;
    } else {
        logout();
        return false;
    }
}


/*
function day_df($t1){
    $d1 = new DateTime($t1);
    $d2 = new DateTime();
    $interval = $d1->diff($d2);
    return $interval->days;

}

function login_remember($mysqli, $mobile, $pwd,$sid){
    $remote_func="login(\"$mobile\",\"$pwd\",\"$sid\")";
    $sql = "select $remote_func";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_assoc();
    $r= $result[$remote_func];
    $res->free();
    if ($r == "1") {
        $_SESSION["login"] = true;
        $_SESSION["mobile"] = $mobile;
        setcookie("uid",$mobile,time()+60,"/");
        setcookie("uuid",md5($mobile.substr($pwd,4,24),false),time()+60,"/");
        return true;
    } else {
        $_SESSION["login"] = false;
        return false;
    }
}
*/

/*
 * 检查用户是否登陆,通过查询更新数据库的session表，来刷新用户,调用mysql函数
 * $mb用户传入的手机号
 * $sid用户本次登陆生成的session_id
 */
function check_sid_in_db($mysqli,$mb,$sid){
    $remote_func="check_login(\"$mb\",\"$sid\")";
    $sql = "select $remote_func";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_assoc();
    $res->free();
    return $result[$remote_func];
}

/*
 * 检查用户手机号码是不是已经注册过
 */
function check_mobile($mysqli, $mobile){
    $sql = "select mobile from user where mobile = '$mobile'";
    $res = $mysqli->query($sql);
    if ($res->num_rows == 0) {
        $res->free();
        return true;
    }
    return false;
}

/*
 * 将用户注册信息写入user表，返回插入的条数
 */
function sign_user($mysqli, $mobile, $pass, $ctime, $cip, $atime, $aip,$saler,$levels){
    $pwd = md5($pass,false);
    $sql = "call insert_user(\"$mobile\",\"$pwd\",\"$ctime\",\"$cip\",\"$atime\",\"$aip\",\"$saler\",\"$levels\",@n)";
    $mysqli->query($sql);
    $res = $mysqli->query("select @n");
    $row = $res->fetch_assoc();
    $res->free();
    return intval($row["@n"]);
}

function sign_user_1($mysqli, $mobile, $pass, $ctime, $cip, $atime, $aip,$saler,$levels){
    $pwd = md5($pass,false);
    $sql = "insert into user (mobile,pwd,createTime,createIp,lastLoginTime,lastLoginIp,saler,levels) values ('$mobile','$pwd','$ctime','$cip','$atime','$aip','$saler','$levels')";
    $mysqli->query($sql);
    if($mysqli->affected_rows>0){
        return true;
    }else{
        return false;
    }
}

/*
 * 验证提交的手机号码是否符合
 */
function check_mobile_submit($str){
    if (preg_match('/^0?(13|14|15|17|18)[0-9]{9}$/', $str, $matches)) {
        $mobile = $matches[0];
    }
    return $mobile;
}

/*
 * 验证提交的密码是否符合
 */
function check_pwd_submit($str){
    if (preg_match('/^[a-zA-Z\d_]{8,}$/', $str, $matches)) {
        $pwd = $matches[0];
    }
    return $pwd;
}

/*
 * 验证提交的图形验证码是否正确
 * $str_sub:提交的验证码字符串
 * $str_srv:服务端存储的验证码
 */
function check_code_submit($str_sub,$str_srv){
    $code = strtolower(substr($str_sub, 0, 4));
    return $code == $str_srv;
}

function get_pwd($mysqli,$mb){
    $sql = "select pwd from user where mobile ='$mb'";
    $mysqli->query($sql);
    $res = $mysqli->query($sql);
    $row = $res->fetch_assoc();
    $res->free();
    return $row["pwd"];
}

function logout(){
    setcookie(session_name(),null,time()-1000,"/");
    session_unset();
    session_destroy();
}

function ch_pwd($mysqli,$mb,$pwd){
    $sql = "update user set pwd = '$pwd' where mobile ='$mb'";
    $mysqli->query($sql);
    if($mysqli->affected_rows>0){
        return true;
    }
    return false;
}
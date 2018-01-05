<?php
/*
* 打开连接，返回连接对象
*/
function get_conn(){
$mysql_conf = array(
'host' => 'localhost:3306',
'db' => 'app',
'db_user' => 'root',
'db_pwd' => 'Mozilla^51zFgHj',
);
$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);

if ($mysqli->connect_errno) {
die("链接数据库失败！\n" . $mysqli->connect_error);//诊断连接错误
}
$mysqli->query("set names 'utf8';");//编码转化
$select_db = $mysqli->select_db($mysql_conf['db']);
if (!$select_db) {
die("选择数据库错误！\n" . $mysqli->error);
}
return $mysqli;
}

/*
* 关闭连接
*/
function close_conn($mysqli)
{
$mysqli->close();
}

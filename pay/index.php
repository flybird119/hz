<?php
error_reporting(0);
require_once("../include/chk_login.php");
require_once('../include/func_conn.php');
require_once('order.php');
if(!isset($_GET["id"])){
    exit(0);
}
$id=htmlspecialchars(substr($_GET["id"],0,6));
$mysqli = get_conn();
$sql = "select id,duration,price,des from goods where id = '$id'";
$res = $mysqli->query($sql);
if(!$res){
    close_conn($mysqli);
    exit(0);
}
$r = $res->fetch_assoc();
$r["mb"] = $_SESSION["mobile"];
$res->free();
$attach = json_encode($r);
close_conn($mysqli);
$order = get_wx_ord_param($r["des"],$attach,intval($r["price"]*100),"华筑教育");
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>确认订单 </title>
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/huazhu.css" rel="stylesheet">
    <link href="../style/score.css" rel="stylesheet">
</head>
<body class = "bg-gray">
<div class="container-fluid">
    <div class="row title bg_red_dark">
        <div class="col-xs-2">
            <a href="javascript:history.go(-1)">
                <span class="glyphicon glyphicon-menu-left title_logo fontlogo"></span>
            </a>
        </div>
        <div class="col-xs-8">
            <span class="text-center center-block title_label font18bw">订单详情
            </span>
        </div>
        <div class="col-xs-2">
            <a href="#">
                <span class="glyphicon glyphicon-list pull-right title_logo fontlogo"></span>
            </a>
        </div>
    </div>
    <div class="row">
        <!--ban开始-->
        <div>
            <div class="container">
                <div class="banner_question">
                    <div class="row banner_title">
                        <div class="col-xs-4 banner_top_left "></div>
                        <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                            我的订单
                        </div>
                        <div class="col-xs-4 center-block banner_top_right"></div>
                    </div>
                    <div class="row">
                        <div class="tb font14bn">

                            <div class="row tbh">
                                <div class="col-xs-4">
                                    课程名称:
                                </div>
                                <div class="col-xs-8">
                                    <?php echo $r["des"]; ?>
                                </div>
                            </div>
                            <div class="row tbh">
                                <div class="col-xs-4">
                                    课程时效:
                                </div>
                                <div class="col-xs-8">
                                    <?php echo $r["duration"]."天"; ?>
                                </div>
                            </div>
                            <div class="row tbh">
                                <div class="col-xs-4">
                                    价格:
                                </div>
                                <div class="col-xs-8">
                                    <?php echo $r["price"]."元"; ?>
                                </div>
                            </div>
                            <div class="row tbh">
                                <div class="col-xs-12">
                                    <button class="btn btn-danger btn_buy" style="width:100%">点我付款</button>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="hidden" id="pid"><?php echo $order; ?></div>
</div>
<script src="../script/jquery-3.2.1.min.js"></script>
<script src="../style/bootstrap/js/bootstrap.min.js"></script>
<script src="./script/buy.js"></script>
</body>
</html>
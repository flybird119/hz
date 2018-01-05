<?php

function get_deal($mysqli,$mb){
    $sql ="select a.mobile, a.tim,a.price,a.dis_pay from orders as a ,user as b where a.mobile=b.mobile and a.payNo !='new_user' and b.saler=$mb";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}

function get_sum($arr){
    $r=["all"=>0,"valid"=>0];
    foreach($arr as $a){
        $r["all"] += $a[2];
        if($a[3]==0){
            $r["valid"] += $a[2];
        }
    }
    return $r;
}
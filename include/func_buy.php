<?php
function get_goods($mysqli){
    $sql ="select id,price from goods";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}

function get_goods_class($goods){
    $result=[];
    foreach ($goods as $good ){
        array_push($result,intval(substr($good[0],3,3)));
    }
    $r=array_flip(array_flip($result));
    sort($r);
    return $r;
}

function get_user_priv($mysqli,$mb){
    $sql ="select b.content from orders as a,goods as b where a.mobile ='{$mb}' and a.gid=b.id and a.stat =1";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $r=$res->fetch_all();
    $res->free();
    //var_dump($r);
    return str_no_dump($r);
}

function gen_new_user_order($mysqli,$mb,$gid){
    $tim = date("Y-m-d H:i:s");
    $exp = date("Y-m-d H:i:s",time()+3600*24*3);
    $sql ="insert into orders (mobile,tim,exp,gid) values('$mb','$tim','$exp','$gid')";
    $mysqli->query($sql);
}

function str_no_dump($arr){
    if(count($arr)==0){
        return "";
    }
    $str="";
    foreach($arr as $i){
        $str=$str.$i[0];
    }
    $arr_str = [];
    for($j=0;$j < strlen($str);$j++){
        $arr_str[]=$str[$j];
    }
    $new_arr = array_flip(array_flip($arr_str));
    //var_dump(implode('',$new_arr));
    return implode('',$new_arr);
}

function get_user_orders($mysqli,$mb){
    $sql ="select a.id,a.gid,a.stat,a.tim,a.exp,b.price,b.des from orders as a,goods as b where a.mobile ='{$mb}' and a.gid = b.id";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $r=$res->fetch_all();
    $res->free();
    return $r;
}
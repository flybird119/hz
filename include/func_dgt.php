<?php
function check_idd_submit($str){
    if (preg_match('/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/', $str, $matches)) {
        $idd = $matches[0];
    }
    return $idd;
}

function check_name_submit($str){
    $r=htmlspecialchars(base64_decode($str,false));
    if(mb_strlen($r,'utf-8')>6){
        return mb_substr($r,0,6,"utf-8");
    }
    return $r;
}


function check_addr_submit($str){
    $r=htmlspecialchars(base64_decode($str,false));
    if(mb_strlen($r,'utf-8')>30){
        return mb_substr($r,0,30,"utf-8");
    }
    return $r;
}

function check_des_submit($str){
    $r=htmlspecialchars(base64_decode($str,false));
    if(mb_strlen($r,'utf-8')>150){
        return mb_substr($r,0,150,"utf-8");
    }
    return $r;
}

function insert_dgt_apply($mysqli,$mb,$name,$id,$addr,$des){
    $sql="insert into dgt_apply (mobile,uname,idNum,addr,des) values('$mb','$name','$id','$addr','$des')";
    $mysqli->query($sql);
    if($mysqli->affected_rows>0){
        return true;
    }
    return false;
}

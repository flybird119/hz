<?php

function get_exam_schame($mysqli,$id){
    $fmt ="select * from examrnd where id = %d;";
    $sql =sprintf($fmt,$id) ;
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_assoc();
    $res->free();
    return $result;
}

/*
 * 获取理论考试题目
 * $type:题目类型 1：单选 2：多选 3：判断
 * $count:选题的数目
 * $book:书本编号 01,02,03...
 */
function get_theory_exam_question($mysqli,$type,$count,$book){
    $sql ="select id,qType,question,qSelect,qAnswer,qImg from questions where qType = $type and cid LIKE '".$book."%' and cid regexp '[0-9]{5}[^ksz]' order by rand() limit $count;";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $rows=$res->fetch_all();
    $res->free();
    return $rows;
}

/*
 *获取实操考试题目
 */
function get_act_exam_question($mysqli,$type,$count,$book){
    $sql ="select id,qType,question,qSelect,qAnswer,qImg from questions where qType = $type and cid LIKE '".$book."%x' order by rand() limit $count;";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $rows=$res->fetch_all();
    $res->free();
    return $rows;
}



function change_str($str){
    return substr(md5($str),9,6);
}

function get_wr($mysqli,$sql_id){
    $fmt ="select id,qType,question,qSelect,qAnswer,qDescribe,cid,qImg from questions where id in (%s);";
    $sql =sprintf($fmt,$sql_id) ;
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $rows=$res->fetch_all();
    $res->free();
    return $rows;
}

function insert_wrong_set($mysqli,$str,$mb){
    $fmt = "update user set wrongSet= '%s' where mobile='%s'";
    $sql =sprintf($fmt,$str,$mb) ;
    $mysqli->query($sql);

}

function get_user_wrong_set($mysqli,$mb){
    $fmt = "select wrongSet from user where mobile = '%s'";
    $sql =sprintf($fmt,$mb) ;
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result =$res->fetch_assoc()["wrongSet"];
    $res->free();
    return $result;
}

/*
 * 去除错题集合中的重复项，并返回新的字符串
 */
function dist_str($wr_str_old,$wr_str_new){
    $a1 = array_flip(explode("|",$wr_str_old));
    $a2 = array_flip(explode("|",$wr_str_new));
    $a3=$a1+$a2;
    return implode("|",array_keys($a3));


}

function insert_score($mysqli,$mb,$score){
    $day =date('Y-m-d H:i:s');
    $sql ="insert into history_score (mobile,exam_time,score) value('$mb','$day',$score)";
    $mysqli->query($sql);
}
<?php

function get_chap($mysqli,$sql){
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_all();
    $res->free();
    return $result;
}

function get_book_index($str){
    $tmp = intval($str);
    if($tmp <= 0 or $tmp>99){
        return "01";
    }
    elseif($tmp>0 and $tmp<10){
        return "0".$tmp;
    }
    else{
        return (string)$tmp;
    }

}

function get_books($mysqli,$book_index_str){
    $sql = "select * from books where id like '{$book_index_str}000000'";
    return get_chap($mysqli,$sql);
}

function get_parts($mysqli,$book_index_str){
    $sql = "select * from books where id like '{$book_index_str}__0000'  and id not like '{$book_index_str}000000' order by id";
    return get_chap($mysqli,$sql);
}

function get_chapters($mysqli,$book_index_str){
    $sql = "select * from books where id like '{$book_index_str}____00' and id not like '{$book_index_str}__0000' order by id";
    return get_chap($mysqli,$sql);
}

function get_sections($mysqli,$book_index_str){
    $sql = "select * from books where id like '{$book_index_str}______' and id not like '______00' order by id";
    return get_chap($mysqli,$sql);
}

function get_book_content($mysqli,$id){
    $sql ="select * from book where id = {$id}";
    $res = $mysqli->query($sql);
    if (!$res) {
        die("获取数据失败！" . $mysqli->error);
    }
    $result=$res->fetch_assoc();
    $res->free();
    return $result;
}

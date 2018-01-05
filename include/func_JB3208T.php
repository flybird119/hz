<?php
function get_question($mysqli){
    $sql = "select * from hosts where host= 'sj'";
    $mysqli->query($sql);
    $res = $mysqli->query($sql);
    $rows = $res->fetch_all();
    $res->free();
    return $rows;
}
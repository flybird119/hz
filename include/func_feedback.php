<?php

function insert_feedback($mysqli,$mb,$content){
    $d = date('Y-m-d H:i:s');
    $sql ="insert into feedback (feedback,mobile,backtime) values ('$content','$mb','$d')";
    $mysqli->query($sql);
}


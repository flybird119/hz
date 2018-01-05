<?php
require_once ("../../include/func_conn.php");
require_once ("../../include/func_HW5000.php");
$mysqli = get_conn();
$ques=get_question($mysqli);
header('content-type:text/html;charset=utf-8');
$q=[];
foreach ($ques as $r){
    $a=["ques"=>$r[1],
        "lamps"=>$r[2],
        "scrn"=>$r[3],
        "mul"=>$r[4],
        "stat"=>$r[5],
        "sound"=>$r[6],
        "answer"=>$r[7]
    ];
    array_push($q,$a);
}
echo json_encode($q);
close_conn($mysqli);
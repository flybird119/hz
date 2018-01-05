<?php
require_once("include/chk_login.php");
require_once("include/func_video.php");
$id = intval($_GET["id"]);
if ($id == 0 or $id == 1){
    $id='01010101';
}else{
    $id= htmlspecialchars($_GET["id"]);
}
if(substr($id,0,6)=='010101'){
    $mysqli=get_conn();
    $video = get_video($mysqli,$id);
    close_conn($mysqli);
    echo json_encode(["stat"=>"yes","path"=>$video["path"]]);
    exit(0);
}else{
    if(strpos($_SESSION["priv"],"B")===false){
        echo json_encode(["stat"=>"no","path"=>""]);
        exit(0);
    }else{
        $mysqli=get_conn();
        $video = get_video($mysqli,$id);
        close_conn($mysqli);
        echo json_encode(["stat"=>"yes","path"=>$video["path"]]);
        exit(0);
    }

}


?>
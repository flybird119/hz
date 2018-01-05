<?php
require_once('set_conf.php');
require_once("include/func_conn.php");
require_once("include/func_book.php");
if(!isset($_GET["id"])){
    $index="01";
}else{
    $index = get_book_index($_GET["id"]);
}
$mysqli = get_conn();
$books = get_books($mysqli,$index);
$parts = get_parts($mysqli,$index);
$chapters = get_chapters($mysqli,$index);
$sections = get_sections($mysqli,$index);
$mysqli->close();
//header('content-type:text/html;charset=utf-8');
$name = $books[0][1];
$smarty = new Smarty_HZ();
$smarty->assign('title',"在线视频");
$smarty->assign('name',$books[0][1]);
$smarty->assign('parts',$parts);
$smarty->assign('chapters',$chapters);
$smarty->assign('sections',$sections);
$smarty->assign('js0',"http://yuntv.letv.com/player/vod/bcloud.js");
$smarty->assign('js1',"./script/video.js");
$smarty->assign('css0',"./style/book.css");
$smarty->assign('css1',"./style/video.css");
$smarty->display('video.tpl');
?>


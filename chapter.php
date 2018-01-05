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
$mysqli->close();
$smarty = new Smarty_HZ();
$smarty->assign('title','题库');
$smarty->assign('name','全国初级消防员国考题库');
$smarty->assign('parts',$parts);
$smarty->assign('chapters',$chapters);
$smarty->assign('js0',"script/chapter.js");
$smarty->assign('js1',"script/nz.js");
$smarty->assign('css0',"style/chapter.css");
$smarty->assign('css1',"style/nz.css");
$smarty->display('chapter.tpl');
?>

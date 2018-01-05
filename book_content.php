<?php
require_once("include/chk_login.php");
require_once('set_conf.php');
require_once("include/func_book.php");
$mysqli = get_conn();
$id = intval($_GET["id"]);
if ($id == 0 or $id == 1){
    $id='010101';
}
if(strpos($_SESSION["priv"],"A")===false){
    $id='010101';
}
else{
    $id= htmlspecialchars($_GET["id"]);
    if(strlen($id)!=6){
        header("location: 404.php");
        exit();
    }
}
$content = get_book_content($mysqli,$id)["html"];
$mysqli->close();
$name = $books[0][1];
$smarty = new Smarty_HZ();
$smarty->assign('title',"在线读书");
$smarty->assign('name',$name);
$smarty->assign('content',$content );
$smarty->assign('js0',"./script/book_content.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/book_content.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('book_content.tpl');
?>

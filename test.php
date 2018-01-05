<?php
require_once("include/chk_login.php");
require_once("include/func_test.php");
require_once('set_conf.php');
if(!isset($_GET["book"])){
    $book="01";
}else{
    $book = chk_book($_GET["book"]);
}

if(!isset($_GET["id"])){
    $idd = "0101";
}else{
    $idd=$_GET["id"];
}
if(substr($idd,3,1)=="k"){
    $id = chk_act_id($idd);
    $title = "口述练习";
}elseif(substr($idd,3,1)=="s"){
    $id = chk_act_id($idd);
    $title = "设备识别";
}elseif(substr($idd,3,1)=="z") {
    $id = chk_act_id($idd);
    $title = "指认学习";
}
else{
    $id=chk_test_id($idd);
    $title = "理论测试";
}

if($title == "理论测试"){
    if(strpos($_SESSION["priv"],"C")===false){
        $id="0101";
    }
    $mysqli = get_conn();
    $rows=get_act_question($mysqli,$id,$book);
    $count=count($rows);
    shuffle($rows);
    $mysqli->close();
} else{
    if(strpos($_SESSION["priv"],"E")===false){
        $try_str ="1661,1679,1900,1668,1844,1705,1888,1707,1723,1729,1728,1730,1755,1725,1727,1736,1800,1731,1738,1814,1877,1875,1774,1766,1790,1765,1781,1763,1904,1745,1876,1899,1812,1760,1778,1688,1772,1768,1737,1742,1689,1690,1762,1898";
        $mysqli = get_conn();
        $rows=get_act_try($mysqli, $try_str);
        $count=count($rows);
        shuffle($rows);
        $mysqli->close();
    }else{
        $mysqli = get_conn();
        $rows=get_act_question($mysqli,$id,$book);
        $count=count($rows);
        shuffle($rows);
        $mysqli->close();
    }
}
$smarty = new Smarty_HZ();
$smarty->assign('rs',$rows );
$smarty->assign('title',$title );
$smarty->assign('name',$title );
$smarty->assign('show_answer',"hidden");
$smarty->assign('chk_del_question',"hidden");
$smarty->assign('count',$count);
$smarty->assign('js0',"./script/test.js");
$smarty->assign('js1',"./script/nz.js");
$smarty->assign('css0',"./style/exam.css");
$smarty->assign('css1',"./style/nz.css");
$smarty->display('test.tpl');
?>


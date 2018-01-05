<?php
function smarty_modifier_cal_date($str)
{
    $tmp =strtotime($str)-time();
    $d =intval($tmp/(3600*24));
    $h =intval(($tmp-3600*24*$d)/3600);
    $m=intval(($tmp-3600*24*$d-3600*$h)/60);
    return $d."天".$h."小时".$m."分";
}

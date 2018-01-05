<?php
function smarty_modifier_goods_type($str)
{
    $tmp =substr($str,2,1);
    return $tmp;
}

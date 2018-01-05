<?php

function smarty_modifier_cut_time($str)
{
    $tmp = explode(" ",$str);
    return $tmp[0];
}

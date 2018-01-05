<?php
function smarty_modifier_part($str)
{
    $tmp =substr($str,0,4);
    return $tmp;
}
<?php
function smarty_modifier_book($str)
{
    $tmp =substr($str,0,6);
    return $tmp;
}

<?php
function smarty_modifier_hide_mobile($str)
{
    $tmp =substr_replace($str,"****",3,4);
    return $tmp;
}

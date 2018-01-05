<?php
function smarty_modifier_getFront($str)
{
    $tmp = explode(' ',$str);
    return $tmp[0];
}

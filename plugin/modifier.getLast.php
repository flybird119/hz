<?php
function smarty_modifier_getLast($str)
{
    $tmp = explode(' ',$str);
    return $tmp[1];

}

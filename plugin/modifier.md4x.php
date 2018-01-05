<?php
function smarty_modifier_md4x($str)
{
    $tmp = md5($str);
    return substr($tmp,9,6);
}

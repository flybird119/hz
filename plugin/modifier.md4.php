<?php
function smarty_modifier_md4($str)
{
    $tmp = md5($str);
    return substr($tmp,9,12);
}

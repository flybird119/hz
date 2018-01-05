<?php
function smarty_modifier_goods_class($str)
{
    return intval(substr($str,3,3));

}

<?php
function smarty_modifier_year_to_hour($str)
{
    $tmp =date("Y年m月d日",strtotime($str));
    return $tmp;
}

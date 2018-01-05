<?php
function smarty_modifier_section($str)
{
    return preg_match('??????00',$str)?true:false;
}

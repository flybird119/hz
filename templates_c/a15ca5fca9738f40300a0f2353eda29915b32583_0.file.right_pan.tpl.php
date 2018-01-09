<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:29:34
  from "/web/jianxue/web/app/robot/JB3208T/templates/right_pan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dbfe588ba7_19916788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15ca5fca9738f40300a0f2353eda29915b32583' => 
    array (
      0 => '/web/jianxue/web/app/robot/JB3208T/templates/right_pan.tpl',
      1 => 1513161215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:input.tpl' => 1,
    'file:key_board.tpl' => 1,
    'file:mul_line.tpl' => 1,
  ),
),false)) {
function content_5a38dbfe588ba7_19916788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:key_board.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:mul_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

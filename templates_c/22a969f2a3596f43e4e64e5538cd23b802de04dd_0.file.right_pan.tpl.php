<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:54:58
  from "/web/hzfire/app/robot/JB3208T/templates/right_pan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39ed224a8b30_70821520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a969f2a3596f43e4e64e5538cd23b802de04dd' => 
    array (
      0 => '/web/hzfire/app/robot/JB3208T/templates/right_pan.tpl',
      1 => 1513742865,
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
function content_5a39ed224a8b30_70821520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:key_board.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:mul_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

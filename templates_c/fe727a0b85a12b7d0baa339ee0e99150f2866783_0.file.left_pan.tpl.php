<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:29:09
  from "/web/hzfire/app/robot/HW5000/templates/left_pan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e715076746_61591178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe727a0b85a12b7d0baa339ee0e99150f2866783' => 
    array (
      0 => '/web/hzfire/app/robot/HW5000/templates/left_pan.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:screen.tpl' => 1,
    'file:lamp.tpl' => 1,
    'file:red.tpl' => 1,
  ),
),false)) {
function content_5a39e715076746_61591178 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12 col-md-6 no_padding">
    <?php $_smarty_tpl->_subTemplateRender("file:screen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:lamp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:red.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}

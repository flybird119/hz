<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:54:58
  from "/web/hzfire/app/robot/JB3208T/templates/left_pan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39ed22482b34_78107556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29653efb5980499ef8131a8e41acfa43bb3a21f' => 
    array (
      0 => '/web/hzfire/app/robot/JB3208T/templates/left_pan.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:screen.tpl' => 1,
    'file:lamp.tpl' => 1,
  ),
),false)) {
function content_5a39ed22482b34_78107556 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12 col-md-6 no_padding">
    <?php $_smarty_tpl->_subTemplateRender("file:screen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:lamp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}

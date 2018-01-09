<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:11:57
  from "/web/hzfire/app/templates/red_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e30dd1aec4_89861707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9244ff48558c7cff7fedc2e6641945099464a75c' => 
    array (
      0 => '/web/hzfire/app/templates/red_header.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39e30dd1aec4_89861707 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row title bg_red_dark">
    <div class="col-xs-2">
        <a href="javascript:history.go(-1)">
            <span class="glyphicon glyphicon-menu-left title_logo fontlogo"></span>
        </a>
    </div>
    <div class="col-xs-8">
            <span class="text-center center-block title_label font18bw"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>

            </span>
    </div>
    <div class="col-xs-2">
        <a href="#">
            <span class="glyphicon glyphicon-list pull-right title_logo fontlogo"></span>
        </a>
    </div>
</div>
<?php }
}

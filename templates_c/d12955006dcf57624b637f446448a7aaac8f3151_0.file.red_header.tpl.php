<?php
/* Smarty version 3.1.30, created on 2017-12-19 16:53:04
  from "/web/jianxue/web/app/templates/red_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38d37012bac3_73250838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd12955006dcf57624b637f446448a7aaac8f3151' => 
    array (
      0 => '/web/jianxue/web/app/templates/red_header.tpl',
      1 => 1512713677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38d37012bac3_73250838 (Smarty_Internal_Template $_smarty_tpl) {
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

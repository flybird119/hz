<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:36:15
  from "/web/jianxue/web/app/templates/FAQ.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dd8f74f0f2_30994704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a014e7ad3cea1834249e5a0755dde0bf7b8e8e3' => 
    array (
      0 => '/web/jianxue/web/app/templates/FAQ.tpl',
      1 => 1512970683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:red_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a38dd8f74f0f2_30994704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="container">
        <div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qs']->value, 'q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value) {
?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row ord_title">
                <span><img src="./img/order_cir.png" height="100%"/></span>
                <span class="q"><?php echo $_smarty_tpl->tpl_vars['q']->value[0];?>
</span>
            </div>
            <div class="row box_white">
                <div class="col-xs-12 img_pad">
                    <span class = "ans">答：</span><?php echo $_smarty_tpl->tpl_vars['q']->value[1];?>

                </div>
            </div>
        </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<div class="col-xs-12 tmp"></div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

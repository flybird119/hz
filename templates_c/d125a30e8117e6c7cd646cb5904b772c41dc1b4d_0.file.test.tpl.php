<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:13:07
  from "/web/hzfire/app/templates/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e353e595a0_46013860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd125a30e8117e6c7cd646cb5904b772c41dc1b4d' => 
    array (
      0 => '/web/hzfire/app/templates/test.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:red_header.tpl' => 1,
    'file:test_sc.tpl' => 2,
    'file:test_mc.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a39e353e595a0_46013860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs']->value, 'row');
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->iteration++;
$_smarty_tpl->tpl_vars['row']->index++;
$_smarty_tpl->tpl_vars['row']->first = !$_smarty_tpl->tpl_vars['row']->index;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>
    <?php if ($_smarty_tpl->tpl_vars['row']->first) {?>
        <div class="row " id="<?php echo ('q').($_smarty_tpl->tpl_vars['row']->iteration);?>
" >
        <div class="hidden" id="totle"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</div>
    <?php } else { ?>
        <div class="row hidden" id="<?php echo ('q').($_smarty_tpl->tpl_vars['row']->iteration);?>
">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['row']->value[1] == 1) {?>
        <?php $_smarty_tpl->_assignInScope('type', "单选题");
?>
        <?php $_smarty_tpl->_subTemplateRender("file:test_sc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[1] == 2) {?>
        <?php $_smarty_tpl->_assignInScope('type', "多选题");
?>
        <?php $_smarty_tpl->_subTemplateRender("file:test_mc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value[1] == 3) {?>
        <?php $_smarty_tpl->_assignInScope('type', "判断题");
?>
        <?php $_smarty_tpl->_subTemplateRender("file:test_sc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php } else { ?>

    <?php }?>
        </div>
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

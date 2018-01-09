<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:29:53
  from "/web/jianxue/web/app/templates/chapter_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dc111de183_94770269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aeb3e68eede9b97e63eecf7803044f594a4ce24' => 
    array (
      0 => '/web/jianxue/web/app/templates/chapter_list.tpl',
      1 => 1512526478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38dc111de183_94770269 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_part')) require_once '/web/jianxue/web/app/plugin/modifier.part.php';
if (!is_callable('smarty_modifier_book')) require_once '/web/jianxue/web/app/plugin/modifier.book.php';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts']->value, 'part');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
?>
    <div class="row">
        <div class = "center-block text-center t_text"><?php echo $_smarty_tpl->tpl_vars['part']->value[1];?>
</div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chapters']->value, 'chapter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->value) {
?>
        <?php if (smarty_modifier_part($_smarty_tpl->tpl_vars['chapter']->value[0]) == smarty_modifier_part($_smarty_tpl->tpl_vars['part']->value[0])) {?>
        <div class="row ">
            <div class="catagory" id = "<?php echo $_smarty_tpl->tpl_vars['chapter']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['chapter']->value[1];?>
</div>
        </div>
        <div id="<?php echo ("list_").($_smarty_tpl->tpl_vars['chapter']->value[0]);?>
" class="secs">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
?>
            <?php if (smarty_modifier_book($_smarty_tpl->tpl_vars['section']->value[0]) == smarty_modifier_book($_smarty_tpl->tpl_vars['chapter']->value[0])) {?>
                <div class="list_div" id = "<?php echo $_smarty_tpl->tpl_vars['section']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value[1];?>
</div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}

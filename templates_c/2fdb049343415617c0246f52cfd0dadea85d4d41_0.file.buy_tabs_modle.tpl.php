<?php
/* Smarty version 3.1.30, created on 2017-12-19 18:02:30
  from "/web/jianxue/web/app/templates/buy_tabs_modle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38e3b65c3995_35426045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fdb049343415617c0246f52cfd0dadea85d4d41' => 
    array (
      0 => '/web/jianxue/web/app/templates/buy_tabs_modle.tpl',
      1 => 1512647442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38e3b65c3995_35426045 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_goods_class')) require_once '/web/jianxue/web/app/plugin/modifier.goods_class.php';
if (!is_callable('smarty_modifier_goods_type')) require_once '/web/jianxue/web/app/plugin/modifier.goods_type.php';
?>
<div class="row tab_buy">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ch']->value, 'c');
$_smarty_tpl->tpl_vars['c']->iteration = 0;
$_smarty_tpl->tpl_vars['c']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->iteration++;
$_smarty_tpl->tpl_vars['c']->index++;
$_smarty_tpl->tpl_vars['c']->first = !$_smarty_tpl->tpl_vars['c']->index;
$__foreach_c_0_saved = $_smarty_tpl->tpl_vars['c'];
?>
    <a href=<?php echo ("#tab_").($_smarty_tpl->tpl_vars['c']->value);?>
 data-toggle="tab"><div class="col-xs-2 column tab_menu center-block" tabindex="<?php echo $_smarty_tpl->tpl_vars['c']->iteration;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
天</div></a>
<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<div class="row tab-content">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ch']->value, 'c');
$_smarty_tpl->tpl_vars['c']->iteration = 0;
$_smarty_tpl->tpl_vars['c']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->iteration++;
$_smarty_tpl->tpl_vars['c']->index++;
$_smarty_tpl->tpl_vars['c']->first = !$_smarty_tpl->tpl_vars['c']->index;
$__foreach_c_1_saved = $_smarty_tpl->tpl_vars['c'];
if ($_smarty_tpl->tpl_vars['c']->first) {?>
<div class="tab-pane fade in active" id="<?php echo ("tab_").($_smarty_tpl->tpl_vars['c']->value);?>
">
    <?php } else { ?>
    <div class="tab-pane fade" id="<?php echo ("tab_").($_smarty_tpl->tpl_vars['c']->value);?>
">
        <?php }?>
        <div class="set_box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
                <?php if (smarty_modifier_goods_class($_smarty_tpl->tpl_vars['g']->value[0]) == $_smarty_tpl->tpl_vars['c']->value && smarty_modifier_goods_type($_smarty_tpl->tpl_vars['g']->value[0]) == "l") {?>
                    <div class="c_cb">
                        <div class="c_price_0 pull-left" id="<?php echo $_smarty_tpl->tpl_vars['g']->value[0];?>
">
                            <div class="c_tt center-block text-center">理论课程</div>
                            <div class="c_pp center-block text-center">售价:<?php echo $_smarty_tpl->tpl_vars['g']->value[1];?>
元</div>
                        </div>
                    </div>
                <?php }?>
                <?php if (smarty_modifier_goods_class($_smarty_tpl->tpl_vars['g']->value[0]) == $_smarty_tpl->tpl_vars['c']->value && smarty_modifier_goods_type($_smarty_tpl->tpl_vars['g']->value[0]) == "s") {?>
                    <div class="c_cb">
                        <div class="c_price_0 pull-left" id="<?php echo $_smarty_tpl->tpl_vars['g']->value[0];?>
">
                            <div class="c_tt center-block text-center">实操课程</div>
                            <div class="c_pp center-block text-center">售价:<?php echo $_smarty_tpl->tpl_vars['g']->value[1];?>
元</div>
                        </div>
                    </div>
                <?php }?>
                <?php if (smarty_modifier_goods_class($_smarty_tpl->tpl_vars['g']->value[0]) == $_smarty_tpl->tpl_vars['c']->value && smarty_modifier_goods_type($_smarty_tpl->tpl_vars['g']->value[0]) == "a") {?>
                    <div class="c_cb">
                        <div class="c_price_0 pull-left" id="<?php echo $_smarty_tpl->tpl_vars['g']->value[0];?>
">
                            <div class="c_tt center-block text-center">理论+实操</div>
                            <div class="c_pp center-block text-center">售价:<?php echo $_smarty_tpl->tpl_vars['g']->value[1];?>
元</div>
                        </div>
                    </div>
                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<?php }
}

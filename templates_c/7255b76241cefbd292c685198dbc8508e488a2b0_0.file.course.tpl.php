<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:12:51
  from "/web/hzfire/app/templates/course.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e3435504c3_16162687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7255b76241cefbd292c685198dbc8508e488a2b0' => 
    array (
      0 => '/web/hzfire/app/templates/course.tpl',
      1 => 1513742865,
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
function content_5a39e3435504c3_16162687 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_goods_type')) require_once '/web/hzfire/app/plugin/modifier.goods_type.php';
if (!is_callable('smarty_modifier_cut_time')) require_once '/web/hzfire/app/plugin/modifier.cut_time.php';
if (!is_callable('smarty_modifier_cal_date')) require_once '/web/hzfire/app/plugin/modifier.cal_date.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="container">
        <div class="tab_title">
            <a href="#all" data-toggle="tab" ><div class=" tab_menu center-block text-center" tabindex="1" role="button">全部课程</div></a>
            <a href="#valid" data-toggle="tab" ><div id="foc" class=" tab_menu center-block text-center" tabindex="2" role="button">有效课程</div></a>
            <a href="#expire" data-toggle="tab" ><div class="tab_menu center-block text-center" tabindex="3" role="button">过期课程</div></a>
        </div>

        <div class="tab-content">


            <div class="tab-pane fade" id="all">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'od');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['od']->value) {
?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="row ord_title">
                            <span><img src="./img/order_cir.png" height="100%"/></span>
                            <span><?php echo $_smarty_tpl->tpl_vars['od']->value[4];?>
</span>

                        </div>
                        <div class="row box_white">
                            <div class="col-xs-5 img_pad">
                                <?php $_smarty_tpl->_assignInScope('tmp', smarty_modifier_goods_type($_smarty_tpl->tpl_vars['od']->value[1]));
?>
                                <img src=<?php echo (((("./img/order_").($_smarty_tpl->tpl_vars['tmp']->value)).("_")).($_smarty_tpl->tpl_vars['od']->value[2])).(".png");?>
 class="img_logo"/>
                            </div>
                            <div class="col-xs-7 i_content">
                                <?php if ($_smarty_tpl->tpl_vars['tmp']->value == "a") {?>
                                    <div class="i_top">理论 + 实操</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['tmp']->value == "l") {?>
                                    <div class="i_top">理论课程</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['tmp']->value == "s") {?>
                                    <div class="i_top">实操课程</div>
                                <?php } else { ?>
                                <?php }?>
                                <div class="i_mid"><?php echo $_smarty_tpl->tpl_vars['od']->value[6];?>
</div>
                                <div class="i_bottom">
                                    <span>有效期:</span>
                                    <span class="star">
                            <?php echo smarty_modifier_cut_time($_smarty_tpl->tpl_vars['od']->value[3]);?>
~<?php echo smarty_modifier_cut_time($_smarty_tpl->tpl_vars['od']->value[4]);?>

                        </span>
                                </div>
                                <div class="i_bottom">
                                    <span>剩余时长:</span>
                                    <span class="expire_t"><?php echo smarty_modifier_cal_date($_smarty_tpl->tpl_vars['od']->value[4]);?>
</span>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>



            <div class="tab-pane fade in active" id="valid">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'od');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['od']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['od']->value[2] == 1) {?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="row ord_title">
                            <span><img src="./img/order_cir.png" height="100%"/></span>
                            <span><?php echo $_smarty_tpl->tpl_vars['od']->value[4];?>
</span>

                        </div>
                        <div class="row box_white">
                            <div class="col-xs-5 img_pad">
                                <?php $_smarty_tpl->_assignInScope('tmp', smarty_modifier_goods_type($_smarty_tpl->tpl_vars['od']->value[1]));
?>
                                <img src=<?php echo ((("./img/order_").($_smarty_tpl->tpl_vars['tmp']->value)).("_1")).(".png");?>
 class="img_logo"/>
                            </div>
                            <div class="col-xs-7 i_content">
                                <?php if ($_smarty_tpl->tpl_vars['tmp']->value == "a") {?>
                                    <div class="i_top">理论 + 实操</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['tmp']->value == "l") {?>
                                    <div class="i_top">理论课程</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['tmp']->value == "s") {?>
                                    <div class="i_top">实操课程</div>
                                <?php } else { ?>
                                <?php }?>
                                <div class="i_mid"><?php echo $_smarty_tpl->tpl_vars['od']->value[6];?>
</div>
                                <div class="i_bottom">
                                    <span class="star">
                            <?php echo smarty_modifier_cut_time($_smarty_tpl->tpl_vars['od']->value[3]);?>
~<?php echo smarty_modifier_cut_time($_smarty_tpl->tpl_vars['od']->value[4]);?>

                        </span>
                                </div>
                                <div class="i_bottom">
                                    <span>剩余时长:</span>
                                    <span class="expire_t"><?php echo smarty_modifier_cal_date($_smarty_tpl->tpl_vars['od']->value[4]);?>
</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>





            <div class="tab-pane fade" id="expire">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'od');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['od']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['od']->value[2] == 0) {?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="row ord_title">
                                <span><img src="./img/order_cir.png" height="100%"/></span>
                                <span><?php echo $_smarty_tpl->tpl_vars['od']->value[4];?>
</span>

                            </div>
                            <div class="row box_white">
                                <div class="col-xs-5 img_pad">
                                    <?php $_smarty_tpl->_assignInScope('tmp', smarty_modifier_goods_type($_smarty_tpl->tpl_vars['od']->value[1]));
?>
                                    <img src=<?php echo ((("./img/order_").($_smarty_tpl->tpl_vars['tmp']->value)).("_0")).(".png");?>
 class="img_logo"/>
                                </div>
                                <div class="col-xs-7 i_content">
                                    <?php if ($_smarty_tpl->tpl_vars['tmp']->value == "a") {?>
                                        <div class="i_top">理论 + 实操</div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['tmp']->value == "l") {?>
                                        <div class="i_top">理论课程</div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['tmp']->value == "s") {?>
                                        <div class="i_top">实操课程</div>
                                    <?php } else { ?>
                                    <?php }?>
                                    <div class="i_mid"><?php echo $_smarty_tpl->tpl_vars['od']->value[6];?>
</div>
                                    <div class="i_bottom">
                                        <span class="star">
                            <?php echo smarty_modifier_cut_time($_smarty_tpl->tpl_vars['od']->value[3]);?>
~<?php echo smarty_modifier_cut_time($_smarty_tpl->tpl_vars['od']->value[4]);?>

                        </span>
                                    </div>
                                    <div class="i_bottom">
                                        <span class="expire_t"><?php echo smarty_modifier_cal_date($_smarty_tpl->tpl_vars['od']->value[4]);?>
</span>

                                    </div>
                                </div>
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












    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

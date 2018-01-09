<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:27:45
  from "/web/hzfire/app/templates/sc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e6c1c9a2f2_92640370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06cff6273c6e305e14b83c42f56f7530dc1f91a8' => 
    array (
      0 => '/web/hzfire/app/templates/sc.tpl',
      1 => 1512526478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39e6c1c9a2f2_92640370 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_md4x')) require_once '/web/hzfire/app/plugin/modifier.md4x.php';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sc']->value, 'row');
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
        <!--进度开始-->
        <div class="container">
            <div class="pull-right counter">
                <span> 进度：</span>
                <span><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
 /</span>
                <span><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
            </div>
        </div>
        <!--ban开始-->
        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration;
$_prefixVariable1=ob_get_clean();
echo ('qid').($_prefixVariable1);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
</div>
        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration;
$_prefixVariable2=ob_get_clean();
echo ('RA').($_prefixVariable2);?>
" class="hidden"><?php echo smarty_modifier_md4x($_smarty_tpl->tpl_vars['row']->value[4]);?>
</div>
        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration;
$_prefixVariable3=ob_get_clean();
echo ('SCORE').($_prefixVariable3);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['exam']->value["scScore"];?>
</div>

        <div class="container">
            <div class=" banner_question">
            <div class="row banner_title">
                <div class="col-xs-4 banner_top_left "></div>
                <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration;
$_prefixVariable4=ob_get_clean();
echo ('type').($_prefixVariable4);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</div>
                <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                        第一部分
                </div>
                <div class="col-xs-4 center-block banner_top_right"></div>

                <div class="col-xs-12">
                    <div class="question">
                        <?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>

                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['row']->value[5] == 1) {?>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8 thumbnail ximg">
                        <img src="<?php echo (('qimg/').($_smarty_tpl->tpl_vars['row']->value[0])).('.png');?>
"/>
                    </div>
                    <div class="col-xs-2"></div>
                <?php }?>

                <div class="col-xs-12">
                    <div class="items">
                        <?php $_smarty_tpl->_assignInScope('sels', explode("|",$_smarty_tpl->tpl_vars['row']->value[3]));
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sels']->value, 'i');
$_smarty_tpl->tpl_vars['i']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->iteration++;
$__foreach_i_1_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="<?php echo ('r').($_smarty_tpl->tpl_vars['row']->iteration);?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->iteration;?>
"/>
                                        <span class="sel_txt_exam"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                    </label>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                </div>
            </div>
                <br/>
        </div>
        </div>


        <div class="container questionBtn">
            <div class="row">
                <div class="col-xs-4">
                    <button class="btn btn-danger btn_pre">上一题</button>
                </div>
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <button class="btn btn-danger pull-right btn_next">下一题</button>
                </div>
            </div>
        </div>
    </div>
    <!--做题按钮end-->
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}

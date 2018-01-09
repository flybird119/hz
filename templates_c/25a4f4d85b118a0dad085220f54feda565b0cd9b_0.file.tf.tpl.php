<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:25:34
  from "/web/jianxue/web/app/templates/tf.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38db0ecf6715_24857112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a4f4d85b118a0dad085220f54feda565b0cd9b' => 
    array (
      0 => '/web/jianxue/web/app/templates/tf.tpl',
      1 => 1512526477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38db0ecf6715_24857112 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_md4x')) require_once '/web/jianxue/web/app/plugin/modifier.md4x.php';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tf']->value, 'row', true);
$_smarty_tpl->tpl_vars['row']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->iteration++;
$_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration == $_smarty_tpl->tpl_vars['row']->total;
$__foreach_row_4_saved = $_smarty_tpl->tpl_vars['row'];
?>
    <div class="row hidden" id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;
$_prefixVariable11=ob_get_clean();
echo ('q').($_prefixVariable11);?>
">
        <!--进度开始-->
        <div class="container">
            <div class="pull-right counter">
                <span> 进度：</span>
                <span><?php echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;?>
 /</span>
                <span><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
            </div>
        </div>
        <!--ban开始-->
        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;
$_prefixVariable12=ob_get_clean();
echo ('qid').($_prefixVariable12);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
</div>
        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;
$_prefixVariable13=ob_get_clean();
echo ('RA').($_prefixVariable13);?>
" class="hidden"><?php echo smarty_modifier_md4x($_smarty_tpl->tpl_vars['row']->value[4]);?>
</div>
        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;
$_prefixVariable14=ob_get_clean();
echo ('SCORE').($_prefixVariable14);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['exam']->value["tfScore"];?>
</div>

        <div class="container">
            <div class=" banner_question">
                <div class="row banner_title">
                    <div class="col-xs-4 banner_top_left "></div>
                    <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;
$_prefixVariable15=ob_get_clean();
echo ('type').($_prefixVariable15);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</div>
                    <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                        第三部分
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
$__foreach_i_5_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="<?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->iteration+$_smarty_tpl->tpl_vars['tf_start']->value;
$_prefixVariable16=ob_get_clean();
echo ('r').($_prefixVariable16);?>
"
                                               value="<?php echo $_smarty_tpl->tpl_vars['i']->iteration;?>
"/>
                                        <span class="sel_txt_exam"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                                    </label>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_5_saved;
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

                <?php if ($_smarty_tpl->tpl_vars['row']->last) {?>
                    <div class="col-xs-4">
                        <form action="exam_check.php" method="post" class="hidden" id="post_form">
                            <textarea id="post_data" name="p">反反复复付付</textarea>
                        </form>
                        <button class="btn btn-danger center-block btn_sub">交 &nbsp;&nbsp;&nbsp;卷</button>
                    </div>
                <?php } else { ?>
                    <div class="col-xs-4"></div>
                <?php }?>

                <div class="col-xs-4">
                    <button class="btn btn-danger pull-right btn_next">下一题</button>
                </div>
            </div>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}

<?php
/* Smarty version 3.1.30, created on 2017-12-19 16:56:09
  from "/web/jianxue/web/app/templates/test_sc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38d429723e80_96571615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43b20dea4bcde4c3967ac3aa9a494ad83fc547e9' => 
    array (
      0 => '/web/jianxue/web/app/templates/test_sc.tpl',
      1 => 1512526478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38d429723e80_96571615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="pull-right counter">
        <span> 进度：</span>
        <span><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
 /</span>
        <span><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
    </div>
</div>

<div class="container">
    <div class="banner_question">
        <div class="row banner_title">
            <div class="col-xs-4 banner_top_left "></div>
            <div id="<?php echo ('qid').($_smarty_tpl->tpl_vars['row']->iteration);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
</div>
            <div id="<?php echo ('type').($_smarty_tpl->tpl_vars['row']->iteration);?>
" class="hidden"><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</div>
            <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

            </div>
            <div class="col-xs-4 center-block banner_top_right"></div>

            <div class="col-xs-12">
                <div class="question">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>

                    <span class="glyphicon glyphicon-ok hidden" id="<?php echo ('fr').($_smarty_tpl->tpl_vars['row']->iteration);?>
"></span>
                    <span class="glyphicon glyphicon-remove hidden" id="<?php echo ('fw').($_smarty_tpl->tpl_vars['row']->iteration);?>
"></span>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['row']->value[7] == 1) {?>
                <br/>
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
    <div class="checkbox tip_del pull-right <?php echo $_smarty_tpl->tpl_vars['chk_del_question']->value;?>
">
        <label>
            <input type="checkbox" name="<?php echo ('del_q_').($_smarty_tpl->tpl_vars['row']->iteration);?>
"
                   value=""/>
            <span class="sel_tip_exam">本题已经学会，从题库删除</span>
        </label>
    </div>
</div>

<div class="container <?php echo $_smarty_tpl->tpl_vars['show_answer']->value;?>
 questionBtn" id="<?php echo ('RAD').($_smarty_tpl->tpl_vars['row']->iteration);?>
">
    <div class = "result">
        <label class="result_title">正确答案为：[ <span id="<?php echo ('RA').($_smarty_tpl->tpl_vars['row']->iteration);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value[4];?>
</span> ]</label><br/>
        <label>答案解析：</label>
        <div class="result_des">
            <?php echo $_smarty_tpl->tpl_vars['row']->value[5];?>

        </div>
    </div>
</div>


<div class="container questionBtn">
    <div class="row">
        <div class="col-xs-4">
            <button class="btn btn-danger btn_pre">上一题</button>
        </div>
        <div class="col-xs-4">
        </div>
        <div class="col-xs-4">
            <button class="btn btn-danger pull-right btn_next">下一题</button>
        </div>
    </div>
</div><?php }
}

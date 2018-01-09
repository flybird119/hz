<?php
/* Smarty version 3.1.30, created on 2017-12-20 11:46:33
  from "/web/jianxue/web/app/templates/catagory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39dd1977b465_06035103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3690fcdd15fa705c6fd763134447d0195c9ca95a' => 
    array (
      0 => '/web/jianxue/web/app/templates/catagory.tpl',
      1 => 1513678499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39dd1977b465_06035103 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_getFront')) require_once '/web/jianxue/web/app/plugin/modifier.getFront.php';
if (!is_callable('smarty_modifier_getLast')) require_once '/web/jianxue/web/app/plugin/modifier.getLast.php';
if (!is_callable('smarty_modifier_part')) require_once '/web/jianxue/web/app/plugin/modifier.part.php';
if (!is_callable('smarty_modifier_book')) require_once '/web/jianxue/web/app/plugin/modifier.book.php';
?>

    <!--banner开始-->
    <div class = "row ">
        <div class = "container banner_top ">
            <div class="col-xs-2 banner_top_left"> </div>

            <div class="col-xs-8 bg_red_light banner_top_mid center-block text-center font14bw">
                初级建（构）筑物消防员试题
            </div>
            <div class="col-xs-2 banner_top_right">
            </div>
        </div>
    </div>



    <div class ="row">
        <div class="container">
            <div class = "banner box_normal">
                <div class="col-xs-4">
                    <a href="exam.php" class="btn banner_btn btn_01 center-block font14bw ">模拟考试</a>
                </div>
                <div class="col-xs-4">
                    <a href="wrong_set.php" class="btn banner_btn btn_02 center-block font14bw">错题强化</a>
                </div>
                <div class="col-xs-4">
                    <a href="score.php" class="btn banner_btn btn_03 center-block font14bw">历史成绩</a>
                </div>
            </div>
        </div>
    </div>
    <!--章节标题开始-->

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts']->value, 'part', true);
$_smarty_tpl->tpl_vars['part']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->iteration++;
$_smarty_tpl->tpl_vars['part']->last = $_smarty_tpl->tpl_vars['part']->iteration == $_smarty_tpl->tpl_vars['part']->total;
$__foreach_part_0_saved = $_smarty_tpl->tpl_vars['part'];
?>
    <?php if ($_smarty_tpl->tpl_vars['part']->last) {?>
        <?php break 1;?>
    <?php }?>
    <div>
        <div class="container">
            <div class="chapter center-block ">
                <div class = "col-xs-2">
                </div>
                <div class = "col-xs-3 chapter_left center-block text-center bg_red_light font14bw">
                    <?php echo smarty_modifier_getFront($_smarty_tpl->tpl_vars['part']->value[1]);?>

                </div>
                <div class = "col-xs-1 chapter_triangle"></div>
                <div class = "col-xs-4 chapter_right font14bb">
                    <?php echo smarty_modifier_getLast($_smarty_tpl->tpl_vars['part']->value[1]);?>

                </div>
                <div class = "col-xs-2">
                </div>
            </div>
        </div>

        <div>
            <div class="container ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chapters']->value, 'chapter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->value) {
?>
            <?php if (smarty_modifier_part($_smarty_tpl->tpl_vars['chapter']->value[0]) == smarty_modifier_part($_smarty_tpl->tpl_vars['part']->value[0])) {?>
                <div class="catagory" id="<?php echo smarty_modifier_book($_smarty_tpl->tpl_vars['chapter']->value[0]);?>
"><?php echo $_smarty_tpl->tpl_vars['chapter']->value[1];?>

                    <span class="glyphicon glyphicon-chevron-right pull-right catagory_span"></span>
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
$_smarty_tpl->tpl_vars['part'] = $__foreach_part_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <br/>
        <br/>
<?php }
}

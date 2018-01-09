<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:28:11
  from "/web/hzfire/app/templates/score.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e6dbabd7e4_54799852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e78217695f3953855a79c8e440ab0002cb3343a' => 
    array (
      0 => '/web/hzfire/app/templates/score.tpl',
      1 => 1512705404,
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
function content_5a39e6dbabd7e4_54799852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <!--ban开始-->
    <div>
        <div class="container">
            <div class="banner_question">
                <div class="row banner_title">
                    <div class="col-xs-4 banner_top_left "></div>
                    <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                        历史成绩表
                    </div>
                    <div class="col-xs-4 center-block banner_top_right"></div>
                </div>
                <div class="row">
                    <div class="tb font14bn">

                        <div class="row tbh">
                            <div class="col-xs-9">
                                考试时间
                            </div>

                            <div class="col-xs-3 ">
                                成绩
                            </div>

                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'sc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->value) {
?>

                        <div class="score">
                            <div class="col-xs-9"><?php echo $_smarty_tpl->tpl_vars['sc']->value[0];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['sc']->value[1];?>
</div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

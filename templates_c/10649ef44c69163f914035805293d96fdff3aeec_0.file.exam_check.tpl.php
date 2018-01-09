<?php
/* Smarty version 3.1.30, created on 2017-12-21 14:38:03
  from "/web/hzfire/app/templates/exam_check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b56cb536ba8_93255881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10649ef44c69163f914035805293d96fdff3aeec' => 
    array (
      0 => '/web/hzfire/app/templates/exam_check.tpl',
      1 => 1512526478,
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
function content_5a3b56cb536ba8_93255881 (Smarty_Internal_Template $_smarty_tpl) {
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
                        考试统计表
                    </div>
                    <div class="col-xs-4 center-block banner_top_right"></div>
                </div>
                <div class="row">
                    <div class="tb font14bn">

                        <div class="row tbh">
                            <div class="col-xs-6">
                                <span>本次得分：</span>
                                <span><?php echo $_smarty_tpl->tpl_vars['r_score']->value;?>
分</span>
                            </div>

                            <div class="col-xs-6 ">
                                <span class="pull-right">总分制：<?php echo $_smarty_tpl->tpl_vars['totle_score']->value;?>
分</span>
                            </div>

                        </div>

                        <div class="score">
                            <div class="col-xs-3">题型</div>
                            <div class="col-xs-3">数量</div>
                            <div class="col-xs-3">答对</div>
                            <div class="col-xs-3">得分</div>
                        </div>

                        <div class="score">
                            <div class="col-xs-3">单选</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["sc"]["count"];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["sc"]["r_count"];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["sc"]["score"];?>
</div>
                        </div>

                        <div class="score ">
                            <div class="col-xs-3">多选</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["mc"]["count"];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["mc"]["r_count"];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["mc"]["score"];?>
</div>
                        </div>

                        <div class="score">
                            <div class="col-xs-3">判断</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["tf"]["count"];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["tf"]["r_count"];?>
</div>
                            <div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['score']->value["tf"]["score"];?>
</div>
                        </div>

                    </div>
                </div>
            </div>


            <div>
                <div class="col-xs-4">
                    <form action="exam_wrong.php" method="post" class="hidden" id="post_form">
                        <textarea  name ="p" ><?php echo base64_encode($_smarty_tpl->tpl_vars['wrong_post']->value);?>
</textarea>
                    </form>
                    <button class="btn btn-danger pull-left btn_wrong_post">错题解析</button>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-danger center-block btn_wrong_set">错&nbsp;题&nbsp;集</button>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-danger pull-right" href = "exam.php">再考一次</a>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

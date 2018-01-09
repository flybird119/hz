<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:34:31
  from "/web/jianxue/web/app/templates/feedback.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dd2752c1a7_33411572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75784564fb88b0bac0aa096355019c348da6fe11' => 
    array (
      0 => '/web/jianxue/web/app/templates/feedback.tpl',
      1 => 1512892819,
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
function content_5a38dd2752c1a7_33411572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="container">
        <div class="col-xs-12">
            <div class="row ord_title">
                <span><img src="./img/video_x.png" height="100%"/></span>
                <span class="q">请在下面输入您在使用中遇到的问题:</span>
            </div>
            <div class="row ">
                <div class="col-xs-12 img_pad">
                    <textarea class="ip"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-left">
                    <a href="#">
                        <img src="code.php" id="code"/>
                    </a>
                </div>
                <div class="col-xs-1">

                </div>
                <div class="col-xs-7 cs">
                    <input type="text" class="form-control" placeholder="验证码" id="ccc">
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-default btn_cls">清空</button>
                </div>
                <div class="col-xs-12">
                    <button class="btn btn-danger btn_spr">提交</button>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

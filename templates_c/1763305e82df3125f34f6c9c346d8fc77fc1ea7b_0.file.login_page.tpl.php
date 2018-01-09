<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:11:57
  from "/web/hzfire/app/templates/login_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e30dd115d1_96707203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1763305e82df3125f34f6c9c346d8fc77fc1ea7b' => 
    array (
      0 => '/web/hzfire/app/templates/login_page.tpl',
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
function content_5a39e30dd115d1_96707203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="container">
                <br/>
                <div class="row">
                    <div class="col-xs-12">
                        <div id="err_div" class="hidden">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <span id="err_txt"></span>
                        </div>
                    </div>
                </div>

                <input id = "mb_login" type="text" class="form-control mobile" placeholder="请输入您的手机号">
                <input id = "pwd_login" type="password" class="form-control passwd" placeholder="请输入密码">

                <div class="row">
                    <div class="col-xs-7">
                        <input id="code_login" type="text" class="form-control valid" placeholder="验证码">
                    </div>
                    <div class="col-xs-5 no_pading_left">
                        <a href="#" class="pull-right">
                            <img src="code.php" id="code" />
                        </a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-6">
                        <button class = "btn btn-default btn_sign" id="btn_go_sign">快速注册</button>
                    </div>
                    <div class="col-xs-6">
                        <button class = "btn btn-danger btn_sign" id="submit_login">登陆</button>
                    </div>
                </div>
            </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

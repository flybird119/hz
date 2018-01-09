<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:34:07
  from "/web/jianxue/web/app/templates/sign.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dd0f63b4d8_10965657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e53b68a27608966cbfbf3ceea55b5b7c2bb0e' => 
    array (
      0 => '/web/jianxue/web/app/templates/sign.tpl',
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
function content_5a38dd0f63b4d8_10965657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--title结束-->
<div class=container>
    <div class=row>
        <div class="col-xs-12 text-center">
            <div class="circle"></div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="err_div" class="hidden">
                    <span class="glyphicon glyphicon-info-sign"></span>
                        <span id="err_txt"></span>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-xs-12">
                        <input id="mb_sign" type="text" class="form-control in_success mobile" placeholder="请输入您的手机号">
                        <input id="pwd_sign" type="password" class="form-control passwd" placeholder="请输入密码">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <input id="code_sign" type="text" class="form-control valid" placeholder="手机验证码">
                    </div>
                    <div class="col-xs-5 no_pading_left">
                        <button class="btn btn-danger btn_get_valid">获取验证码</button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12">
                        <button class = "btn btn-danger btn_sign">注&nbsp;&nbsp;&nbsp;&nbsp;册</button>
                    </div>
                </div>
            </div>
   </div>

    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

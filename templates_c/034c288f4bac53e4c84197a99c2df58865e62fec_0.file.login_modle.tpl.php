<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:25:51
  from "/web/jianxue/web/app/templates/login_modle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38db1f4b5488_69750555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034c288f4bac53e4c84197a99c2df58865e62fec' => 
    array (
      0 => '/web/jianxue/web/app/templates/login_modle.tpl',
      1 => 1513490011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38db1f4b5488_69750555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 9999">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <br/>
                <div id="err_div" class="hidden">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    <span id="err_txt"></span>
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
        </div>
    </div>
</div>
<?php }
}

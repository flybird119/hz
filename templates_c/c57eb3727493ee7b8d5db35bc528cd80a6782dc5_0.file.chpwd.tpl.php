<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:28:14
  from "/web/hzfire/app/templates/chpwd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e6deed53d0_48978448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57eb3727493ee7b8d5db35bc528cd80a6782dc5' => 
    array (
      0 => '/web/hzfire/app/templates/chpwd.tpl',
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
function content_5a39e6deed53d0_48978448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class = "row ">
    <div class="col-xs-12 tips">
        <div class="tip_1">
        <span class="glyphicon glyphicon-info-sign"></span>
            <span id="tip">新密码不能与旧密码相同！</span></div>
    </div>
</div>
<div class="tmp"></div>
<div class = "row bg_w">
    <div class="col-xs-1">

    </div>
    <div class="col-xs-3">
        <div class="des">手机号码:</div>
    </div>

    <div class="col-xs-7">
            <input type="text" class="form-control" id="mb_sign"/>
    </div>

    <div class="col-xs-1">

    </div>

</div>

<div class = "row bg_w">
    <div class="col-xs-1">

    </div>
    <div class="col-xs-3">
        <div class="des">新密码:</div>
    </div>

    <div class="col-xs-7">
        <input type="password" class="form-control" id="pwd_sign" />
    </div>

    <div class="col-xs-1">

    </div>

</div>



<div class = "row bg_w">
    <div class="col-xs-1">

    </div>

    <div class="col-xs-5">
        <input type="text" class="form-control" id="code_sign" />
    </div>

    <div class="col-xs-5">
        <button class="btn btn-danger btn_code form-control">获取验证码</button>

    </div>

    <div class="col-xs-1">

    </div>

</div>

<div class = "row bg_w">
    <div class="col-xs-1">

    </div>

    <div class="col-xs-10">
        <button class="btn btn-danger btn_ch form-control">提交修改</button>

    </div>

    <div class="col-xs-1">

    </div>

</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2017-12-19 16:53:57
  from "/web/jianxue/web/app/templates/dgt_apply.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38d3a598f493_54633283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8bf7ef7e28cd1e21dc5cfe31f73bc092502b028' => 
    array (
      0 => '/web/jianxue/web/app/templates/dgt_apply.tpl',
      1 => 1513398570,
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
function content_5a38d3a598f493_54633283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="dele">
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_name">
        </div>
    </div>
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">身&nbsp;份&nbsp;证：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_id" >
        </div>
    </div>
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">联系电话：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_mb" >
        </div>
    </div>
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">居住地址：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_addr" >
        </div>
    </div>
    <hr class="line" />
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_2 pull-right">个人介绍：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <textarea class="form-control iipt" placeholder="简单情况介绍，不少于100字..." id="dgt_des"></textarea>
        </div>
    </div>

<hr class="line" />

    <div class="row de_r">
        <div class="col-xs-6">
            <div class =" pull-right"><a href="#">
                    <img src="code.php" id="code" />
                </a>
            </div>
        </div>

        <div class="col-xs-5 no_pading_left">
            <input type="text" class="form-control ipcode ipv" id="dgt_code" placeholder="验证码" >
        </div>
    </div>


    <div class="row de_r">
        <div class="col-xs-1"></div>
        <div class="col-xs-5 text-center">
            <button class="btn btn-default btn-sm bt_r" id="dgt_cancel">考虑一下</button>
        </div>
        <div class="col-xs-5 text-center">
            <button class="btn btn-default btn-sm bt_r" id="dgt_sub">提交申请</button>
        </div>
        <div class="col-xs-1"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2017-12-23 14:38:49
  from "/web/hzfire/app/templates/dgt_prot.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3df9f920af27_92343921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85288f7a9e7f4e4876c01f0d56e443fdeb8a7f4e' => 
    array (
      0 => '/web/hzfire/app/templates/dgt_prot.tpl',
      1 => 1514007033,
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
function content_5a3df9f920af27_92343921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pro">
    <div class="pro_title center-block text-center">代理协议</div>
    <div class="pro_cont">
        <div class="pro_des">本着真诚合作、互利互惠、共赢市场的原则，现就《消防新干线》产品的销售代理事宜，达成协议如下：</div>
        <div>1、申请成功后，您将成为消考通全系产品的代理,并享有乙方提供的技术支持，产品政策和返利。</div>
        <div>2、我方向您提供具有独家知识产权的《消防新干线》产品，您将作为我方网络授权代理商，向客户销售《消防新干线》产品，双方均不替对方经营活动承担法律责任。</div>
        <div>3、您不得擅自改换产品产品名称及价格，或冒用其他产品进行销售推广，否则将视为乙方违约，我方有权终止本协议。</div>
        <div>4、销售政策及结算：我方定时按照辅助条款中约定的销售额对代理商进行结算。</div>
        <div>5、代理授权期限为一年，期满后双方合作关系及本协议自动终止。在本协议到期后，双方可协商继续续签。</div>
        <div>6、本协议在申请通过批准后，视为有效，双方可就细节问题签订辅助条款。</div>
    </div>
    <div class="fot">
        <span class="bt_l"><button class="btn btn-default btn-sm bt_l" id="dgt_back">取消</button></span>
        <span class="bt_r"><button class="btn btn-danger btn-sm bt_r" id="dgt_go">同意</button></span>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

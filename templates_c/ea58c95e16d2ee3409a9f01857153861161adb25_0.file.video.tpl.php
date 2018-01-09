<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:31:50
  from "/web/jianxue/web/app/templates/video.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dc8605df19_36699768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea58c95e16d2ee3409a9f01857153861161adb25' => 
    array (
      0 => '/web/jianxue/web/app/templates/video.tpl',
      1 => 1512546196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:video_intro_modle.tpl' => 1,
    'file:video_list_modle.tpl' => 1,
    'file:video_eval_modle.tpl' => 1,
    'file:video_ask_modle.tpl' => 1,
    'file:buy_modle.tpl' => 1,
    'file:login_modle.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a38dc8605df19_36699768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="vid-wrapper" id="pplayer">

    </div>
</div>

<div class="row tab_mid">
    <a href="#intro" data-toggle="tab" ><div class="col-xs-3 column tab_menu center-block" tabindex="1">介绍</div></a>
    <a href="#list" data-toggle="tab" class="active"><div class="col-xs-3 column tab_menu center-block" tabindex="2">章节</div></a>
    <a href="#eval" data-toggle="tab" ><div class="col-xs-3 column tab_menu center-block" tabindex="3">评价</div></a>
    <a href="#ask" data-toggle="tab" ><div class="col-xs-3 column tab_menu center-block" tabindex="4">咨询</div></a>
</div>
<div class="tab-content">
<?php $_smarty_tpl->_subTemplateRender("file:video_intro_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:video_list_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:video_eval_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:video_ask_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:buy_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:login_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

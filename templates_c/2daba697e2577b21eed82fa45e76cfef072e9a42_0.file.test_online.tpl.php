<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:13:22
  from "/web/hzfire/app/templates/test_online.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e3625e97e4_96948123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2daba697e2577b21eed82fa45e76cfef072e9a42' => 
    array (
      0 => '/web/hzfire/app/templates/test_online.tpl',
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
function content_5a39e3625e97e4_96948123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="container no_padding">
        <div class="row t_h"></div>

        <div class="col-xs-12 col-sm-6 col-md-4 pad_5">
            <div class="row box_white no_margin" id="junior">
                <div class="col-xs-5 img_pad">
                    <img src="./img/junior_logo.png" class="img_logo"/>
                </div>
                <div class="col-xs-7 i_content no_padding">
                    <div class="i_top">初级测试</div>
                    <div class="i_mid">消防行业特有工种职业培训与技能鉴定初级系列...</div>
                    <div class="i_bottom">
                        <span>难度系数：</span>
                        <span class="star">
                            <img src="./img/star_1.png"/>
                            <img src="./img/star_1.png"/>
                            <img src="./img/star_0.png"/>
                            <img src="./img/star_0.png"/>
                            <img src="./img/star_0.png"/>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 pad_5">
            <div class="row box_white no_margin" id="medium">
                <div class="col-xs-5 img_pad">
                    <img src="./img/medium_logo.png" class="img_logo"/>
                </div>
                <div class="col-xs-7 i_content no_padding">
                    <div class="i_top">中级测试</div>
                    <div class="i_mid">消防行业特有工种职业培训与技能鉴定中级系列...</div>
                    <div class="i_bottom">
                        <span>难度系数：</span>
                        <span class="star">
                            <img src="./img/star_1.png"/>
                            <img src="./img/star_1.png"/>
                            <img src="./img/star_1.png"/>
                            <img src="./img/star_0.png"/>
                            <img src="./img/star_0.png"/>
                        </span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

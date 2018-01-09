<?php
/* Smarty version 3.1.30, created on 2017-12-19 18:02:30
  from "/web/jianxue/web/app/templates/buy.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38e3b65959a5_66812392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bfc15343fb9dfd63c38c168b1fdf3e6f884057c' => 
    array (
      0 => '/web/jianxue/web/app/templates/buy.tpl',
      1 => 1512700513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:red_header.tpl' => 1,
    'file:buy_tabs_modle.tpl' => 1,
    'file:login_modle.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a38e3b65959a5_66812392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 ath_box">
            <div class="c_ath">
                <span><img src="./img/buy_slanted.png" height="100%"></span>
                <span>理论课程</span>
                <span><img src="./img/buy_slanted.png" height="100%"></span>
            </div>

                <div class="c_list">
                    <span class="l_t">A.</span>
                    <span>在线读书</span>
                </div>
                <div class="c_list">
                    <span class="l_t">B.</span>
                    <span>视频教学</span>
                </div>
                <div class="c_list">
                    <span class="l_t">C.</span>
                    <span>章节练习</span>
                </div>
                <div class="c_list">
                    <span class="l_t">D.</span>
                    <span>模拟考试</span>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-xs-12 ath_box">
            <div class="c_ath">
                <span><img src="./img/buy_slanted.png" height="100%"></span>
                <span>实操课程</span>
                <span><img src="./img/buy_slanted.png" height="100%"></span>
            </div>

            <div class="c_list">
                <span class="l_t">A.</span>
                <span>在线读书</span>
            </div>
            <div class="c_list">
                <span class="l_t">B.</span>
                <span>视频教学</span>
            </div>
            <div class="c_list">
                <span class="l_t">E.</span>
                <span>实操题库</span>
            </div>
            <div class="c_list">
                <span class="l_t">F.</span>
                <span>主机操作</span>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:buy_tabs_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="row">
        <button class="btn btn-danger btn_buy">立即充值</button>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:login_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

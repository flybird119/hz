<?php
/* Smarty version 3.1.30, created on 2017-12-19 16:53:41
  from "/web/jianxue/web/app/templates/member.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38d3959cb016_96489434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f39473b0241da761ad723c784be418882cf0ee8' => 
    array (
      0 => '/web/jianxue/web/app/templates/member.tpl',
      1 => 1513217621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a38d3959cb016_96489434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class = "row red_h">

    <div class="col-xs-2">
        <div class = "bg_cir">
            <span class="glyphicon glyphicon-user hd"></span>
        </div>
    </div>
    <div class="col-xs-8">
        <div class="bg_mb">账户：<?php echo $_smarty_tpl->tpl_vars['mb']->value;?>
</div>
        <div class="level">等级：VIP-0</div>
    </div>
    <div class="col-xs-2">
        <span class="glyphicon glyphicon-list d3"></span>
    </div>
</div>

<div class = "row">

    <div class="col-xs-6 white_l" id="personal">
        <div class="ico_1">
            <img src="./img/self.png" height="100%">
        </div>
        <div class="txt_des">个人资料
        </div>
    </div>

    <div class="col-xs-6 white_r ls" id="dgt_prot">
        <div class="ico_1">
            <img src="./img/wallete.png" height="100%">
        </div>
        <div class="txt_des">代理申请
        </div>
    </div>

</div>

<div class = "row bg_list ls" id="course">
    <div class="col-xs-2">
        <div class="ico">
            <img src="./img/by_icon.png" height="100%">
        </div>
    </div>
    <div class="col-xs-10 des">
        <div>已购买课程</div>
    </div>
</div>

<div class = "row bg_l ls" id="score">
    <div class="col-xs-2">
        <div class="ico">
            <img src="./img/buy_car.png" height="100%">
        </div>
    </div>
    <div class="col-xs-10 des">
        <div>历史成绩查询</div>
    </div>
</div>

<div class = "row bg_l ls" id="wrong_set">
    <div class="col-xs-2">
        <div class="ico">
            <img src="./img/wrong_set.png" height="100%">
        </div>
    </div>

    <div class="col-xs-10 des">
        <div>错题集</div>
    </div>
</div>


<div class = "row bg_l ls" id="chpwd">
    <div class="col-xs-2">
        <div class="ico">
            <img src="./img/change_pass.png" height="100%">
        </div>
    </div>
    <div class="col-xs-10 des">
        <div>修改密码</div>
    </div>
</div>

<div class = "row bg_l ls" id="FAQ">
    <div class="col-xs-2">
        <div class="ico">
            <img src="./img/faq.png" height="100%">
        </div>
    </div>
    <div class="col-xs-10 des">
        <div>常见问题</div>
    </div>
</div>

<div class = "row bg_l ls " id="feedback">
    <div class="col-xs-2">
        <div class="ico">
            <img src="./img/fback.png" height="100%">
        </div>
    </div>

    <div class="col-xs-10 des">
        <div>意见反馈</div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['lvl']->value > 50) {?>
    <div class = "row bg_list">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/intro.png" height="100%">
            </div>
        </div>
        <div class="col-xs-10 des">
            <a href ="intro.php?saler=<?php echo $_smarty_tpl->tpl_vars['mb']->value;?>
"><div>我要推广</div></a>
        </div>
    </div>

    <div class = "row bg_l ls " id="my_extend">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/my_cst.png" height="100%">
            </div>
        </div>
        <div class="col-xs-10 des">
            <div>我的用户</div>
        </div>
    </div>

    <div class = "row bg_l ls " id="my_deal">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/my_deal.png" height="100%">
            </div>
        </div>

        <div class="col-xs-10 des">
            <div>我的成交</div>
        </div>
    </div>
    <div class = "row bg_l ls " id="my_deal">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/my_pay.png" height="100%">
            </div>
        </div>

        <div class="col-xs-10 des">
            <div>我的佣金</div>
        </div>
    </div>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['lvl']->value > 90) {?>
    <div class = "row bg_l ls">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/all_users.png" height="100%">
            </div>
        </div>
        <div class="col-xs-10 des">
            <div>用户分布</div>
        </div>
    </div>

    <div class = "row bg_l ls " id="my_extend">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/today.png" height="100%">
            </div>
        </div>
        <div class="col-xs-10 des">
            <div>今日成交</div>
        </div>
    </div>

    <div class = "row bg_l ls " id="my_extend">
        <div class="col-xs-2">
            <div class="ico">
                <img src="./img/wallete.png" height="100%">
            </div>
        </div>
        <div class="col-xs-10 des">
            <div>趋势分析</div>
        </div>
    </div>
<?php }?>

<div class="row" style="height:100px" ></div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

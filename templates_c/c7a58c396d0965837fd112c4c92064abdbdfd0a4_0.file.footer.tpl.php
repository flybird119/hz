<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:29:34
  from "/web/jianxue/web/app/robot/JB3208T/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dbfe59f503_81471837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a58c396d0965837fd112c4c92064abdbdfd0a4' => 
    array (
      0 => '/web/jianxue/web/app/robot/JB3208T/templates/footer.tpl',
      1 => 1513161215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38dbfe59f503_81471837 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
<div class="row tail">
    <hr/>
    <div>筑云网络科技有限公司-版权所有</div>
    <div>www.119kc.com</div>
</div>
<div class="question">
    <div class="cz_title center-block text-center">..::操 作 说 明::..</div>
    <div class="cz_des">
        本系统参照松江JB3208T主机开发，完全模拟该机的真实操作，方便学员操作练习，避免操作真实主机带来的不良后果，在本系统中，手指向右侧滑动，即可查看题目，根据题目操作主机。向左划动即可隐藏该说明。现在，请按“开始”继续吧...</div>

    <div class="pull-right cz_btn cz_start">
        <button class="btn btn-sm btn_ter_test"><span class="glyphicon glyphicon-hand-left"></span>&nbsp;&nbsp;&nbsp;&nbsp;返&nbsp;&nbsp;&nbsp;&nbsp;回 </button>


        <button class="btn btn-sm btn_start_test"> 开&nbsp;&nbsp;&nbsp;&nbsp;始&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
    </div>

    <div class="pull-right cz_btn cz_index hidden">
        <button class="btn btn-sm btn_pre"><span class="glyphicon glyphicon-hand-left"></span>&nbsp;&nbsp;&nbsp;&nbsp;上一题 </button>


        <button class="btn btn-sm btn_next"> 下一题&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-right"></span></button>
    </div>

</div>

<?php if ($_smarty_tpl->tpl_vars['media']->value == 1) {?>
    <audio  id="bg-music" loop="loop" preload="auto"
           src="./media/alarm.mp3">

    </audio>
<?php }?>
</div>

<?php echo '<script'; ?>
 src="../../script/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../style/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../script/jquery.touchSwipe.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./script/action_mb.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}

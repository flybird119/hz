<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:29:15
  from "/web/jianxue/web/app/templates/act_try_modle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dbeb841735_52333898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8ce96a4888584a3338fe5cefd79ac889cde802' => 
    array (
      0 => '/web/jianxue/web/app/templates/act_try_modle.tpl',
      1 => 1513582292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38dbeb841735_52333898 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="buy" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <br/>

                <div class="row">
                    <div class="col-xs-1">
                        <div class="center-block text-center">
                            <span class="glyphicon glyphicon-hand-right"></span>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="msg">抱歉,该内容需要购买才能学习,普通用户只能试50题！</div>
                    </div>
                    <div class="col-xs-1"></div>
                </div>
                <br/>
                <br/>
                <br/>

                <div class="row">
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-4 text-center">
                        <button class="btn btn-danger" id ="btn_buy_act">购买套餐</button>
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-4 text-center">
                        <button  class="btn btn-danger" id ="btn_try">继续试用</button>
                    </div>
                    <div class="col-xs-1"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php }
}

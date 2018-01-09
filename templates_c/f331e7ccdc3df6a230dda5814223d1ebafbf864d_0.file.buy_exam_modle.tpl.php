<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:13:24
  from "/web/hzfire/app/templates/buy_exam_modle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e364450168_18404147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f331e7ccdc3df6a230dda5814223d1ebafbf864d' => 
    array (
      0 => '/web/hzfire/app/templates/buy_exam_modle.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39e364450168_18404147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="buy_exam" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <div class="msg">模拟考试服务需要理论学习权限～</div>
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
                        <button class="btn btn-danger" id ="btn_buy">购买套餐</button>
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-4 text-center">
                        <button  class="btn btn-danger" id ="btn_exam_cancel">继续试用</button>
                    </div>
                    <div class="col-xs-1"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-12-19 17:29:15
  from "/web/jianxue/web/app/templates/buy_exam_modle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38dbeb83d9b2_42514738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3569464742fff8f7daf76f869769ad995ef81703' => 
    array (
      0 => '/web/jianxue/web/app/templates/buy_exam_modle.tpl',
      1 => 1512701208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38dbeb83d9b2_42514738 (Smarty_Internal_Template $_smarty_tpl) {
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

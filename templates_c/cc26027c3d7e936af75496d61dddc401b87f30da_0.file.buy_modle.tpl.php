<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:13:25
  from "/web/hzfire/app/templates/buy_modle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e365b4a785_07989698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc26027c3d7e936af75496d61dddc401b87f30da' => 
    array (
      0 => '/web/hzfire/app/templates/buy_modle.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39e365b4a785_07989698 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <div class="msg">抱歉,该内容需要购买才能学习哦～</div>
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
                        <button  class="btn btn-danger" id ="btn_cancel">继续试用</button>
                    </div>
                    <div class="col-xs-1"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php }
}

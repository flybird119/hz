<?php
/* Smarty version 3.1.30, created on 2017-12-20 12:13:24
  from "/web/hzfire/app/templates/test_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39e364449f25_95042066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1632daff5586b705188a0811774e9644cc43b92' => 
    array (
      0 => '/web/hzfire/app/templates/test_index.tpl',
      1 => 1513742865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:red_header.tpl' => 1,
    'file:buy_exam_modle.tpl' => 1,
    'file:act_try_modle.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a39e364449f25_95042066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:red_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="container no_padding">
        <div class="row">
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="./img/banner_01.png" width="100%">
                    </div>
                    <div class="item">
                        <img src="./img/banner_02.png" width="100%">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="row bg_01">
            <div>
            <span class="glyphicon glyphicon-leaf logo_sm"></span>
            <span class="x_title">理论题库</span>
            </div>
        </div>

        <div class="row box_question">
            <div class="col-xs-6">
                <div class="box_style" id="chapter">
                    <div class="col-xs-4"><img src="./img/prac.png" width="40" height="40" class="center-block text-center img_prac"/></div>
                    <div class="col-xs-8">
                        <div class="cn_des">
                           在线练习

                        </div>
                        <div class="en_des">
                            Test 0nline

                        </div>

                </div>
            </div>
            </div>

            <div class="col-xs-6">
                <div class="box_style" id="exam">
                    <div class="col-xs-4"><img src="./img/simu.png" width="40" height="40" class="center-block text-center img_prac"/></div>
                    <div class="col-xs-8">
                        <div class="cn_des">
                            模拟考试

                        </div>
                        <div class="en_des">
                            Exam 0nline

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row bg_01">
            <div>
            <span class="glyphicon glyphicon-screenshot logo_sm"></span>
            <span class="x_title">实操题库</span></div>
        </div>
        <div class="row box_list">

            <div class="col-xs-3" id="identify">
                <img src="./img/identify.png" width="40" height="40" class="center-block text-center img_prac"/>
                <div class="log_des">识别</div>

            </div>


            <div class="col-xs-3" id="finger">
                <img src="./img/finger.png" width="40" height="40" class="center-block text-center img_prac"/>
                <div class="log_des">指认</div>
            </div>


            <div class="col-xs-3" id="oral">
                <img src="./img/oral.png" width="40" height="40" class="center-block text-center img_prac"/>
                <div class="log_des">口述</div>

            </div>


            <div class="col-xs-3" id="act">
                <img src="./img/act.png" width="40" height="40" class="center-block text-center img_prac"/>
                <div class="log_des">操作</div>
            </div>



        </div>


    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:buy_exam_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:act_try_modle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

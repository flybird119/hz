{include file='header.tpl'}
{include file= 'red_header.tpl'}
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
{include file= 'buy_exam_modle.tpl'}
{include file= 'act_try_modle.tpl'}
{include file= 'footer.tpl'}
{include file='header.tpl'}
{include file='red_header.tpl'}

<div class="row">
    <!--ban开始-->
    <div>
        <div class="container">
            <div class="banner_question">
                <div class="row banner_title">
                    <div class="col-xs-4 banner_top_left "></div>
                    <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                        考试统计表
                    </div>
                    <div class="col-xs-4 center-block banner_top_right"></div>
                </div>
                <div class="row">
                    <div class="tb font14bn">

                        <div class="row tbh">
                            <div class="col-xs-6">
                                <span>本次得分：</span>
                                <span>{$r_score}分</span>
                            </div>

                            <div class="col-xs-6 ">
                                <span class="pull-right">总分制：{$totle_score}分</span>
                            </div>

                        </div>

                        <div class="score">
                            <div class="col-xs-3">题型</div>
                            <div class="col-xs-3">数量</div>
                            <div class="col-xs-3">答对</div>
                            <div class="col-xs-3">得分</div>
                        </div>

                        <div class="score">
                            <div class="col-xs-3">单选</div>
                            <div class="col-xs-3">{$score["sc"]["count"]}</div>
                            <div class="col-xs-3">{$score["sc"]["r_count"]}</div>
                            <div class="col-xs-3">{$score["sc"]["score"]}</div>
                        </div>

                        <div class="score ">
                            <div class="col-xs-3">多选</div>
                            <div class="col-xs-3">{$score["mc"]["count"]}</div>
                            <div class="col-xs-3">{$score["mc"]["r_count"]}</div>
                            <div class="col-xs-3">{$score["mc"]["score"]}</div>
                        </div>

                        <div class="score">
                            <div class="col-xs-3">判断</div>
                            <div class="col-xs-3">{$score["tf"]["count"]}</div>
                            <div class="col-xs-3">{$score["tf"]["r_count"]}</div>
                            <div class="col-xs-3">{$score["tf"]["score"]}</div>
                        </div>

                    </div>
                </div>
            </div>


            <div>
                <div class="col-xs-4">
                    <form action="exam_wrong.php" method="post" class="hidden" id="post_form">
                        <textarea  name ="p" >{$wrong_post|base64_encode}</textarea>
                    </form>
                    <button class="btn btn-danger pull-left btn_wrong_post">错题解析</button>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-danger center-block btn_wrong_set">错&nbsp;题&nbsp;集</button>
                </div>
                <div class="col-xs-4">
                    <a class="btn btn-danger pull-right" href = "exam.php">再考一次</a>
                </div>
            </div>

        </div>
    </div>
</div>
{include file='footer.tpl'}

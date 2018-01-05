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
                        历史成绩表
                    </div>
                    <div class="col-xs-4 center-block banner_top_right"></div>
                </div>
                <div class="row">
                    <div class="tb font14bn">

                        <div class="row tbh">
                            <div class="col-xs-9">
                                考试时间
                            </div>

                            <div class="col-xs-3 ">
                                成绩
                            </div>

                        </div>
                        {foreach $scores as $sc}

                        <div class="score">
                            <div class="col-xs-9">{$sc[0]}</div>
                            <div class="col-xs-3">{$sc[1]}</div>
                        </div>
                        {/foreach}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{include file='footer.tpl'}

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
                        我的推广
                    </div>
                    <div class="col-xs-4 center-block banner_top_right"></div>
                </div>
                <div class="row">
                    <div class="tb font14bn">

                        <div class="row tbh">
                            <div class="col-xs-7">
                                注册时间
                            </div>

                            <div class="col-xs-5">
                                注册号码
                            </div>

                        </div>
                        {foreach $salers as $sc}

                            <div class="score">
                                <div class="col-xs-7">{$sc[0]|year_to_hour}</div>
                                <div class="col-xs-5">{$sc[1]|hide_mobile}</div>
                            </div>


                        {/foreach}

                        <div class="row tbh">
                            <div class="col-xs-12 text-right">
                                您总共推广了 : <span class="ex_num">{$salers|@count}</span> 个用户
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{include file='footer.tpl'}

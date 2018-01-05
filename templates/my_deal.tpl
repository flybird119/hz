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
                        我的成交
                    </div>
                    <div class="col-xs-4 center-block banner_top_right"></div>
                </div>
                <div class="row">
                    <div class="tb font14bn">

                        <div class="row tbh">
                            <div class="col-xs-12">
                                客户成交记录：
                            </div>


                        </div>
                        {foreach $deals as $sc}
                                <div class="col-xs-12 rec">
                                    用户:{$sc[0]|hide_mobile} 于 {$sc[1]|year_to_hour}
                                    消费了 {$sc[2]} 元
                                    结算状态：
                                        {if $sc[3] == 0}
                                            <span class="ex_grn">未结算</span>
                                        {else}
                                            <del><span class="ex_red">已结算</span></del>
                                        {/if}

                                </div>
                        {/foreach}

                        <div class="row tbh">
                            <div class="col-xs-12 text-right">
                                总金额 : <span class="ex_red">{$m["all"]}</span> 元
                                未结算金额 ：<span class="ex_grn">{$m["valid"]}</span> 元
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{include file='footer.tpl'}

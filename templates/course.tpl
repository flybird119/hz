{include file='header.tpl'}
{include file='red_header.tpl'}
<div class="row">
    <div class="container">
        <div class="tab_title">
            <a href="#all" data-toggle="tab" ><div class=" tab_menu center-block text-center" tabindex="1" role="button">全部课程</div></a>
            <a href="#valid" data-toggle="tab" ><div id="foc" class=" tab_menu center-block text-center" tabindex="2" role="button">有效课程</div></a>
            <a href="#expire" data-toggle="tab" ><div class="tab_menu center-block text-center" tabindex="3" role="button">过期课程</div></a>
        </div>

        <div class="tab-content">


            <div class="tab-pane fade" id="all">
                {foreach $orders as $od}
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="row ord_title">
                            <span><img src="./img/order_cir.png" height="100%"/></span>
                            <span>{$od[4]}</span>

                        </div>
                        <div class="row box_white">
                            <div class="col-xs-5 img_pad">
                                {$tmp =$od[1]|goods_type}
                                <img src={"./img/order_"|cat:$tmp|cat:"_"|cat:$od[2]|cat:".png"} class="img_logo"/>
                            </div>
                            <div class="col-xs-7 i_content">
                                {if $tmp == "a"}
                                    <div class="i_top">理论 + 实操</div>
                                {elseif $tmp == "l"}
                                    <div class="i_top">理论课程</div>
                                {elseif $tmp == "s"}
                                    <div class="i_top">实操课程</div>
                                {else}
                                {/if}
                                <div class="i_mid">{$od[6]}</div>
                                <div class="i_bottom">
                                    <span>有效期:</span>
                                    <span class="star">
                            {$od[3]|cut_time}~{$od[4]|cut_time}
                        </span>
                                </div>
                                <div class="i_bottom">
                                    <span>剩余时长:</span>
                                    <span class="expire_t">{$od[4]|cal_date}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>



            <div class="tab-pane fade in active" id="valid">
                {foreach $orders as $od}
                    {if $od[2]==1}
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="row ord_title">
                            <span><img src="./img/order_cir.png" height="100%"/></span>
                            <span>{$od[4]}</span>

                        </div>
                        <div class="row box_white">
                            <div class="col-xs-5 img_pad">
                                {$tmp =$od[1]|goods_type}
                                <img src={"./img/order_"|cat:$tmp|cat:"_1"|cat:".png"} class="img_logo"/>
                            </div>
                            <div class="col-xs-7 i_content">
                                {if $tmp == "a"}
                                    <div class="i_top">理论 + 实操</div>
                                {elseif $tmp == "l"}
                                    <div class="i_top">理论课程</div>
                                {elseif $tmp == "s"}
                                    <div class="i_top">实操课程</div>
                                {else}
                                {/if}
                                <div class="i_mid">{$od[6]}</div>
                                <div class="i_bottom">
                                    <span class="star">
                            {$od[3]|cut_time}~{$od[4]|cut_time}
                        </span>
                                </div>
                                <div class="i_bottom">
                                    <span>剩余时长:</span>
                                    <span class="expire_t">{$od[4]|cal_date}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    {/if}
                {/foreach}
            </div>





            <div class="tab-pane fade" id="expire">
                {foreach $orders as $od}
                    {if $od[2]==0
                    }
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="row ord_title">
                                <span><img src="./img/order_cir.png" height="100%"/></span>
                                <span>{$od[4]}</span>

                            </div>
                            <div class="row box_white">
                                <div class="col-xs-5 img_pad">
                                    {$tmp =$od[1]|goods_type}
                                    <img src={"./img/order_"|cat:$tmp|cat:"_0"|cat:".png"} class="img_logo"/>
                                </div>
                                <div class="col-xs-7 i_content">
                                    {if $tmp == "a"}
                                        <div class="i_top">理论 + 实操</div>
                                    {elseif $tmp == "l"}
                                        <div class="i_top">理论课程</div>
                                    {elseif $tmp == "s"}
                                        <div class="i_top">实操课程</div>
                                    {else}
                                    {/if}
                                    <div class="i_mid">{$od[6]}</div>
                                    <div class="i_bottom">
                                        <span class="star">
                            {$od[3]|cut_time}~{$od[4]|cut_time}
                        </span>
                                    </div>
                                    <div class="i_bottom">
                                        <span class="expire_t">{$od[4]|cal_date}</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>











        </div>












    </div>
</div>
{include file='footer.tpl'}

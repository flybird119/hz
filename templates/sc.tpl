{foreach $sc as $row}
    {if $row@first}
        <div class="row " id="{'q'|cat:$row@iteration}" >
        <div class="hidden" id="totle">{$count}</div>
    {else}
        <div class="row hidden" id="{'q'|cat:$row@iteration}">
    {/if}
        <!--进度开始-->
        <div class="container">
            <div class="pull-right counter">
                <span> 进度：</span>
                <span>{$row@iteration} /</span>
                <span>{$count}</span>
            </div>
        </div>
        <!--ban开始-->
        <div id="{'qid'|cat:{$row@iteration}}" class="hidden">{$row[0]}</div>
        <div id="{'RA'|cat:{$row@iteration}}" class="hidden">{$row[4]|md4x}</div>
        <div id="{'SCORE'|cat:{$row@iteration}}" class="hidden">{$exam["scScore"]}</div>

        <div class="container">
            <div class=" banner_question">
            <div class="row banner_title">
                <div class="col-xs-4 banner_top_left "></div>
                <div id="{'type'|cat:{$row@iteration}}" class="hidden">{$row[1]}</div>
                <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                        第一部分
                </div>
                <div class="col-xs-4 center-block banner_top_right"></div>

                <div class="col-xs-12">
                    <div class="question">
                        {$row[2]}
                    </div>
                </div>

                {if $row[5]== 1}
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8 thumbnail ximg">
                        <img src="{'qimg/'|cat:$row[0]|cat:'.png'}"/>
                    </div>
                    <div class="col-xs-2"></div>
                {/if}

                <div class="col-xs-12">
                    <div class="items">
                        {assign var=sels value="|"|explode:$row[3]}
                            {foreach $sels as $i}
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="{'r'|cat:$row@iteration}" value="{$i@iteration}"/>
                                        <span class="sel_txt_exam">{$i}</span>
                                    </label>
                                </div>
                            {/foreach}
                    </div>
                </div>
            </div>
                <br/>
        </div>
        </div>


        <div class="container questionBtn">
            <div class="row">
                <div class="col-xs-4">
                    <button class="btn btn-danger btn_pre">上一题</button>
                </div>
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <button class="btn btn-danger pull-right btn_next">下一题</button>
                </div>
            </div>
        </div>
    </div>
    <!--做题按钮end-->
{/foreach}
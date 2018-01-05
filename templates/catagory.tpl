
    <!--banner开始-->
    <div class = "row ">
        <div class = "container banner_top ">
            <div class="col-xs-2 banner_top_left"> </div>

            <div class="col-xs-8 bg_red_light banner_top_mid center-block text-center font14bw">
                初级建（构）筑物消防员试题
            </div>
            <div class="col-xs-2 banner_top_right">
            </div>
        </div>
    </div>



    <div class ="row">
        <div class="container">
            <div class = "banner box_normal">
                <div class="col-xs-4">
                    <a href="exam.php" class="btn banner_btn btn_01 center-block font14bw ">模拟考试</a>
                </div>
                <div class="col-xs-4">
                    <a href="wrong_set.php" class="btn banner_btn btn_02 center-block font14bw">错题强化</a>
                </div>
                <div class="col-xs-4">
                    <a href="score.php" class="btn banner_btn btn_03 center-block font14bw">历史成绩</a>
                </div>
            </div>
        </div>
    </div>
    <!--章节标题开始-->

    {foreach $parts as $part}
    {if $part@last}
        {break}
    {/if}
    <div>
        <div class="container">
            <div class="chapter center-block ">
                <div class = "col-xs-2">
                </div>
                <div class = "col-xs-3 chapter_left center-block text-center bg_red_light font14bw">
                    {$part[1]|getFront}
                </div>
                <div class = "col-xs-1 chapter_triangle"></div>
                <div class = "col-xs-4 chapter_right font14bb">
                    {$part[1]|getLast}
                </div>
                <div class = "col-xs-2">
                </div>
            </div>
        </div>

        <div>
            <div class="container ">
        {foreach $chapters as $chapter}
            {if $chapter[0]|part eq $part[0]|part}
                <div class="catagory" id="{$chapter[0]|book}">{$chapter[1]}
                    <span class="glyphicon glyphicon-chevron-right pull-right catagory_span"></span>
                </div>
            {/if}
        {/foreach}
            </div>
        </div>
    {/foreach}
        <br/>
        <br/>

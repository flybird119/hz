<div class="container">
    <div class="pull-right counter">
        <span> 进度：</span>
        <span>{$row@iteration} /</span>
        <span>{$count}</span>
    </div>
</div>

<div class="container">
    <div class="banner_question">
        <div class="row banner_title">
            <div class="col-xs-4 banner_top_left "></div>
            <div id="{'qid'|cat:$row@iteration}" class="hidden">{$row[0]}</div>
            <div id="{'type'|cat:$row@iteration}" class="hidden">{$row[1]}</div>
            <div class="col-xs-4 bg_red_light banner_top_mid center-block text-center font14bw">
                {$type}
            </div>
            <div class="col-xs-4 center-block banner_top_right"></div>

            <div class="col-xs-12">
                <div class="question">
                    {$row[2]}
                    <span class="glyphicon glyphicon-ok hidden" id="{'fr'|cat:$row@iteration}"></span>
                    <span class="glyphicon glyphicon-remove hidden" id="{'fw'|cat:$row@iteration}"></span>
                </div>
            </div>

            {if $row[7]== 1}
                <br/>
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
    <div class="checkbox tip_del pull-right {$chk_del_question}">
        <label>
            <input type="checkbox" name="{'del_q_'|cat:$row@iteration}"
                   value=""/>
            <span class="sel_tip_exam">本题已经学会，从题库删除</span>
        </label>
    </div>
</div>

<div class="container {$show_answer} questionBtn" id="{'RAD'|cat:$row@iteration}">
    <div class = "result">
        <label class="result_title">正确答案为：[ <span id="{'RA'|cat:$row@iteration}">{$row[4]}</span> ]</label><br/>
        <label>答案解析：</label>
        <div class="result_des">
            {$row[5]}
        </div>
    </div>
</div>


<div class="container questionBtn">
    <div class="row">
        <div class="col-xs-4">
            <button class="btn btn-danger btn_pre">上一题</button>
        </div>
        <div class="col-xs-4">
        </div>
        <div class="col-xs-4">
            <button class="btn btn-danger pull-right btn_next">下一题</button>
        </div>
    </div>
</div>
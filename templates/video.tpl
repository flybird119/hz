{include file='header.tpl'}
<div class="row">
    <div class="vid-wrapper" id="pplayer">

    </div>
</div>

<div class="row tab_mid">
    <a href="#intro" data-toggle="tab" ><div class="col-xs-3 column tab_menu center-block" tabindex="1">介绍</div></a>
    <a href="#list" data-toggle="tab" class="active"><div class="col-xs-3 column tab_menu center-block" tabindex="2">章节</div></a>
    <a href="#eval" data-toggle="tab" ><div class="col-xs-3 column tab_menu center-block" tabindex="3">评价</div></a>
    <a href="#ask" data-toggle="tab" ><div class="col-xs-3 column tab_menu center-block" tabindex="4">咨询</div></a>
</div>
<div class="tab-content">
{include file='video_intro_modle.tpl'}
{include file='video_list_modle.tpl'}
{include file='video_eval_modle.tpl'}
{include file='video_ask_modle.tpl'}
</div>
{include file='buy_modle.tpl'}
{include file='login_modle.tpl'}
{include file='footer.tpl'}
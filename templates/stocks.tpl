{include file='header.tpl'}

<div class="row title bg_red_dark">
    <div class="col-xs-2">
        <a href="#">
            <span class="glyphicon glyphicon-menu-left title_logo fontlogo"></span>
        </a>
    </div>
    <div class="col-xs-8">
            <span class="text-center center-block title_label font18bw">{$title}
            </span>
    </div>
    <div class="col-xs-2">
        <span class="glyphicon glyphicon-menu-hamburger pull-right title_logo fontlogo"></span>
    </div>
</div>
{foreach $stocks as $row}
<div>{$row[1]}</div>;
{/foreach}

{include file='footer.tpl'}

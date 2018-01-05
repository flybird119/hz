{include file='header.tpl'}
{include file='red_header.tpl'}
<div class="row">
    <div class="container">
        <div>
{foreach $qs as $q}
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row ord_title">
                <span><img src="./img/order_cir.png" height="100%"/></span>
                <span class="q">{$q[0]}</span>
            </div>
            <div class="row box_white">
                <div class="col-xs-12 img_pad">
                    <span class = "ans">答：</span>{$q[1]}
                </div>
            </div>
        </div>
{/foreach}
<div class="col-xs-12 tmp"></div>
        </div>
    </div>
</div>
{include file='footer.tpl'}
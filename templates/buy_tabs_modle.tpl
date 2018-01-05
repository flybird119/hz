<div class="row tab_buy">
{foreach $ch as $c}
    <a href={"#tab_"|cat:$c} data-toggle="tab"><div class="col-xs-2 column tab_menu center-block" tabindex="{$c@iteration}">{$c}天</div></a>
{/foreach}
</div>

<div class="row tab-content">
{foreach $ch as $c}
{if $c@first}
<div class="tab-pane fade in active" id="{"tab_"|cat:$c}">
    {else}
    <div class="tab-pane fade" id="{"tab_"|cat:$c}">
        {/if}
        <div class="set_box">
            {foreach $gs as $g}
                {if $g[0]|goods_class ==$c && $g[0]|goods_type =="l"}
                    <div class="c_cb">
                        <div class="c_price_0 pull-left" id="{$g[0]}">
                            <div class="c_tt center-block text-center">理论课程</div>
                            <div class="c_pp center-block text-center">售价:{$g[1]}元</div>
                        </div>
                    </div>
                {/if}
                {if $g[0]|goods_class ==$c && $g[0]|goods_type =="s"}
                    <div class="c_cb">
                        <div class="c_price_0 pull-left" id="{$g[0]}">
                            <div class="c_tt center-block text-center">实操课程</div>
                            <div class="c_pp center-block text-center">售价:{$g[1]}元</div>
                        </div>
                    </div>
                {/if}
                {if $g[0]|goods_class ==$c && $g[0]|goods_type =="a"}
                    <div class="c_cb">
                        <div class="c_price_0 pull-left" id="{$g[0]}">
                            <div class="c_tt center-block text-center">理论+实操</div>
                            <div class="c_pp center-block text-center">售价:{$g[1]}元</div>
                        </div>
                    </div>
                {/if}

            {/foreach}
        </div>
    </div>
    {/foreach}
</div>


{include file='header.tpl'}
{include file= 'red_header.tpl'}
{foreach $rs as $row}
    {if $row@first}
        <div class="row " id="{'q'|cat:$row@iteration}" >
        <div class="hidden" id="totle">{$count}</div>
    {else}
        <div class="row hidden" id="{'q'|cat:$row@iteration}">
    {/if}
    {if $row[1]==1}
        {$type="单选题"}
        {include file="test_sc.tpl"}
    {elseif $row[1]==2}
        {$type="多选题"}
        {include file="test_mc.tpl"}
    {elseif $row[1]==3}
        {$type="判断题"}
        {include file="test_sc.tpl"}
    {else}

    {/if}
        </div>
{/foreach}

{include file= 'footer.tpl'}
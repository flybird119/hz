{foreach $parts as $part}
    <div class="row">
        <div class = "center-block text-center t_text">{$part[1]}</div>
    </div>
    {foreach $chapters as $chapter}
        {if $chapter[0]|part eq $part[0]|part}
        <div class="row ">
            <div class="catagory" id = "{$chapter[0]}">{$chapter[1]}</div>
        </div>
        <div id="{"list_"|cat:$chapter[0]}" class="secs">
        {foreach $sections as $section}
            {if $section[0]|book eq $chapter[0]|book}
                <div class="list_div" id = "{$section[0]}">{$section[1]}</div>
            {/if}
        {/foreach}
        </div>
        {/if}
    {/foreach}
{/foreach}

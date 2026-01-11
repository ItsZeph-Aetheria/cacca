{* AETHERIA CUSTOM PAGE HANDLER v3.3 *}
{assign var="page_title_lower" value=$TITLE|lower}

{if $page_title_lower == 'news'}
    {include file='custom_pages/news.tpl'}

{elseif $page_title_lower == 'guides'}
    {include file='custom_pages/guides.tpl'}

{* NUOVA REGOLA: STORE *}
{elseif $page_title_lower == 'store'}
    {include file='custom_pages/store.tpl'}

{elseif $page_title_lower == 'status'}
    {include file='custom_pages/status.tpl'}

{elseif $TITLE|substr:0:8 == 'Article:'}
    {include file='custom_pages/article.tpl'}

{else}
    {* Fallback *}
    {include file='header.tpl'}
    {include file='navbar.tpl'}
    <div class="ui container aetheria-container">
        <div class="ui segment">
            <h1 class="ui header">{$TITLE}</h1>
            <div class="ui divider"></div>
            <div class="description forum_post">{$CONTENT}</div>
        </div>
    </div>
    {include file='footer.tpl'}
{/if}
{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="ui stackable grid">
        <div class="ui eleven wide column">
            
            <!-- Breadcrumbs -->
            <div class="ui breadcrumb" style="margin-bottom: 20px; font-size: 1.1rem;">
                <a class="section" href="{$SITE_HOME}">Home</a>
                <i class="right angle icon divider"></i>
                <div class="active section">Forums</div>
            </div>

            <!-- CONTROLLO PRINCIPALE: Esistono i forum? -->
            {if isset($FORUMS) && count($FORUMS) > 0}
                
                {foreach from=$FORUMS key=category item=forum}
                    
                    <!-- Check if the category has sub-forums -->
                    {if isset($forum.sub_forums) && count($forum.sub_forums) > 0}
                        <div class="forum-category-block">
                            
                            <!-- Category Header -->
                            <div class="forum-category-header">
                                <span>{$forum.title}</span>
                            </div>
                            
                            <!-- Lista Forum (Nodes) -->
                            <div class="forum-nodes-list">
                                {foreach from=$forum.sub_forums item=subforum}
                                    <a href="{$subforum.link}" class="forum-node-row">
                                        
                                        <!-- Icona -->
                                        <div class="node-icon">
                                            {if isset($subforum.icon) && $subforum.icon|count_characters > 0}
                                                {$subforum.icon}
                                            {else}
                                                <i class="fa fa-comments"></i>
                                            {/if}
                                        </div>
                                        
                                        <!-- Content -->
                                        <div class="node-content">
                                            <span class="node-title">{$subforum.forum_title}</span>
                                            <div class="node-desc">
                                                {if isset($subforum.forum_description)}{$subforum.forum_description}{/if}
                                            </div>
                                        </div>
                                        
                                        <!-- Statistiche (Desktop) -->
                                        <div class="node-stats">
                                            <div><strong>{if isset($subforum.topics)}{$subforum.topics}{else}0{/if}</strong> Topics</div>
                                            <div><strong>{if isset($subforum.posts)}{$subforum.posts}{else}0{/if}</strong> Posts</div>
                                        </div>
                                        
                                        <!-- Freccia iOS -->
                                        <div class="node-chevron">
                                            <i class="fa fa-chevron-right"></i>
                                        </div>

                                    </a>
                                {/foreach}
                            </div>
                        </div>
                    {/if}
                {/foreach}

            {else}
                <!-- ERROR MESSAGE VISIBLE IF THERE ARE NO FORUMS -->
                <div class="ui error message">
                    <div class="header">Nessun Forum Trovato</div>
                    <p>It seems there are no categories or forums visible for your account.</p>
                    <p><em>Admin: Controlla di aver creato i forum nel pannello e i permessi.</em></p>
                </div>
            {/if}
            
        </div>

        <!-- Sidebar (Widget) -->
        <div class="ui five wide column">
            {if isset($WIDGETS_RIGHT) && count($WIDGETS_RIGHT) > 0}
                {foreach from=$WIDGETS_RIGHT item=widget}
                    <div class="widget-wrapper-ios" style="margin-bottom: 20px;">
                        {$widget}
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>

</div>

{include file='footer.tpl'}
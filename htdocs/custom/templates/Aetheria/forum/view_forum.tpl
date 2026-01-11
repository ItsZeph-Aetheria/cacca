{* CONFIGURAZIONE IMMAGINE UPDATE *}
{* This image will be used for all cards. Change it with a screenshot of your server! *}
{assign var="UPDATE_DEFAULT_BG" value="https://gamepedia.cursecdn.com/minecraft_gamepedia/thumb/4/44/BuzzyBeesArtwork.jpg/1200px-BuzzyBeesArtwork.jpg"}

{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="ui stackable grid">
        <div class="ui twelve wide column">

            <!-- Forum Header -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                <div>
                    <h1 class="ui header" style="margin: 0; font-size: 2.5rem; display:inline-block;">
                        {$FORUM_TITLE}
                    </h1>
                    <div class="ui breadcrumb" style="margin-left: 15px; opacity: 0.6;">
                        <a class="section" href="{$SITE_HOME}">Home</a>
                        <i class="right angle icon divider"></i>
                        <div class="active section">{$FORUM_TITLE}</div>
                    </div>
                </div>
                
                {if isset($NEW_TOPIC_BUTTON)}
                    <a href="{$NEW_TOPIC_BUTTON}" class="ui primary button">
                        <i class="fa fa-pen"></i> &nbsp;{$NEW_TOPIC}
                    </a>
                {/if}
            </div>

            <!-- Subforums (Remain in list for order) -->
            {if isset($SUBFORUMS) && count($SUBFORUMS) > 0}
                <div class="forum-category-block" style="margin-bottom: 40px;">
                    <div class="forum-category-header">Categories</div>
                    {foreach from=$SUBFORUMS item=subforum}
                        <a href="{$subforum.link}" class="forum-node-row">
                            <div class="node-icon"><i class="fa fa-folder-open"></i></div>
                            <div class="node-content">
                                <span class="node-title">{$subforum.title}</span>
                            </div>
                            <div class="node-chevron"><i class="fa fa-chevron-right"></i></div>
                        </a>
                    {/foreach}
                </div>
            {/if}

            <!-- BLOG GRID LAYOUT -->
            <div class="updates-grid">
                
                <!-- We combine Sticky and Normal in a single loop for the grid -->
                {assign var="ALL_TOPICS" value=[]}
                {if !empty($STICKY_DISCUSSIONS)}{$ALL_TOPICS = array_merge($ALL_TOPICS, $STICKY_DISCUSSIONS)}{/if}
                {if !empty($LATEST_DISCUSSIONS)}{$ALL_TOPICS = array_merge($ALL_TOPICS, $LATEST_DISCUSSIONS)}{/if}

                {if count($ALL_TOPICS) > 0}
                    {foreach from=$ALL_TOPICS item=topic}
                        
                        <a href="{$topic.link}" class="update-card">
                            
                            <!-- Immagine Background -->
                            <!-- Usa l'immagine default. Purtroppo Nameless non passa l'immagine del post qui -->
                            <div class="update-thumb" style="background-image: url('{$UPDATE_DEFAULT_BG}');">
                                
                                <!-- Pin Icon if important -->
                                {if $topic.sticky == 1}
                                    <div class="pinned-icon" title="Pinned"><i class="fa fa-thumbtack"></i></div>
                                {/if}

                                <!-- Etichetta (Label) -->
                                <div class="update-tag-float">
                                    {if count($topic.labels) > 0}
                                        {foreach from=$topic.labels item=label}
                                            {$label}
                                        {/foreach}
                                    {else}
                                        <span class="ui label black">Update</span>
                                    {/if}
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="update-content">
                                <div class="update-meta">
                                    <span style="color: var(--primary-accent); font-weight:bold;">{$topic.topic_created_string}</span>
                                </div>

                                <div class="update-title">
                                    {if $topic.locked == 1}<i class="fa fa-lock" style="font-size:0.8em; opacity:0.5;"></i>{/if}
                                    {$topic.topic_title}
                                </div>

                                <!-- Descrizione Finta (Nameless non la fornisce, usiamo placeholder statico o statistiche) -->
                                <div class="update-excerpt">
                                    Click to read more about this update. Join the discussion and see what's new in {$SITE_NAME}!
                                </div>

                                <div class="update-footer">
                                    <div class="update-author">
                                        <img src="{$topic.topic_created_by_avatar}" alt="{$topic.topic_created_by_username}">
                                        <span style="font-weight:bold; color:var(--text-color);">{$topic.topic_created_by_username}</span>
                                    </div>
                                    <div style="font-size:0.85rem; opacity:0.6;">
                                        <i class="fa fa-comment"></i> {$topic.posts}
                                        &nbsp;
                                        <i class="fa fa-eye"></i> {$topic.views}
                                    </div>
                                </div>
                            </div>
                        </a>

                    {/foreach}
                {else}
                    <div class="ui info message" style="grid-column: 1 / -1;">
                        <div class="header">No Updates Found</div>
                        There are no posts in this section yet.
                    </div>
                {/if}

            </div>

            <!-- Pagination -->
            <div style="margin-top: 40px; text-align: center;">
                {$PAGINATION}
            </div>

        </div>

        <!-- Optional Sidebar Widget (can be removed for full width) -->
        <div class="ui four wide column">
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
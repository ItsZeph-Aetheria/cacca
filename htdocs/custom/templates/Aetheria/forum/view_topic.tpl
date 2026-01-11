{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="ui stackable grid">
        <div class="ui twelve wide column">
            
            <!-- Breadcrumb & Header -->
            <div style="margin-bottom: 20px;">
                <div class="ui breadcrumb" style="font-size: 1.1rem;">
                    <a class="section" href="{$SITE_HOME}">Home</a>
                    <i class="right angle icon divider"></i>
                    <a class="section" href="{$BREADCRUMB_URL}">Forums</a>
                    <i class="right angle icon divider"></i>
                    <div class="active section">{$TOPIC_TITLE}</div>
                </div>
                
                <h1 class="ui header" style="margin-top: 10px; font-size: 2rem;">
                    {foreach from=$TOPIC_LABELS item=label}{$label} {/foreach}
                    {$TOPIC_TITLE}
                </h1>
            </div>

            <!-- Pagination Top -->
            {if isset($PAGINATION)}
                <div style="margin-bottom: 20px;">{$PAGINATION}</div>
            {/if}

            <!-- POST LOOP -->
            {foreach from=$REPLIES item=reply}
                <div id="post-{$reply.id}" class="post-card">
                    
                    <!-- User Sidebar -->
                    <div class="post-sidebar">
                        <a href="{$reply.profile}">
                            <img src="{$reply.avatar}" class="post-avatar" alt="{$reply.username}">
                        </a>
                        
                        <div>
                            <a href="{$reply.profile}" class="post-username" style="color: {$reply.user_style}">{$reply.username}</a>
                            <div class="post-user-title">{$reply.user_group.name}</div>
                            
                            <!-- Stats (Desktop) -->
                            <div class="post-user-stats">
                                <div><strong>{$reply.user_posts_count}</strong> posts</div>
                                <div><strong>{$reply.user_likes_count}</strong> likes</div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Content -->
                    <div class="post-content-area">
                        
                        <!-- Post Header (Date and Link) -->
                        <div class="post-header">
                            <a href="{$reply.link}" data-toggle="tooltip" title="{$reply.post_date}">
                                <i class="fa fa-clock"></i> {$reply.post_date_rough}
                            </a>
                            
                            <!-- Moderation Buttons (Only if permissions) -->
                            <div class="post-actions-top">
                                {if isset($reply.buttons.spam)}
                                    <button class="ui mini button icon" onclick="{$reply.buttons.spam.action}" title="Spam"><i class="fa fa-flag"></i></button>
                                {/if}
                                {if isset($reply.buttons.delete)}
                                    <button class="ui mini button icon negative" onclick="if(confirm('{$CONFIRM_DELETE}')){ window.location.href='{$reply.buttons.delete.link}'; }" title="Delete"><i class="fa fa-trash"></i></button>
                                {/if}
                            </div>
                        </div>

                        <!-- Message text -->
                        <div class="post-body forum_post">
                            {$reply.content}
                        </div>

                        <!-- Firma -->
                        {if !empty($reply.signature)}
                            <div class="post-signature">
                                {$reply.signature}
                            </div>
                        {/if}

                        <!-- Footer (Quote, Edit, Like) -->
                        <div class="post-footer">
                            {if isset($reply.buttons.edit)}
                                <a href="{$reply.buttons.edit.link}" class="post-btn edit">
                                    <i class="fa fa-pencil"></i> {$reply.buttons.edit.text}
                                </a>
                            {/if}
                            
                            {if isset($reply.buttons.quote)}
                                <a href="{$reply.buttons.quote.link}" class="post-btn">
                                    <i class="fa fa-quote-left"></i> {$reply.buttons.quote.text}
                                </a>
                            {/if}
                            
                            {if isset($reply.buttons.report)}
                                <a href="{$reply.buttons.report.link}" class="post-btn delete">
                                    <i class="fa fa-exclamation-triangle"></i> Report
                                </a>
                            {/if}
                        </div>

                    </div>
                </div>
            {/foreach}

            <!-- Pagination Bottom -->
            {if isset($PAGINATION)}
                <div style="margin-top: 20px; margin-bottom: 20px;">{$PAGINATION}</div>
            {/if}

            <!-- Quick Reply -->
            {if isset($CAN_REPLY)}
                <div class="quick-reply-card">
                    <h3 style="margin-top:0;">Leave a Reply</h3>
                    <form action="" method="post">
                        {if isset($TOKEN)}<input type="hidden" name="token" value="{$TOKEN}">{/if}
                        <div class="field">
                            <textarea name="content" id="quickreply" style="width:100%; min-height:150px; border-radius:12px; padding:15px; border:1px solid #ddd;"></textarea>
                        </div>
                        <button type="submit" class="ui primary button" style="margin-top:15px;">
                            <i class="fa fa-paper-plane"></i> Post Reply
                        </button>
                    </form>
                </div>
            {else}
                <div class="ui info message">
                    <i class="info circle icon"></i> You must log in to reply.
                </div>
            {/if}

        </div>
        
        <!-- Sidebar Widget (FIXED ERROR) -->
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
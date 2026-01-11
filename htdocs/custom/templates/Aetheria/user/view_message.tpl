{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            <a href="./index.php?route=/user/settings" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> {$SETTINGS}</a>
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item active"><div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> {$MESSAGING}</a>
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> {$ALERTS}</a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <!-- Chat Header -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                <h1 class="usercp-title" style="margin:0; border:none; padding:0;">
                    {$MESSAGE_TITLE}
                </h1>
                
                <div class="chat-actions-top">
                    <a href="{$BACK_LINK}" class="ui button mini basic">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    {if isset($LEAVE_CONVERSATION_LINK)}
                    <a href="{$LEAVE_CONVERSATION_LINK}" class="ui button mini negative basic" onclick="return confirm('{$CONFIRM_LEAVE}');">
                        <i class="fa fa-sign-out-alt"></i> Leave
                    </a>
                    {/if}
                </div>
            </div>

            <!-- Chat Container -->
            <div class="chat-container">
                {foreach from=$MESSAGES item=message}
                    
                    <!-- Logica Sent/Received -->
                    <div class="chat-bubble {if $message.user_id == $LOGGED_IN_USER.id}sent{else}received{/if}">
                        
                        <!-- Avatar (Only if received) -->
                        {if $message.user_id != $LOGGED_IN_USER.id}
                            <a href="{$message.profile_link}">
                                <img src="{$message.author_avatar}" style="width:35px; height:35px; border-radius:50%; margin-right:10px; align-self:flex-end;">
                            </a>
                        {/if}

                        <div class="bubble-inner">
                            <div class="chat-text forum_post">
                                {$message.content}
                            </div>
                            <div class="chat-meta">
                                <a href="{$message.profile_link}" style="color:inherit; font-weight:bold;">{$message.author_username}</a> &bull; {$message.date}
                            </div>
                        </div>

                    </div>

                {/foreach}
            </div>

            <div class="ui divider" style="margin-top: 30px;"></div>

            <!-- Risposta Rapida -->
            <form action="" method="post" class="ui form chat-reply-box">
                <div class="field">
                    <textarea name="content" placeholder="Scrivi una risposta..." rows="3"></textarea>
                </div>
                <input type="hidden" name="token" value="{$TOKEN}">
                <button type="submit" class="ui primary button">
                    <i class="fa fa-paper-plane"></i> Send Reply
                </button>
            </form>

        </div>

    </div>

</div>

{include file='footer.tpl'}
{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR (Menu) -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            <a href="./index.php?route=/user/settings" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> {$SETTINGS}</a>
            
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item active"><div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> {$MESSAGING}</a>
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> {$ALERTS}</a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <!-- TITLE AND NEW BUTTON -->
            <div style="display:flex; flex-direction:column; align-items:flex-start; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                {if isset($NEW_MESSAGE_LINK)}
                    <a href="{$NEW_MESSAGE_LINK}" class="ui primary button tiny">
                        <i class="fa fa-pen"></i> New Message
                    </a>
                {/if}
                {if isset($VIEWING_MESSAGE)}
                    <h1 class="usercp-title" style="margin:0; border:none; padding:0;">
                        {$MESSAGE_TITLE}
                    </h1>
                {/if}
            </div>

            {if isset($SUCCESS)}<div class="ui success message">{$SUCCESS}</div>{/if}
            {if isset($ERRORS)}<div class="ui error message">{foreach from=$ERRORS item=error}<li>{$error}</li>{/foreach}</div>{/if}

            <!-- 1. LIST VIEW (INBOX) -->
            {if !isset($VIEWING_MESSAGE)}
                
                {if count($MESSAGES)}
                    <div class="message-list">
                        {foreach from=$MESSAGES item=message}
                            <a href="{$message.link}" class="message-list-item {if $message.unread}unread{/if}">
                                <!-- Avatar ultimo mittente -->
                                <img src="{$message.last_message_user_avatar}" class="msg-avatar" alt="User">
                                
                                <div class="msg-content">
                                    <div class="msg-title"><strong>{$message.title}</strong></div>
                                    <div class="msg-preview">
                                        Last by: <strong>{$message.last_message_user}</strong>
                                    </div>
                                </div>
                                
                                <div class="msg-date">
                                    {$message.last_message_date}
                                </div>
                            </a>
                        {/foreach}
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        {$PAGINATION}
                    </div>
                {else}
                    <div class="ui info message">{$NO_MESSAGES}</div>
                {/if}

            <!-- 2. CONVERSATION VIEW (CHAT) -->
            {else}
                
                <div class="chat-actions" style="margin-bottom: 20px;">
                    <a href="./index.php?route=/user/messaging" class="ui button mini basic">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <!-- Add Leave button if available in $LEAVE_CONVERSATION_LINK -->
                </div>

                <div class="chat-container">
                    {foreach from=$MESSAGES item=message}
                        
                        <!-- Sent/Received Logic: If the author is me, it's sent -->
                        <div class="chat-bubble {if $message.user_id == $LOGGED_IN_USER.id}sent{else}received{/if}">
                            
                            <!-- If received, show small avatar -->
                            {if $message.user_id != $LOGGED_IN_USER.id}
                                <img src="{$message.author_avatar}" style="width:30px; height:30px; border-radius:50%; margin-right:10px; align-self:center;">
                            {/if}

                            <div>
                                <div class="chat-text">{$message.content}</div>
                                <div class="chat-meta">{$message.date}</div>
                            </div>

                        </div>

                    {/foreach}
                </div>

                <div class="ui divider"></div>

                <!-- Risposta Rapida -->
                <form action="" method="post" class="ui form chat-reply-box">
                    <div class="field">
                        <textarea name="content" placeholder="Write a reply..." rows="3"></textarea>
                    </div>
                    <input type="hidden" name="token" value="{$TOKEN}">
                    <button type="submit" class="ui primary button">
                        <i class="fa fa-paper-plane"></i> Send
                    </button>
                </form>

            {/if}

        </div>

    </div>

</div>

{include file='footer.tpl'}
{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">
    
    <!-- PROFILE CARD -->
    <div class="ui segment profile-main-card">
        
        <!-- Banner Sfondo -->
        <div class="profile-cover-banner" style="background-image: url('{$COVER}');">
            
            <!-- 
               <!-- SETTINGS BUTTON (Direct Link) -->
            {if isset($LOGGED_IN) && isset($LOGGED_IN_USER) && $NICKNAME == $LOGGED_IN_USER.username}
                <a href="index.php?route=/user/settings" class="profile-settings-btn" style="z-index: 10;">
                    <i class="fa fa-cog"></i> Settings
                </a>
            {/if}

        </div>
        
        <!-- Contenuto Header -->
        <div class="profile-header-content">
            <!-- Avatar -->
            <img src="{$AVATAR}" class="profile-avatar-large" alt="{$NICKNAME}">
            
            <!-- Name and Role -->
            <h1 class="profile-username" style="color: {$USERNAME_COLOUR}">{$NICKNAME}</h1>
            <div class="profile-role-badge">{$USER_TITLE}</div>
            
            <!-- Statistiche -->
            <div class="profile-stats-grid">
                <div class="stat-box">
                    <span class="stat-value">{$REGISTERED}</span>
                    <span class="stat-label">Joined</span>
                </div>
                <div class="stat-box">
                    <span class="stat-value">{$LAST_SEEN}</span>
                    <span class="stat-label">Seen</span>
                </div>
                <div class="stat-box">
                    <span class="stat-value">{$PROFILE_VIEWS}</span>
                    <span class="stat-label">Views</span>
                </div>
            </div>

            <!-- Actions (Friendship / Message) - Visible only if NOT you -->
            {if isset($LOGGED_IN) && $NICKNAME != $LOGGED_IN_USER.username}
                <div class="profile-actions" style="margin-top: 20px;">
                    {if isset($ADD_FRIEND) || isset($REMOVE_FRIEND)}
                        <form action="" method="post" style="display:inline;">
                            <input type="hidden" name="token" value="{$TOKEN}">
                            <input type="hidden" name="action" value="{if isset($ADD_FRIEND)}add_friend{else}remove_friend{/if}">
                            <button type="submit" class="ui button {if isset($ADD_FRIEND)}positive{else}negative{/if}">
                                {if isset($ADD_FRIEND)}{$ADD_FRIEND}{else}{$REMOVE_FRIEND}{/if}
                            </button>
                        </form>
                    {/if}
                    {if isset($SEND_MESSAGE)}
                        <a href="{$SEND_MESSAGE_LINK}" class="ui button primary">
                            <i class="fa fa-envelope"></i> {$SEND_MESSAGE}
                        </a>
                    {/if}
                </div>
            {/if}
        </div>

        <!-- TABS NAVIGATON -->
        <div class="profile-tabs-container">
            <div class="ui top attached tabular menu profile-tabs">
                {foreach from=$TABS key=key item=tab}
                    
                    {* MODIFICATION: HIDE FORUM TAB *}
                    {if $key == 'forum' || $tab.title == 'Forum'}{continue}{/if}

                    <a class="item{if $tab.active} active{/if}" data-tab="{$key}">{$tab.title}</a>
                {/foreach}
            </div>
        </div>

        <!-- TABS CONTENT -->
        <div class="profile-content-area">
            {foreach from=$TABS key=key item=tab}
                
                {* MODIFICATION: HIDE FORUM CONTENT *}
                {if $key == 'forum' || $tab.title == 'Forum'}{continue}{/if}

                <div class="ui bottom attached tab segment {if $tab.active} active{/if}" data-tab="{$key}">
                    {include file=$tab.include}
                </div>
            {/foreach}
        </div>

    </div>
    
</div>

<!-- Modal Block User -->
{if isset($LOGGED_IN)}
    {if isset($MOD_OR_ADMIN)}
        <div class="ui modal" id="modal-block">
            <div class="header">{$BLOCK_USER}</div>
            <div class="content">
                <form class="ui form" action="" method="post">
                    <div class="field">
                        <label>{$REASON}</label>
                        <input type="text" name="reason">
                    </div>
                    <input type="hidden" name="token" value="{$TOKEN}">
                    <input type="hidden" name="action" value="block">
                    <input type="submit" class="ui primary button" value="{$SUBMIT}">
                </form>
            </div>
        </div>
    {/if}
{/if}

{include file='footer.tpl'}
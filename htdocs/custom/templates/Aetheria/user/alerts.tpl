{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            <a href="./index.php?route=/user/settings" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> {$SETTINGS}</a>
            
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> {$MESSAGING}</a>
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item active"><div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> {$ALERTS}</a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <div style="display:flex; flex-direction:column; align-items:flex-start; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                {if isset($DELETE_ALL_LINK)}
                    <a href="{$DELETE_ALL_LINK}" class="ui button tiny negative basic" onclick="return confirm('Are you sure?');">
                        <i class="fa fa-trash"></i> Delete All
                    </a>
                {/if}
            </div>

            {if count($ALERTS_LIST)}
                
                <div class="alerts-list">
                    {foreach from=$ALERTS_LIST item=alert}
                        <a href="{$alert.view_link}" class="alert-item {if $alert.read == 0}unread{/if}">
                            
                            <!-- Icon (Dynamic if possible, otherwise bell) -->
                            <div class="alert-icon">
                                <i class="fa fa-bell"></i> 
                                <!-- If Nameless passed the author's avatar here it would be great, but by default it doesn't -->
                            </div>

                            <div class="alert-content">
                                <div class="alert-text">
                                    {$alert.content}
                                </div>
                                <div class="alert-meta">
                                    <i class="fa fa-clock"></i> {$alert.date}
                                    {if $alert.read == 0}
                                        <span class="ui label mini red basic">NEW</span>
                                    {/if}
                                </div>
                            </div>

                            <!-- Freccetta -->
                            <div class="alert-action">
                                <i class="fa fa-chevron-right"></i>
                            </div>

                        </a>
                    {/foreach}
                </div>
                
                <!-- Tasto "Segna tutti come letti" -->
                {if isset($READ_ALL_LINK)}
                    <div style="margin-top: 20px; text-align: right;">
                        <a href="{$READ_ALL_LINK}" class="ui button primary small">
                            <i class="fa fa-check-double"></i> Mark all as read
                        </a>
                    </div>
                {/if}

            {else}
                <div class="ui info message">
                    {$NO_ALERTS}
                </div>
            {/if}

        </div>

    </div>

</div>

{include file='footer.tpl'}
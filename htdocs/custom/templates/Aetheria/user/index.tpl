{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR (Menu) -->
        <div class="usercp-sidebar">
            
            <div class="usercp-menu-header">Account</div>
            
            <!-- Link Overview (Attivo) -->
            <a href="{$USER_CP_LINK}" class="usercp-menu-item active">
                <div class="usercp-menu-icon"><i class="fa fa-home"></i></div>
                Overview
            </a>

            <!-- Link Settings -->
            <a href="{$DETAILS_LINK}" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div>
                {$DETAILS}
            </a>

            <!-- Link Sicurezza -->
            <a href="{$SECURITY_LINK}" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-lock"></i></div>
                Security
            </a>

            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            
            <a href="{$MESSAGING_LINK}" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div>
                {$MESSAGING}
            </a>
            
            <a href="{$ALERTS_LINK}" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-bell"></i></div>
                {$ALERTS}
            </a>

        </div>

        <!-- CONTENT (Overview) -->
        <div class="usercp-content">
            
            <h1 class="usercp-title">{$OVERVIEW}</h1>

            {if isset($SUCCESS)}
                <div class="ui success message">{$SUCCESS}</div>
            {/if}
            {if isset($ERRORS)}
                <div class="ui error message">
                    {foreach from=$ERRORS item=error}<li>{$error}</li>{/foreach}
                </div>
            {/if}

            <!-- Info Grid -->
            <div class="ui stackable grid">
                
                <div class="eight wide column">
                    <div class="ui segment" style="background: rgba(0,0,0,0.05);">
                        <h3 class="ui header">{$USER_DETAILS}</h3>
                        <div class="ui list">
                            <div class="item">
                                <span style="opacity:0.6;">Username:</span> 
                                <strong>{$NICKNAME}</strong>
                            </div>
                            <div class="item">
                                <span style="opacity:0.6;">Group:</span> 
                                <strong>{$USER_GROUP}</strong>
                            </div>
                            <div class="item">
                                <span style="opacity:0.6;">Registered:</span> 
                                <strong>{$REGISTER_DATE}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="eight wide column">
                    <!-- If there are other user widgets, they go here -->
                </div>

            </div>

        </div>

    </div>

</div>

{include file='footer.tpl'}
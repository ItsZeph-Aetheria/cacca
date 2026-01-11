<!-- DYNAMIC ISLAND CONTAINER -->
<div class="dynamic-island-container">
    <div id="dynamic-island" class="dynamic-island">
        <i class="island-icon fa fa-check-circle"></i>
        <span class="island-content">Action Successful</span>
    </div>
</div>



<!-- HIDDEN FLASH MESSAGES -->
{if isset($HOME_SESSION_FLASH)}
    <div id="hidden-session-flash" style="display:none;" data-type="success">{$HOME_SESSION_FLASH|strip_tags}</div>
{/if}
{if isset($ERRORS)}
    <div id="hidden-session-flash" style="display:none;" data-type="error">
        {foreach from=$ERRORS item=error}{$error|strip_tags}{/foreach}
    </div>
{/if}


<!-- NAVBAR -->
<nav class="aetheria-navbar">
    <div class="nav-container">
        
        <!-- 1. LOGO -->
        <a href="{$SITE_HOME}" class="nav-logo">
            {if isset($LOGO_IMAGE)}
                <img src="{$LOGO_IMAGE}" alt="{$SITE_NAME}" style="max-height: 38px; margin-right: 10px;">
            {/if}
            {$SITE_NAME}
        </a>

        <!-- 2. LINKS (Desktop) -->
        <div class="nav-links desktop-only">
            {foreach from=$NAV_LINKS key=name item=item}
                
                {* Nascondiamo il link Forum originale *}
                {if $name == 'forum' || $item.title == 'Forum' || $name == 'members' || $item.title == 'Members'}{continue}{/if} 

                {if isset($item.items)}
                    <!-- Dropdown Links -->
                    <div class="ui dropdown item nav-item">
                        <span>{$item.icon} {$item.title}</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            {foreach from=$item.items item=dropdown}
                                <a class="item" href="{$dropdown.link}" target="{$dropdown.target}">
                                    {$dropdown.icon} {$dropdown.title}
                                </a>
                            {/foreach}
                        </div>
                    </div>
                {else}
                    <!-- Normal Links -->
                    <a href="{$item.link}" target="{$item.target}" class="nav-item {if isset($item.active)}active{/if}">
                        {$item.icon} {$item.title}
                    </a>
                {/if}
            {/foreach}
        </div>

        <!-- 3. ACTIONS (User & Toggle) -->
        <div class="nav-actions">
            
            

            <!-- iOS Theme Switch -->
            <label class="ios-switch" title="Toggle Dark Mode">
                <input type="checkbox" id="theme-switch-toggle">
                <span class="slider"></span>
            </label>

            <!-- 
               LOGICA UTENTE
               Controlliamo se esiste la variabile utente e se non è vuota.
            -->
            {if isset($LOGGED_IN_USER) && !empty($LOGGED_IN_USER)}
                
                <!-- UTENTE LOGGATO -->
                <div class="user-dropdown-wrapper" style="position: relative;">
                    <div class="user-btn" onclick="toggleUserDropdown()">
                        <img src="{$LOGGED_IN_USER.avatar}" alt="{$LOGGED_IN_USER.username}" class="user-avatar">
                        <span class="desktop-only" style="margin-left: 5px; font-weight: bold;">{$LOGGED_IN_USER.username}</span>
                        <i class="fa fa-chevron-down" style="font-size: 0.7rem; margin-left: 5px; opacity: 0.6;"></i>
                    </div>

                    <!-- Menu a tendina -->
                    <div id="user-dropdown-menu" class="custom-dropdown">
                        <div class="dropdown-header">Account</div>
                        <a href="{$LOGGED_IN_USER.profile}" class="dropdown-item">
                            <i class="fa fa-user-circle"></i> {$LOGGED_IN_USER.username}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{$MESSAGING_LINK}" class="dropdown-item">
                            <i class="fa fa-envelope"></i> Messages
                            {if isset($MESSAGING_COUNT) && $MESSAGING_COUNT > 0}
                                <span class="dropdown-badge">{$MESSAGING_COUNT}</span>
                            {/if}
                        </a>
                        <a href="{$ALERTS_LINK}" class="dropdown-item">
                            <i class="fa fa-bell"></i> Alerts
                            {if isset($ALERTS_COUNT) && $ALERTS_COUNT > 0}
                                <span class="dropdown-badge">{$ALERTS_COUNT}</span>
                            {/if}
                        </a>
                        
                        {if isset($PANEL_LINK)}
                            <div class="dropdown-divider"></div>
                            <a href="{$PANEL_LINK}" target="_blank" class="dropdown-item" style="color: var(--primary-accent);">
                                <i class="fa fa-tachometer-alt"></i> Admin Panel
                            </a>
                        {/if}
                        
                        <div class="dropdown-divider"></div>
                        <a href="./index.php?route=/logout" class="dropdown-item" style="color: #ff3b30;">
                            <i class="fa fa-sign-out-alt"></i> Log Out
                        </a>
                    </div>
                </div>

            {else}
                
                <!-- GUEST: MANUAL LINKS FOR LOCALHOST -->
                
                <a href="./index.php?route=/login" class="nav-item" style="font-weight: bold;">
                    Login
                </a>

                <a href="./index.php?route=/register" class="nav-item" 
                   style="background: var(--primary-accent); color: white !important; opacity: 1; padding: 6px 18px; border-radius: 50px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
                    Register
                </a>

            {/if}
        </div>

    </div>
</nav>

<!-- BANNER -->
{if isset($BANNER_IMAGE)}
    <div class="ui container banner-container" style="margin-top: 1.5rem; width: 95%; max-width: 1100px;">
        <img src="{$BANNER_IMAGE}" alt="Banner" class="banner-image" style="width: 100%; border-radius: var(--radius-squircle);">
    </div>
{/if}

<!-- MESSAGGI GLOBALI -->
<div class="ui container global-messages" style="margin-top: 1rem; width: 95%; max-width: 1100px;">
    {if isset($MUST_VALIDATE_ACCOUNT)}
        <div class="ui message icon warning" style="border-radius: var(--radius-btn);">
            <i class="exclamation triangle icon"></i>
            <div class="content">{$MUST_VALIDATE_ACCOUNT}</div>
        </div>
    {/if}
</div>
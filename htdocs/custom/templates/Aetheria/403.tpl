{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">
    <div class="error-page-container">
        
        <!-- Icona Lucchetto -->
        <div class="error-icon" style="color: #e74c3c;"> <!-- Red for danger -->
            <i class="fa fa-lock"></i>
        </div>

        <h1 class="error-title">403</h1>
        <h2 class="error-subtitle">{$403_TITLE}</h2>
        
        <p class="error-desc">
            {$403_CONTENT}
            <br>It looks like you don't have access to this Page.
            <br>If you believe this to be an error, Contact the Staff on Discord.
        </p>

        <div style="display: flex; gap: 15px; justify-content: center;">
            <a href="{$SITE_HOME}" class="ui primary button large">
                <i class="fa fa-home"></i> Back to Home
            </a>
            
            {if !isset($LOGGED_IN_USER)}
                <a href="{$LOGIN_URL}" class="ui secondary button large">
                    <i class="fa fa-sign-in-alt"></i> Login
                </a>
            {/if}
        </div>

    </div>
</div>

{include file='footer.tpl'}
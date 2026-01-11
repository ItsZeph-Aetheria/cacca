{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">
    <div class="error-page-container">
        
        <!-- Immagine o Icona Grande -->
        <div class="error-icon">
            <i class="fa fa-map-signs"></i> <!-- O usa <img> -->
        </div>

        <h1 class="error-title">404</h1>
        <h2 class="error-subtitle">{$404_TITLE}</h2>
        
        <p class="error-desc">
            {$404_CONTENT}
            <br>It looks like you got lost in the Void of the End.
        </p>

        <a href="{$SITE_HOME}" class="ui primary button large">
            <i class="fa fa-home"></i> Back to Home
        </a>

    </div>
</div>

{include file='footer.tpl'}
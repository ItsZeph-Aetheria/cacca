<!DOCTYPE html>
<html lang="{if isset($HTML_LANG)}{$HTML_LANG}{else}en{/if}" {if isset($HTML_RTL) && $HTML_RTL eq true} dir="rtl" {/if}>
<head>
    <meta charset="{if isset($CHARS)}{$CHARS}{else}utf-8{/if}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{$TITLE} &bull; {$SITE_NAME}</title>
    
    <!-- CSS FIXATO -->
    {foreach from=$TEMPLATE_CSS item=css}
        {$css}
    {/foreach}
    
    <!-- Also load our aetheria.css manually if the loop doesn't load it -->
    <link rel="stylesheet" href="/custom/templates/Aetheria/css/aetheria.css?v=maintenance">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body id="page-maintenance">

    <!-- RIMOSSO .ui.container CHE SPOSTAVA A SINISTRA -->
    
    <!-- MAINTENANCE CARD -->
    <div class="maintenance-box">
        
        <div class="maintenance-icon">
            <i class="fa fa-tools"></i>
        </div>

        <h1 class="maintenance-title">{$MAINTENANCE_TITLE}</h1>
        
        <div class="maintenance-message">
            {$MAINTENANCE_MESSAGE}
        </div>

        <div class="ui divider" style="opacity: 0.2; margin: 30px 0;"></div>

        <div class="maintenance-actions">
            <button class="ui primary button large" onclick="window.location.reload()">
                <i class="fa fa-sync-alt"></i> Riprova
            </button>
            
            <a href="{$LOGIN_LINK}" class="ui secondary button large">
                <i class="fa fa-user-shield"></i> Admin Login
            </a>
        </div>

    </div>

</body>
</html>
{* 
   =================================================================
   CONFIGURAZIONE ARTICOLI
   =================================================================
   NUOVO PARAMETRO: "type" => "news" oppure "guide"
*}

{assign var="ARTICLE_CONFIG" value=[

    "Article: Breaking News: Aetheria is Opening!" => [
        "type"     => "news",
        "date"     => "05 Jan 2026",
        "img"      => "https://wallpapers.com/images/hd/minecraft-ender-dragon-4k-7209-x-4374-9k32s0d1f8.jpg",
        "bg_light" => "linear-gradient(135deg, #f5f7fa, #c3cfe2)",
        "bg_dark"  => "linear-gradient(135deg, #0f2027, #203a43, #2c5364)"
    ],

    "Article: Getting Started" => [
        "type"     => "guide",
        "date"     => "12 Feb 2026",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2023/10/Realm_Guide.jpg", 
        "bg_light" => "#f9ff9e",
        "bg_dark"  => "#b8bb03"
    ],

    "Article: LifeSteal Mechanics" => [
        "type"     => "guide",
        "date"     => "12 Feb 2026",
        "img"      => "https://lifesteal-network.ghost.io/content/images/2024/01/wgwgewe.png", 
        "bg_light" => "#ff9e9e",
        "bg_dark"  => "#ff4949"
    ],

    "Article: Economy and Shop" => [
        "type"     => "guide",
        "date"     => "12 Feb 2026",
        "img"      => "https://lifesteal-network.ghost.io/content/images/2024/01/gwwse.png", 
        "bg_light" => "#ffe09e",
        "bg_dark"  => "#facf0f"
    ],

    "Article: Proximity Chat" => [
        "type"     => "guide",
        "date"     => "12 Feb 2026",
        "img"      => "https://lifesteal-network.ghost.io/content/images/2024/02/fregerghreugh.png", 
        "bg_light" => "#ffcd9e",
        "bg_dark"  => "#d88b4d"
    ],
    "Article: Rules" => [
        "type"     => "guide",
        "date"     => "12 Feb 2026",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/10/Rules_Guide.jpg", 
        "bg_light" => "#a6ff9e",
        "bg_dark"  => "#83d16b"
    ],
    "Article: FarLands" => [
        "type"     => "guide",
        "date"     => "12 Feb 2026",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/06/Adventure_World_Guide.jpg", 
        "bg_light" => "#daa156",
        "bg_dark"  => "#c27644"
    ],
    "Article: Join the Discord !" => [
        "type"     => "news",
        "date"     => "10 Jan 2026",
        "img"      => "https://static-www.adweek.com/wp-content/uploads/2021/07/DiscordLogo.jpg?w=890", 
        "bg_light" => "#a0c8f5",
        "bg_dark"  => "#82a5f0"
    ]                        

]}

{* Recupera config *}
{assign var="CURRENT_ART" value=$ARTICLE_CONFIG[$TITLE]|default:null}


{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <!-- BOX ARTICOLO -->
    <div class="article-container"
         style="{if $CURRENT_ART}
                    {if isset($CURRENT_ART.bg_light)}--art-bg-light: {$CURRENT_ART.bg_light};{/if}
                    {if isset($CURRENT_ART.bg_dark)}--art-bg-dark: {$CURRENT_ART.bg_dark};{/if}
                {/if}">
        
        <!-- Immagine Copertina -->
        {if $CURRENT_ART && isset($CURRENT_ART.img) && $CURRENT_ART.img != ''}
            <img src="{$CURRENT_ART.img}" class="article-hero-image" alt="Cover">
        {/if}

        <!-- Navigazione DINAMICA -->
        <div class="article-nav">
            
            {* LOGICA INDIETRO *}
            {if $CURRENT_ART && isset($CURRENT_ART.type) && $CURRENT_ART.type == 'guide'}
                <a href="./index.php?route=/guides" class="back-btn">
                    <i class="fa fa-arrow-left"></i> Back to Guides
                </a>
            {else}
                <a href="./index.php?route=/news" class="back-btn">
                    <i class="fa fa-arrow-left"></i> Back to News
                </a>
            {/if}
            
            <!-- Data -->
            <div class="article-date">
                <i class="fa fa-clock"></i> 
                {if $CURRENT_ART && isset($CURRENT_ART.date)}
                    {$CURRENT_ART.date}
                {else}
                    Oggi
                {/if}
            </div>
        </div>

        <!-- Titolo -->
        <h1 class="article-title">
            {$TITLE|replace:'Article:':''}
        </h1>

        <div class="ui divider"></div>

        <!-- CONTENUTO -->
        <div class="article-content forum_post">
            {$CONTENT}
        </div>

        <!-- Footer -->
        <div class="article-footer">
            <p>Any questions ? Ask for support on Discord!</p>
            <a href="https://discord.gg/CEPyDKM2" target="_blank" class="ui button primary">
                <i class="fab fa-discord"></i> Join Discord
            </a>
        </div>

    </div>

</div>

{include file='footer.tpl'}
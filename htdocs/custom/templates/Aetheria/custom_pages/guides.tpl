{* 
   =================================================================
   GUIDES CONFIGURATION
   =================================================================
   
   img:      Link to square image (e.g. Minecraft icon or render)
   bg_light: Colore sfondo card (Light Mode). Lascia "" per default.
   bg_dark:  Colore sfondo card (Dark Mode). Lascia "" per default.
   link:     Page path (e.g. ./index.php?route=/news/...)
*}

{assign var="GUIDES_LIST" value=[
    
    [
        "title"    => "Getting Started",
        "desc"     => "The first steps on Aetheria: general guide",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2023/10/Realm_Guide.jpg",
        "link"     => "./index.php?route=/guides/getting-started",
        "bg_light" => "#bbdefb",
        "bg_dark"  => "#D1C300"
    ],

    [
        "title"    => "LifeSteal Mechanics",
        "desc"     => "What is LifeSteal and how does it work on Aetheria.",
        "img"      => "https://lifesteal-network.ghost.io/content/images/2024/01/wgwgewe.png",
        "link"     => "./index.php?route=/guides/lifesteal",
        "bg_light" => "#ffebee",
        "bg_dark"  => "#b71c1c"
    ],

    [
        "title"    => "Economy & Shop",
        "desc"     => "Everything you have to know about Economy, Auction House and Player Shops !",
        "img"      => "https://lifesteal-network.ghost.io/content/images/2024/01/gwwse.png",
        "link"     => "./index.php?route=/guides/economy",
        "bg_light" => "#fff8e1",
        "bg_dark"  => "#f57f17"
    ],

    [
        "title"    => "Proximity Chat",
        "desc"     => "How to use proximity chat to speak in-game",
        "img"      => "https://lifesteal-network.ghost.io/content/images/2024/02/fregerghreugh.png",
        "link"     => "./index.php?route=/guides/voice-chat",
        "bg_light" => "#f3e5f5",
        "bg_dark"  => "#F55B18"
    ],

    [
        "title"    => "Server Rules",
        "desc"     => "All the rules you need to follow to avoid getting BANNED!",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/10/Rules_Guide.jpg",
        "link"     => "./index.php?route=/rules",
        "bg_light" => "",
        "bg_dark"  => "#51C458"
    ],

[
        "title"    => "Farlands",
        "desc"     => "How do the FarLands work on our server ?",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/06/Adventure_World_Guide.jpg",
        "link"     => "./index.php?route=/guides/farlands",
        "bg_light" => "",
        "bg_dark"  => "#C47D51"
    ]


]}

{* ================================================================= *}

{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <!-- HEADER -->
    <div class="news-header-box">
        <h1 class="ui header" style="font-size: 3rem; margin-bottom: 10px; margin-top: 0;">
            Wiki & Guide
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.8; max-width: 700px; margin: 0 auto;">
            All the knowledge of {$SITE_NAME} in one place.
        </p>
    </div>

    <!-- GUIDES GRID -->
    <div class="guides-index-grid">
        
        {foreach from=$GUIDES_LIST item=guide}
            <a href="{$guide.link}" class="guide-index-card"
               style="{if $guide.bg_light}--guide-bg-light: {$guide.bg_light};{/if}
                      {if $guide.bg_dark}--guide-bg-dark: {$guide.bg_dark};{/if}">
                
                <!-- Immagine Quadrata -->
                <img src="{$guide.img}" class="guide-card-img" alt="Icon">

                <!-- Text -->
                <div class="guide-card-content">
                    <h3 class="guide-card-title">{$guide.title}</h3>
                    <p class="guide-card-desc">{$guide.desc}</p>
                </div>

                <!-- Freccia -->
                <div class="guide-card-arrow">
                    <i class="fa fa-chevron-right"></i>
                </div>

            </a>
        {/foreach}

    </div>

    <div style="height: 50px;"></div>

</div>

{include file='footer.tpl'}
{* 
   =================================================================
   NEWS CONFIGURATION
   =================================================================
   
   bg_light: Background color when the site is LIGHT (text will be dark)
   bg_dark:  Background color when the site is DARK (text will be white)
   
   You can use gradients or solid colors.
   If left empty (""), it will use the theme's standard color.
*}

{assign var="CUSTOM_NEWS" value=[
    
    [
        "title"    => "Breaking News: Aetheria is Opening !",
        "date"     => "12 Feb 2026",
        "img"      => "https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2025/01/anniversary_blog-2.jpg",
        "desc"     =>"Aetheria, Be ready to explore distorted generation, ancient temples, fight for your live against Custom Bosses and much more ! For more info, read the full post by clicking on READ MORE below.",
        "link"     => "./index.php?route=/news/opening",
        "tag"      => "NEWS",
        "color"    => "blue",
        "bg_light" => "#f49cbb",
        "bg_dark"  => "#dd2d4a" 
    ],

    [
        "title"    => "Join the discord Community !",
        "date"     => "10 Jan 2026",
        "img"      => "https://static-www.adweek.com/wp-content/uploads/2021/07/DiscordLogo.jpg?w=890",
        "desc"     => "Join the Discord of Aetheria to get fully in touch with Staff and Members !",
        "link"     => "./index.php?route=/news/discord",
        "tag"      => "NEWS",
        "color"    => "blue",
        "bg_light" => "#a0c8f5",
        "bg_dark"  => "#82a5f0" 
    ]

]}

{* ================================================================= *}

{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <!-- Header Box -->
    <div class="news-header-box">
        <h1 class="ui header" style="font-size: 3rem; margin-bottom: 10px; margin-top: 0;">
            Latest News
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.8; max-width: 700px; margin: 0 auto;">
           Remain updated on everything that happens on {$SITE_NAME}!
        </p>
    </div>

    <!-- NEWS GRID -->
    <div class="updates-grid">
        
        {foreach from=$CUSTOM_NEWS item=news}
            <!-- Iniettiamo le variabili CSS custom -->
            <a href="{$news.link}" class="update-card" 
               style="{if $news.bg_light}--news-bg-light: {$news.bg_light};{/if} {if $news.bg_dark}--news-bg-dark: {$news.bg_dark};{/if}">
                
                <!-- Immagine -->
                <div class="update-thumb" style="background-image: url('{$news.img}');">
                    <div class="update-tag-float">
                        <span class="ui label {$news.color}">{$news.tag}</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="update-content">
                    <div class="update-meta">
                        <span style="color: var(--primary-accent); font-weight:bold;">
                            <i class="fa fa-calendar"></i> {$news.date}
                        </span>
                    </div>

                    <div class="update-title">
                        {$news.title}
                    </div>

                    <div class="update-excerpt">
                        {$news.desc}
                    </div>

                    <div class="update-footer">
                        <span style="font-weight:bold; opacity: 0.8; font-size:0.9rem;">
                            Read More &rarr;
                        </span>
                    </div>
                </div>
            </a>
        {/foreach}

    </div>

    <div style="height: 50px;"></div>

</div>

{include file='footer.tpl'}
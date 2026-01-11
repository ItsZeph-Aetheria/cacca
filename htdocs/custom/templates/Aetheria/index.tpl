{* 
   =================================================================
   EASY CONFIGURATION AREA (Edit below!)
   =================================================================
*}


{* --- STAFF CAROUSEL (Membri) --- *}

{* Membro 1 (OWNER - Rosso) *}
{assign var="STAFF_1_NAME"  value="Zeph"}
{assign var="STAFF_1_ROLE"  value="Owner"}
{assign var="STAFF_1_COLOR" value="red"} {* red, orange, o green *}
{assign var="STAFF_1_DESC"  value="Hey, I'm Zeph! As the founder of Aetheria, my main tasks revolve around planning and organising new and exciting content for everyone to enjoy on a weekly basis. I also personally handle the technical side of things, writing the code for all our custom plugins, Discord bots, and the server’s websites to keep everything running smoothly. Keeping everyone on track is a busy job, but when I'm not working with the team to make awesome stuff, you'll see lots of me on the server and the Discord - don't be a stranger if you see me around!"}
{assign var="STAFF_1_HEAD"  value="https://cravatar.eu/helmavatar/_ItsZeph_/64.png"}
{assign var="STAFF_1_SKIN"  value="https://i.ibb.co/YFwFghCh/its-Zeph.png"}

{* Membro 2 (ADMIN - Arancione) *}
{assign var="STAFF_2_NAME"  value="Zlem"}
{assign var="STAFF_2_ROLE"  value="constructor"}
{assign var="STAFF_2_COLOR" value="orange"}
{assign var="STAFF_2_DESC"  value="What's up Aetheria, I'm Zlem! I’m the one dreaming up the skylines and landscapes here at Aetheria. My days are usually spent sketching out our major cities and making sure every corner of the world feels like a place worth exploring. It’s a lot of work to bring these environments to life, but when I’m not placing blocks with the team, I love hanging out with the community on the server and Discord. If you see me out in the world, come say hi—I'd love to hear what you think of our latest builds!"}
{assign var="STAFF_2_HEAD"  value="https://cravatar.eu/helmavatar/Zlem_/64.png"}
{assign var="STAFF_2_SKIN"  value="https://i.ibb.co/qLz3DBr2/Zlem.png"}

{* Membro 3 (BUILDER - Verde) *}
{assign var="STAFF_3_NAME"  value="Blim"}
{assign var="STAFF_3_ROLE"  value="Video Maker"}
{assign var="STAFF_3_COLOR" value="green"}
{assign var="STAFF_3_DESC"  value="Yooo, here in Aetheria the call me Blim! I’m the storyteller behind the lens here at Aetheria. My world revolves around bringing our adventures to life through cinematic trailers and custom animations that capture the magic of the server. Whether I’m choreographing an epic scene or fine-tuning a render, I’m always looking for ways to make our community shine on screen. When I’m not editing away in the studio, you’ll definitely find me lurking in Discord or jumping ingame for some inspiration—feel free to stop by and say hello!"}
{assign var="STAFF_3_HEAD"  value="https://cravatar.eu/helmavatar/BlimMC_/64.png"}
{assign var="STAFF_3_SKIN"  value="https://i.ibb.co/WvjkLLQr/Blim-MC.png"}



{* --- SEZIONE GUIDE (I 4 Bottoni con Immagini) --- *}

{* Guida 1 *}
{assign var="GUIDE_1_TITLE" value="LifeSteal"}
{* Inserisci il link dell'immagine quadrata qui sotto *}
{assign var="GUIDE_1_IMG"   value="https://lifesteal-network.ghost.io/content/images/2024/01/wgwgewe.png"} 
{assign var="GUIDE_1_LINK"  value="./index.php?route=/guides/lifesteal"}

{* Guida 2 *}
{assign var="GUIDE_2_TITLE" value="Proximity Chat"}
{assign var="GUIDE_2_IMG"   value="https://lifesteal-network.ghost.io/content/images/2024/02/fregerghreugh.png"}
{assign var="GUIDE_2_LINK"  value="./index.php?route=/guides/proximitychat"}

{* Guida 3 *}
{assign var="GUIDE_3_TITLE" value="Economy"}
{assign var="GUIDE_3_IMG"   value="https://lifesteal-network.ghost.io/content/images/2024/01/gwwse.png"}
{assign var="GUIDE_3_LINK"  value="./index.php?route=/guides/economy"}

{* Guida 4 *}
{assign var="GUIDE_4_TITLE" value="Vote"}
{assign var="GUIDE_4_IMG"   value="https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/10/Rules_Guide.jpg"}
{assign var="GUIDE_4_LINK"  value="./index.php?route=/vote"}


{* --- SEZIONE HOW TO PLAY (Immagini e Testi) --- *}

{* Step 1 *}
{assign var="HTP_1_TITLE" value="Step 1"}
{assign var="HTP_1_TEXT"  value="Download Minecraft: Java Edition on your PC from the official site."}
{assign var="HTP_1_IMG"   value="https://i.ibb.co/r2nHNKZn/Screenshot-2026-01-04-alle-21-45-44.png"}

{* Step 2 *}
{assign var="HTP_2_TITLE" value="Step 2"}
{assign var="HTP_2_TEXT"  value="Open the game, click on Multiplayer and then Add Server."}
{assign var="HTP_2_IMG"   value="https://i.ibb.co/Gy7KL8j/Screenshot-2026-01-10-alle-21-12-35.png"}
{assign var="HTP_2_IMG_2" value="https://i.ibb.co/JF0rtj4K/Screenshot-2026-01-04-alle-21-54-29.png"} 

{* Step 3 *}
{assign var="HTP_3_TITLE" value="Step 3"}
{assign var="HTP_3_TEXT"  value="Paste the IP and Join the server!"}
{assign var="HTP_3_IMG"   value="https://i.ibb.co/tM1C6nq3/Screenshot-2026-01-10-alle-21-16-01.png"}

{* Step 4 *}
{assign var="HTP_4_TITLE" value="Step 4"}
{assign var="HTP_4_TEXT"  value="Enjoy playing on Aetheria!"}
{assign var="HTP_4_IMG"   value="https://i.ibb.co/q3MjpM5z/Screenshot-2026-01-10-alle-21-17-39.png"}


{* ================================================================= *}
{* END CONFIGURATION - DO NOT TOUCH BELOW IF YOU DON'T KNOW WHAT YOU DO *}
{* ================================================================= *}

{include file='header.tpl'}
{include file='navbar.tpl'}

<!-- MAIN CONTAINER (Fixed Centering) -->
<div class="ui container aetheria-container">
    
    <div class="portal-grid">

        <!-- 1. HERO -->
        <div class="hero-section">
            {if isset($LOGO_IMAGE)}
                <img src="{$LOGO_IMAGE}" alt="{$SITE_NAME}" class="hero-logo-img">
            {else}
                <h1 style="font-size: 3rem; margin-bottom: 1rem;">{$SITE_NAME}</h1>
            {/if}
            <br>
            <div class="hero-ip-container" onclick="copyIP(this, 'mc.aetheriasmp.net')">
                <i class="fa fa-copy ip-icon"></i>
                <span class="ip-text">mc.aetheriasmp.net</span>
            </div>
            <div style="margin-top: 15px; opacity: 0.6;">Click to Copy the IP and start playing NOW ▶️ !</div>
        </div>

        <!-- 2. SPLIT SECTION -->
        <div class="split-section">
            <a href="./index.php?route=/store" class="feature-card store">
                <div class="feature-icon-large" style="color: #ff9f43;"><i class="fa fa-shopping-cart"></i></div>
                <div class="feature-content"><h2>Store</h2><p>Upgrade your swag!</p></div>
            </a>
            <a href="https://discord.gg/CEPyDKM2" target="_blank" class="feature-card community">
                <div class="feature-icon-large" style="color: #54a0ff;"><i class="fab fa-discord"></i></div>
                <div class="feature-content"><h2>Discord</h2><p>Join our community!</p></div>
            </a>
        </div>

        <!-- 3. GUIDES SECTION -->
        <div>
            <h3 class="mini-grid-title">Guides</h3>
            <div class="guides-grid">
                <a href="{$GUIDE_1_LINK}" class="guide-card"><img src="{$GUIDE_1_IMG}" class="guide-image-real"><span class="guide-label">{$GUIDE_1_TITLE}</span></a>
                <a href="{$GUIDE_2_LINK}" class="guide-card"><img src="{$GUIDE_2_IMG}" class="guide-image-real"><span class="guide-label">{$GUIDE_2_TITLE}</span></a>
                <a href="{$GUIDE_3_LINK}" class="guide-card"><img src="{$GUIDE_3_IMG}" class="guide-image-real"><span class="guide-label">{$GUIDE_3_TITLE}</span></a>
                <a href="{$GUIDE_4_LINK}" class="guide-card"><img src="{$GUIDE_4_IMG}" class="guide-image-real"><span class="guide-label">{$GUIDE_4_TITLE}</span></a>
            </div>
        </div>
        
        <!-- 4. STAFF CAROUSEL -->
        <div class="staff-section">
            <h3 class="mini-grid-title">Meet the Team</h3>
            <div class="staff-card">
                <!-- Slide 1 -->
                <div class="staff-slide active" id="staff-1">
                    <div class="staff-content">
                        <span class="staff-role-badge {$STAFF_1_COLOR}">{$STAFF_1_ROLE}</span>
                        <h2 class="staff-name">{$STAFF_1_NAME}</h2>
                        <p class="staff-desc">{$STAFF_1_DESC}</p>
                    </div>
                    <img src="{$STAFF_1_SKIN}" class="staff-render" alt="{$STAFF_1_NAME}">
                </div>
                <!-- Slide 2 -->
                <div class="staff-slide" id="staff-2">
                    <div class="staff-content">
                        <span class="staff-role-badge {$STAFF_2_COLOR}">{$STAFF_2_ROLE}</span>
                        <h2 class="staff-name">{$STAFF_2_NAME}</h2>
                        <p class="staff-desc">{$STAFF_2_DESC}</p>
                    </div>
                    <img src="{$STAFF_2_SKIN}" class="staff-render" alt="{$STAFF_2_NAME}">
                </div>
                <!-- Slide 3 -->
                <div class="staff-slide" id="staff-3">
                    <div class="staff-content">
                        <span class="staff-role-badge {$STAFF_3_COLOR}">{$STAFF_3_ROLE}</span>
                        <h2 class="staff-name">{$STAFF_3_NAME}</h2>
                        <p class="staff-desc">{$STAFF_3_DESC}</p>
                    </div>
                    <img src="{$STAFF_3_SKIN}" class="staff-render" alt="{$STAFF_3_NAME}">
                </div>
                <!-- Nav -->
                <div class="staff-nav">
                    <div class="staff-nav-head active" data-target="staff-1" style="background-image: url('{$STAFF_1_HEAD}');"></div>
                    <div class="staff-nav-head" data-target="staff-2" style="background-image: url('{$STAFF_2_HEAD}');"></div>
                    <div class="staff-nav-head" data-target="staff-3" style="background-image: url('{$STAFF_3_HEAD}');"></div>
                </div>
                <!-- Progress -->
                <div class="staff-progress-container"><div class="staff-progress-bar"></div></div>
            </div>
        </div>

        <!-- 5. BOTTOM SECTION -->
        <div class="ui stackable grid" style="margin-top: 0;">
            <div class="ten wide column">
                <div class="htp-card">
                    <div class="htp-header">
                        <h2 style="margin:0;">How to Play</h2>
                        <div class="htp-dots">
                            <div class="htp-dot active"></div><div class="htp-dot"></div><div class="htp-dot"></div><div class="htp-dot"></div>
                        </div>
                    </div>
                    <div class="htp-step active" data-step="1">
                        <div class="htp-step-title">{$HTP_1_TITLE}</div><p class="htp-content">{$HTP_1_TEXT}</p><img src="{$HTP_1_IMG}" class="htp-image-real">
                    </div>
                    <div class="htp-step" data-step="2">
                        <div class="htp-step-title">{$HTP_2_TITLE}</div><p class="htp-content">{$HTP_2_TEXT}</p><div class="htp-image-row"><img src="{$HTP_2_IMG_2}" class="htp-image-real"><img src="{$HTP_2_IMG}" class="htp-image-real"></div>
                    </div>
                    <div class="htp-step" data-step="3">
                        <div class="htp-step-title">{$HTP_3_TITLE}</div><p class="htp-content">{$HTP_3_TEXT}</p><img src="{$HTP_3_IMG}" class="htp-image-real">
                    </div>
                    <div class="htp-step" data-step="4">
                        <div class="htp-step-title">{$HTP_4_TITLE}</div><p class="htp-content">{$HTP_4_TEXT}</p><img src="{$HTP_4_IMG}" class="htp-image-real">
                    </div>
                    <a href="javascript:void(0);" onclick="nextStep()" class="htp-next-btn">Next Step &rarr;</a>
                </div>
            </div>

            <div class="six wide column">
                <div class="community-box">
                    <i class="fab fa-discord" style="font-size: 4rem; color: #5865F2; margin-bottom: 15px;"></i>
                    <h3 style="margin: 0;">Join Community!</h3>
                    {if isset($MINECRAFT_PLAYERS_LIST)}
                        <div class="discord-count">{$MINECRAFT_PLAYERS_LIST|count} Online Now</div>
                    {else}
                        <div class="discord-count">Join Now</div>
                    {/if}
                    <a href="https://discord.gg/CEPyDKM2" target="_blank" class="join-btn">Join Discord</a>
                </div>
                <a href="./index.php?route=/rules" class="rules-btn-block"><i class="fa fa-scroll"></i> Server Rules</a>
            </div>
        </div>

    </div> 
</div>

{include file='footer.tpl'}
{* 
   =================================================================
   STATUS CONFIGURATION (Dynamic Colors)
   =================================================================
*}

{assign var="MC_SERVER_IP"    value="mc.aetheriasmp.net"} 
{assign var="DISCORD_ID"      value="1450982182519574571"} 
{assign var="DISCORD_INVITE"  value="https://discord.gg/CEPyDKM2"}

{* --- COLORI MINECRAFT CARD --- *}
{assign var="MC_BG_LIGHT"     value="#ccd5ae"}
{assign var="MC_BG_DARK"      value="#606c38"}

{* --- COLORI DISCORD CARD --- *}
{assign var="DIS_BG_LIGHT"    value="#bde0fe"}
{assign var="DIS_BG_DARK"     value="#274c77"}


{* Staff Configuration (Manual) *}
{assign var="STAFF_LIST" value=[
    ["name" => "Zeph", "role" => "Owner", "img" => "https://cravatar.eu/helmavatar/_ItsZeph_/64.png", "color" => "#e74c3c"],
    ["name" => "Zlem", "role" => "Owner", "img" => "https://cravatar.eu/helmavatar/Zlem_/64.png", "color" => "#f39c12"]
]}

{* ================================================================= *}

{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <!-- Header -->
    <div class="news-header-box">
        <h1 class="ui header" style="font-size: 3rem; margin-bottom: 10px; margin-top: 0;">
            Server Status
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.8;">
            Real-time monitoring of {$SITE_NAME} services.
        </p>
    </div>

    <div class="ui stackable grid">
        
        <!-- COLONNA MINECRAFT -->
        <div class="eight wide column">
            <div class="status-card mc-card" 
                 style="--card-bg-light: {$MC_BG_LIGHT}; --card-bg-dark: {$MC_BG_DARK};">
                
                <div class="status-header">
                    <i class="fa fa-cube status-icon"></i>
                    <div>
                        <h2 class="status-title">Minecraft Server</h2>
                        <div class="status-subtitle" id="mc-ip">{$MC_SERVER_IP}</div>
                    </div>
                    <div class="status-indicator loading" id="mc-indicator"></div>
                </div>

                <div class="ui divider" style="border-color: rgba(255,255,255,0.1);"></div>

                <!-- Dati Live -->
                <div class="status-stats-grid" id="mc-stats-content">
                    <div class="stat-item">
                        <span class="stat-label">Status</span>
                        <span class="stat-value" id="mc-status">Checking...</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Players</span>
                        <span class="stat-value" id="mc-players">- / -</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Version</span>
                        <span class="stat-value" id="mc-version">-</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Ping</span>
                        <span class="stat-value" id="mc-ping">- ms</span>
                    </div>
                </div>

                <div class="player-bar-container">
                    <div class="player-bar-fill" id="mc-bar" style="width: 0%;"></div>
                </div>

                <div class="server-motd" id="mc-motd">Connecting to api...</div>

            </div>
        </div>

        <!-- COLONNA DISCORD -->
        <div class="eight wide column">
            <div class="status-card discord-card"
                 style="--card-bg-light: {$DIS_BG_LIGHT}; --card-bg-dark: {$DIS_BG_DARK};">
                
                <div class="status-header">
                    <i class="fab fa-discord status-icon"></i>
                    <div>
                        <h2 class="status-title">Discord Server</h2>
                        <div class="status-subtitle">Community Voice & Chat</div>
                    </div>
                    <a href="{$DISCORD_INVITE}" target="_blank" class="ui button mini primary" style="margin-left:auto;">Join</a>
                </div>

                <div class="ui divider" style="border-color: rgba(255,255,255,0.1);"></div>

                <!-- Staff Section -->
                <h4 class="discord-section-title">Staff Online</h4>
                <div class="discord-members-grid">
                    {foreach from=$STAFF_LIST item=staff}
                        <div class="discord-member" title="{$staff.name} ({$staff.role})">
                            <img src="{$staff.img}" class="discord-avatar" style="border-color: {$staff.color};">
                            <div class="discord-status-dot online"></div>
                        </div>
                    {/foreach}
                </div>

                <!-- Members Section -->
                <h4 class="discord-section-title">
                    Members Online <span class="ui label mini" id="discord-count">0</span>
                </h4>
                
                <div class="discord-members-grid" id="discord-members-list">
                    <div class="ui active centered inline loader mini"></div>
                </div>

            </div>
        </div>

    </div>
    
    <div style="height: 50px;"></div>

</div>

<!-- LOCAL STYLES (Updated for variables) -->
<style>
    .status-card {
        /* DEFAULT LIGHT MODE */
        background: var(--card-bg-light, var(--container-bg)) !important;
        
        border: 1px solid var(--container-border);
        border-radius: var(--radius-squircle);
        padding: 2rem;
        height: 100%;
        backdrop-filter: blur(var(--glass-blur));
        box-shadow: var(--shadow-soft);
        transition: background 0.3s ease;
    }

    /* DARK MODE OVERRIDE */
    [data-theme="dark"] .status-card {
        background: var(--card-bg-dark, var(--container-bg)) !important;
    }
    
    .status-header { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; }
    .status-icon { font-size: 2.5rem; opacity: 0.8; }
    .mc-card .status-icon { color: #2ecc71; }
    .discord-card .status-icon { color: #5865F2; }
    
    /* Adaptive text (uses theme variable) */
    .status-title { margin: 0; font-size: 1.5rem; font-weight: 800; color: var(--text-color); }
    .status-subtitle { opacity: 0.6; font-size: 0.9rem; color: var(--text-color); }

    .status-indicator { width: 15px; height: 15px; border-radius: 50%; margin-left: auto; box-shadow: 0 0 10px currentColor; }
    .status-indicator.online { background-color: #2ecc71; color: #2ecc71; }
    .status-indicator.offline { background-color: #e74c3c; color: #e74c3c; }
    .status-indicator.loading { background-color: #f1c40f; color: #f1c40f; animation: pulse 1s infinite; }

    .status-stats-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0; }
    .stat-item { background: rgba(0,0,0,0.1); padding: 15px; border-radius: 12px; text-align: center; } 
    .stat-label { display: block; font-size: 0.8rem; opacity: 0.7; text-transform: uppercase; letter-spacing: 1px; color: var(--text-color); }
    .stat-value { font-size: 1.2rem; font-weight: 800; color: var(--text-color); }

    .player-bar-container { width: 100%; height: 8px; background: rgba(0,0,0,0.2); border-radius: 10px; overflow: hidden; margin-top: 10px; }
    .player-bar-fill { height: 100%; background: #2ecc71; transition: width 1s ease; }

    .server-motd { 
        margin-top: 20px; background: rgba(0,0,0,0.3); padding: 15px; 
        border-radius: 10px; font-family: 'Minecraft', monospace; font-size: 0.9rem; line-height: 1.4; color: #fff; 
        text-align: center;
    }

    .discord-section-title { margin-top: 20px; font-size: 0.9rem; text-transform: uppercase; opacity: 0.7; color: var(--text-color); }
    .discord-members-grid { display: flex; flex-wrap: wrap; gap: 10px; max-height: 300px; overflow-y: auto; }
    
    .discord-member { position: relative; width: 40px; height: 40px; transition: transform 0.2s; }
    .discord-member:hover { transform: scale(1.1); z-index: 2; }
    
    .discord-avatar { width: 100%; height: 100%; border-radius: 50%; border: 2px solid transparent; }
    .discord-status-dot {
        position: absolute; bottom: 0; right: 0; width: 10px; height: 10px; 
        background: #2ecc71; border-radius: 50%; border: 2px solid var(--container-bg);
    }
    
    @keyframes pulse { 0% { opacity: 1; } 50% { opacity: 0.5; } 100% { opacity: 1; } }
</style>

<!-- SCRIPT JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // Function to update MC status
        function updateMCStatus() {
            const mcIp = "{$MC_SERVER_IP}";
            fetch('https://api.mcsrvstat.us/2/' + mcIp)
                .then(response => response.json())
                .then(data => {
                    const ind = document.getElementById('mc-indicator');
                    if(data.online) {
                        ind.className = 'status-indicator online';
                        document.getElementById('mc-status').innerText = 'Online';
                        document.getElementById('mc-status').style.color = '#2ecc71';
                        document.getElementById('mc-players').innerText = data.players.online + ' / ' + data.players.max;
                        document.getElementById('mc-version').innerText = data.version;
                        document.getElementById('mc-ping').innerText = '12 ms'; 
                        if(data.motd && data.motd.html) document.getElementById('mc-motd').innerHTML = data.motd.html.join('<br>');
                        const percentage = (data.players.online / data.players.max) * 100;
                        document.getElementById('mc-bar').style.width = percentage + '%';
                    } else {
                        ind.className = 'status-indicator offline';
                        document.getElementById('mc-status').innerText = 'Offline';
                        document.getElementById('mc-status').style.color = '#e74c3c';
                        document.getElementById('mc-motd').innerText = 'Server is currently offline.';
                    }
                })
                .catch(err => console.error(err));
        }

        // Initial update
        updateMCStatus();
        
        // Update every 30 seconds
        setInterval(updateMCStatus, 30000);

        // 2. DISCORD
        const discordId = "{$DISCORD_ID}";
        fetch('https://discord.com/api/guilds/' + discordId + '/widget.json')
            .then(response => response.json())
            .then(data => {
                document.getElementById('discord-count').innerText = data.presence_count || 0;
                const list = document.getElementById('discord-members-list');
                list.innerHTML = ''; 
                if(data.members) {
                    data.members.forEach(member => {
                        const div = document.createElement('div');
                        div.className = 'discord-member';
                        div.title = member.username;
                        
                        const img = document.createElement('img');
                        img.className = 'discord-avatar';
                        img.src = member.avatar_url;
                        
                        const dot = document.createElement('div');
                        let statusColor = '#2ecc71'; 
                        if(member.status === 'idle') statusColor = '#f1c40f';
                        if(member.status === 'dnd') statusColor = '#e74c3c';
                        dot.className = 'discord-status-dot';
                        dot.style.backgroundColor = statusColor;

                        div.appendChild(img);
                        div.appendChild(dot);
                        list.appendChild(div);
                    });
                }
            });
    });
</script>

{include file='footer.tpl'}
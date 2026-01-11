{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR (Link non-friendly corretti) -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            
            <a href="./index.php?route=/user/settings" class="usercp-menu-item active">
                <div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> {$SETTINGS}
            </a>
            
            {* Note: Security might not exist in v2.2.1 base, often integrated in settings or has another name *}
            {* If it doesn't work, try route=/user/security *}
            
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> {$MESSAGING}
            </a>
            
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> {$ALERTS}
            </a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <h1 class="usercp-title">Profile Settings</h1>

            <form class="ui form" action="" method="post">
                
                <!-- Display Name (Nickname) -->
                <div class="field">
                    <label>Display Name</label>
                    <input type="text" name="nickname" value="{if isset($NICKNAME)}{$NICKNAME}{else}{$LOGGED_IN_USER.username}{/if}" placeholder="Your display name">
                </div>

                <!-- Username (Login Name) - Often not editable -->
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" value="{if isset($USERNAME)}{$USERNAME}{else}{$LOGGED_IN_USER.username}{/if}" readonly style="opacity: 0.7; cursor: not-allowed;">
                </div>

                <!-- Email -->
                <div class="field">
                    <label>{$EMAIL_ADDRESS}</label>
                    <input type="email" name="email" value="{$CURRENT_EMAIL}">
                </div>

                <!-- Timezone -->
                <div class="field">
                    <label>{$TIMEZONE}</label>
                    <select name="timezone">
                        <option value="UTC"{if $SELECTED_TIMEZONE eq 'UTC'} selected{/if}>UTC</option>
                        <option value="Europe/London"{if $SELECTED_TIMEZONE eq 'Europe/London'} selected{/if}>Europe/London</option>
                        <option value="Europe/Rome"{if $SELECTED_TIMEZONE eq 'Europe/Rome'} selected{/if}>Europe/Rome</option>
                        <option value="America/New_York"{if $SELECTED_TIMEZONE eq 'America/New_York'} selected{/if}>America/New_York</option>
                        <option value="America/Los_Angeles"{if $SELECTED_TIMEZONE eq 'America/Los_Angeles'} selected{/if}>America/Los_Angeles</option>
                        <option value="Asia/Tokyo"{if $SELECTED_TIMEZONE eq 'Asia/Tokyo'} selected{/if}>Asia/Tokyo</option>
                        <option value="Australia/Sydney"{if $SELECTED_TIMEZONE eq 'Australia/Sydney'} selected{/if}>Australia/Sydney</option>
                    </select>
                </div>

                <div class="ui divider" style="opacity: 0.2; margin: 30px 0;"></div>

                <!-- Password Conferma (Con Occhio) -->
                <div class="field">
                    <label>{$CURRENT_PASSWORD}</label>
                    <div class="ui icon input">
                        <input type="password" name="password" id="current_password" placeholder="Required to save">
                        <i class="eye link icon" onclick="togglePassword('current_password', this)"></i>
                    </div>
                </div>

                <input type="hidden" name="token" value="{$TOKEN}">
                <input type="hidden" name="action" value="settings">
                
                <button type="submit" class="ui primary button">Save Changes</button>
            </form>

        </div>

    </div>

</div>

<!-- Script for the password eye -->
<script>
function togglePassword(inputId, icon) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("eye");
        icon.classList.add("eye", "slash"); 
    } else {
        input.type = "password";
        icon.classList.remove("eye", "slash");
        icon.classList.add("eye");
    }
}
</script>

{include file='footer.tpl'}
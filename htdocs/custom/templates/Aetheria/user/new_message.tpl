{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            <a href="./index.php?route=/user/settings" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> {$SETTINGS}</a>
            
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item active"><div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> {$MESSAGING}</a>
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> {$ALERTS}</a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <!-- HEADER -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                <h1 class="usercp-title" style="margin:0; border:none; padding:0;">
                    {$NEW_MESSAGE}
                </h1>
                <a href="{$BACK_LINK}" class="ui button mini basic">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>

            {if isset($ERROR)}
                <div class="ui error message">
                    {$ERROR}
                </div>
            {/if}

            <form class="ui form" action="" method="post">
                
                <!-- Destinatario -->
                <div class="field">
                    <label>{$TO}</label>
                    <input type="text" name="to" id="to" value="{$TO_USER}" placeholder="Username">
                    <!-- If you have Select2 or autocomplete active, Nameless handles it here -->
                </div>

                <!-- Oggetto -->
                <div class="field">
                    <label>{$MESSAGE_TITLE}</label>
                    <input type="text" name="title" value="{$MESSAGE_TITLE_VALUE}" placeholder="Subject">
                </div>

                <!-- Editor (Content) -->
                <div class="field">
                    <label>Message Content</label>
                    <textarea name="content" id="content" style="min-height: 250px;">{$CONTENT}</textarea>
                </div>

                <div class="ui divider"></div>

                <input type="hidden" name="token" value="{$TOKEN}">
                
                <button type="submit" class="ui primary button large">
                    <i class="fa fa-paper-plane"></i> Send Message
                </button>

            </form>

        </div>

    </div>

</div>

{include file='footer.tpl'}
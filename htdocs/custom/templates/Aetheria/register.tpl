{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container">
    
    <div class="auth-split-container">
        
        <!-- LATO SINISTRO: GIF SLIME -->
        <div class="auth-side-media">
            <img src="https://i.redd.it/du105wbwx6f61.gif" class="auth-gif" alt="Slime Jumping">
        </div>

        <!-- LATO DESTRO: REGISTER FORM -->
        <div class="auth-side-form">
            
            <h2 class="auth-title">{$CREATE_AN_ACCOUNT}</h2>

            {if isset($ERRORS)}
                <div class="ui error message">
                    {foreach from=$ERRORS item=error}
                        <li>{$error}</li>
                    {/foreach}
                </div>
            {/if}

            <form class="ui form" action="" method="post" id="form-register">
                
                {if isset($NICKNAME)}
                    <div class="field">
                        <label>{$NICKNAME}</label>
                        <input type="text" name="nickname" id="nickname" value="{$NICKNAME_VALUE}" placeholder="Your Display Name" tabindex="1">
                    </div>
                {/if}

                <div class="field">
                    <label>{$USERNAME}</label>
                    <input type="text" name="username" id="username" value="{$USERNAME_VALUE}" placeholder="Your Minecraft Username" tabindex="2">
                </div>

                <div class="field">
                    <label>{$EMAIL}</label>
                    <input type="email" name="email" id="email" value="{$EMAIL_VALUE}" placeholder="your.email@example.com" tabindex="3">
                </div>

                <div class="two fields">
                    <div class="field">
                        <label>{$PASSWORD}</label>
                        <input type="password" name="password" id="password" placeholder="Enter a strong password" tabindex="4">
                    </div>
                    <div class="field">
                        <label>{$CONFIRM_PASSWORD}</label>
                        <input type="password" name="password_again" id="password_again" placeholder="Confirm your password" tabindex="5">
                    </div>
                </div>

                {if isset($RECAPTCHA)}
                    <div class="field text-center">
                        <div class="g-recaptcha" data-sitekey="{$RECAPTCHA}"></div>
                    </div>
                {/if}

                <div class="inline field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="t_and_c" id="t_and_c" value="1" tabindex="7">
                        <label for="t_and_c">{$AGREE_TO_TERMS}</label>
                    </div>
                </div>

                <input type="hidden" name="token" value="{$TOKEN}">
                
                <button type="submit" class="ui primary button fluid" tabindex="8">{$REGISTER}</button>
                
                <div style="margin-top: 20px; text-align: center;">
                    <span style="opacity: 0.6;">Already have an account?</span> 
                    <a href="{$LOGIN_URL}" style="font-weight: bold;">{$LOG_IN}</a>
                </div>
            </form>
        </div>

    </div>
</div>

{include file='footer.tpl'}
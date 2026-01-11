{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container">
    
    <!-- LAYOUT SPLIT -->
    <div class="auth-split-container">
        
        <!-- LATO SINISTRO: GIF SLIME -->
        <div class="auth-side-media">
            <img src="https://i.redd.it/du105wbwx6f61.gif" class="auth-gif" alt="Slime Jumping">
        </div>

        <!-- LATO DESTRO: LOGIN FORM -->
        <div class="auth-side-form">
            
            <h2 class="auth-title">{$SIGN_IN}</h2>

            {if count($ERROR)}
                <div class="ui error message">
                    {foreach from=$ERROR item=error}
                        <li>{$error}</li>
                    {/foreach}
                </div>
            {/if}

            {if isset($SUCCESS)}
                <div class="ui success message">
                    {$SUCCESS}
                </div>
            {/if}

            <form class="ui form" action="" method="post" id="form-login">
                
                <div class="field">
                    <label>{$EMAIL}</label>
                    <div class="ui right icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" id="email" placeholder="email@example.com" value="{$USERNAME_INPUT}" tabindex="1">
                    </div>
                </div>

                <div class="field">
                    <label>{$PASSWORD}</label>
                    <div class="ui right icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" id="password" placeholder="••••••••" tabindex="2">
                    </div>
                </div>

                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="remember" id="remember" value="1" tabindex="3">
                        <label for="remember">{$REMEMBER_ME}</label>
                    </div>
                </div>
                
                {if isset($RECAPTCHA)}
                    <div class="field text-center">
                        <div class="g-recaptcha" data-sitekey="{$RECAPTCHA}"></div>
                    </div>
                {/if}

                <input type="hidden" name="token" value="{$TOKEN}">
                
                <button type="submit" class="ui primary button fluid" tabindex="4">{$SIGN_IN}</button>
                
                <div style="margin-top: 20px; text-align: center; font-size: 0.9rem;">
                    <a href="{$FORGOT_PASSWORD_URL}">{$FORGOT_PASSWORD}</a>
                    <br><br>
                    <span style="opacity: 0.6;">Non hai un account?</span> 
                    <a href="{$REGISTER_URL}" style="font-weight: bold;">{$REGISTER}</a>
                </div>
            </form>
        </div>

    </div>
</div>

{include file='footer.tpl'}
<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:43:45
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962abf12641a4_32523857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c38c7f0b6d50d94ac456d2b990b385a1ba727ad3' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/login.tpl',
      1 => 1768074219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6962abf12641a4_32523857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container">
    
    <!-- LAYOUT SPLIT -->
    <div class="auth-split-container">
        
        <!-- LATO SINISTRO: GIF SLIME -->
        <div class="auth-side-media">
            <img src="https://i.redd.it/du105wbwx6f61.gif" class="auth-gif" alt="Slime Jumping">
        </div>

        <!-- LATO DESTRO: LOGIN FORM -->
        <div class="auth-side-form">
            
            <h2 class="auth-title"><?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
</h2>

            <?php if (count($_smarty_tpl->tpl_vars['ERROR']->value)) {?>
                <div class="ui error message">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
                <div class="ui success message">
                    <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

                </div>
            <?php }?>

            <form class="ui form" action="" method="post" id="form-login">
                
                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
                    <div class="ui right icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" id="email" placeholder="email@example.com" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
" tabindex="1">
                    </div>
                </div>

                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                    <div class="ui right icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" id="password" placeholder="••••••••" tabindex="2">
                    </div>
                </div>

                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="remember" id="remember" value="1" tabindex="3">
                        <label for="remember"><?php echo $_smarty_tpl->tpl_vars['REMEMBER_ME']->value;?>
</label>
                    </div>
                </div>
                
                <?php if ((isset($_smarty_tpl->tpl_vars['RECAPTCHA']->value))) {?>
                    <div class="field text-center">
                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['RECAPTCHA']->value;?>
"></div>
                    </div>
                <?php }?>

                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                
                <button type="submit" class="ui primary button fluid" tabindex="4"><?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
</button>
                
                <div style="margin-top: 20px; text-align: center; font-size: 0.9rem;">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>
</a>
                    <br><br>
                    <span style="opacity: 0.6;">Non hai un account?</span> 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['REGISTER_URL']->value;?>
" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</a>
                </div>
            </form>
        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

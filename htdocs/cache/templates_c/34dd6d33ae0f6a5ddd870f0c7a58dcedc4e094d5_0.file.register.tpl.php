<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:42:18
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962ab9a9a2d15_42093677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34dd6d33ae0f6a5ddd870f0c7a58dcedc4e094d5' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/register.tpl',
      1 => 1768074122,
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
function content_6962ab9a9a2d15_42093677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container">
    
    <div class="auth-split-container">
        
        <!-- LATO SINISTRO: GIF SLIME -->
        <div class="auth-side-media">
            <img src="https://i.redd.it/du105wbwx6f61.gif" class="auth-gif" alt="Slime Jumping">
        </div>

        <!-- LATO DESTRO: REGISTER FORM -->
        <div class="auth-side-form">
            
            <h2 class="auth-title"><?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>
</h2>

            <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                <div class="ui error message">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
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

            <form class="ui form" action="" method="post" id="form-register">
                
                <?php if ((isset($_smarty_tpl->tpl_vars['NICKNAME']->value))) {?>
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</label>
                        <input type="text" name="nickname" id="nickname" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME_VALUE']->value;?>
" placeholder="Your Display Name" tabindex="1">
                    </div>
                <?php }?>

                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                    <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
" placeholder="Your Minecraft Username" tabindex="2">
                </div>

                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
                    <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_VALUE']->value;?>
" placeholder="your.email@example.com" tabindex="3">
                </div>

                <div class="two fields">
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                        <input type="password" name="password" id="password" placeholder="Enter a strong password" tabindex="4">
                    </div>
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['CONFIRM_PASSWORD']->value;?>
</label>
                        <input type="password" name="password_again" id="password_again" placeholder="Confirm your password" tabindex="5">
                    </div>
                </div>

                <?php if ((isset($_smarty_tpl->tpl_vars['RECAPTCHA']->value))) {?>
                    <div class="field text-center">
                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['RECAPTCHA']->value;?>
"></div>
                    </div>
                <?php }?>

                <div class="inline field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="t_and_c" id="t_and_c" value="1" tabindex="7">
                        <label for="t_and_c"><?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>
</label>
                    </div>
                </div>

                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                
                <button type="submit" class="ui primary button fluid" tabindex="8"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</button>
                
                <div style="margin-top: 20px; text-align: center;">
                    <span style="opacity: 0.6;">Hai già un account?</span> 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_URL']->value;?>
" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['LOG_IN']->value;?>
</a>
                </div>
            </form>
        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

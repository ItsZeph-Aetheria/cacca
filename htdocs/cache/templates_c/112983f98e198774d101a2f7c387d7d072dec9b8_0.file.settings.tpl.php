<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:34:13
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962a9b56bd595_76218883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112983f98e198774d101a2f7c387d7d072dec9b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/settings.tpl',
      1 => 1768073626,
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
function content_6962a9b56bd595_76218883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR (Link non-friendly corretti) -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            
            <a href="./index.php?route=/user/settings" class="usercp-menu-item active">
                <div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> <?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>

            </a>
            
                                    
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> <?php echo $_smarty_tpl->tpl_vars['MESSAGING']->value;?>

            </a>
            
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> <?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>

            </a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <h1 class="usercp-title">Profile Settings</h1>

            <form class="ui form" action="" method="post">
                
                <!-- Display Name (Nickname) -->
                <div class="field">
                    <label>Display Name</label>
                    <input type="text" name="nickname" value="<?php if ((isset($_smarty_tpl->tpl_vars['NICKNAME']->value))) {
echo $_smarty_tpl->tpl_vars['NICKNAME']->value;
} else {
echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];
}?>" placeholder="Your display name">
                </div>

                <!-- Username (Login Name) - Often not editable -->
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php if ((isset($_smarty_tpl->tpl_vars['USERNAME']->value))) {
echo $_smarty_tpl->tpl_vars['USERNAME']->value;
} else {
echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];
}?>" readonly style="opacity: 0.7; cursor: not-allowed;">
                </div>

                <!-- Email -->
                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
                    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_EMAIL']->value;?>
">
                </div>

                <!-- Timezone -->
                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
</label>
                    <select name="timezone">
                        <option value="UTC"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'UTC') {?> selected<?php }?>>UTC</option>
                        <option value="Europe/London"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'Europe/London') {?> selected<?php }?>>Europe/London</option>
                        <option value="Europe/Rome"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'Europe/Rome') {?> selected<?php }?>>Europe/Rome</option>
                        <option value="America/New_York"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'America/New_York') {?> selected<?php }?>>America/New_York</option>
                        <option value="America/Los_Angeles"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'America/Los_Angeles') {?> selected<?php }?>>America/Los_Angeles</option>
                        <option value="Asia/Tokyo"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'Asia/Tokyo') {?> selected<?php }?>>Asia/Tokyo</option>
                        <option value="Australia/Sydney"<?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == 'Australia/Sydney') {?> selected<?php }?>>Australia/Sydney</option>
                    </select>
                </div>

                <div class="ui divider" style="opacity: 0.2; margin: 30px 0;"></div>

                <!-- Password Conferma (Con Occhio) -->
                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</label>
                    <div class="ui icon input">
                        <input type="password" name="password" id="current_password" placeholder="Required to save">
                        <i class="eye link icon" onclick="togglePassword('current_password', this)"></i>
                    </div>
                </div>

                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <input type="hidden" name="action" value="settings">
                
                <button type="submit" class="ui primary button">Save Changes</button>
            </form>

        </div>

    </div>

</div>

<!-- Script for the password eye -->
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:54:58
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962ae92c194c7_48449063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41323fcd684e6eadfc8f0e2ee490c62cb4ed9dc0' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/navbar.tpl',
      1 => 1768074886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6962ae92c194c7_48449063 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- DYNAMIC ISLAND CONTAINER -->
<div class="dynamic-island-container">
    <div id="dynamic-island" class="dynamic-island">
        <i class="island-icon fa fa-check-circle"></i>
        <span class="island-content">Action Successful</span>
    </div>
</div>



<!-- HIDDEN FLASH MESSAGES -->
<?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value))) {?>
    <div id="hidden-session-flash" style="display:none;" data-type="success"><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value);?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
    <div id="hidden-session-flash" style="display:none;" data-type="error">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['error']->value);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>


<!-- NAVBAR -->
<nav class="aetheria-navbar">
    <div class="nav-container">
        
        <!-- 1. LOGO -->
        <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="nav-logo">
            <?php if ((isset($_smarty_tpl->tpl_vars['LOGO_IMAGE']->value))) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['LOGO_IMAGE']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
" style="max-height: 38px; margin-right: 10px;">
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>

        </a>

        <!-- 2. LINKS (Desktop) -->
        <div class="nav-links desktop-only">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                
                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'forum' || $_smarty_tpl->tpl_vars['item']->value['title'] == 'Forum' || $_smarty_tpl->tpl_vars['name']->value == 'members' || $_smarty_tpl->tpl_vars['item']->value['title'] == 'Members') {
continue 1;
}?> 

                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                    <!-- Dropdown Links -->
                    <div class="ui dropdown item nav-item">
                        <span><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                </a>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- Normal Links -->
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?>active<?php }?>">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!-- 3. ACTIONS (User & Toggle) -->
        <div class="nav-actions">
            
            

            <!-- iOS Theme Switch -->
            <label class="ios-switch" title="Toggle Dark Mode">
                <input type="checkbox" id="theme-switch-toggle">
                <span class="slider"></span>
            </label>

            <!-- 
               LOGICA UTENTE
               Controlliamo se esiste la variabile utente e se non è vuota.
            -->
            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && !empty($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) {?>
                
                <!-- UTENTE LOGGATO -->
                <div class="user-dropdown-wrapper" style="position: relative;">
                    <div class="user-btn" onclick="toggleUserDropdown()">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
" class="user-avatar">
                        <span class="desktop-only" style="margin-left: 5px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
</span>
                        <i class="fa fa-chevron-down" style="font-size: 0.7rem; margin-left: 5px; opacity: 0.6;"></i>
                    </div>

                    <!-- Menu a tendina -->
                    <div id="user-dropdown-menu" class="custom-dropdown">
                        <div class="dropdown-header">Account</div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['profile'];?>
" class="dropdown-item">
                            <i class="fa fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['MESSAGING_LINK']->value;?>
" class="dropdown-item">
                            <i class="fa fa-envelope"></i> Messages
                            <?php if ((isset($_smarty_tpl->tpl_vars['MESSAGING_COUNT']->value)) && $_smarty_tpl->tpl_vars['MESSAGING_COUNT']->value > 0) {?>
                                <span class="dropdown-badge"><?php echo $_smarty_tpl->tpl_vars['MESSAGING_COUNT']->value;?>
</span>
                            <?php }?>
                        </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ALERTS_LINK']->value;?>
" class="dropdown-item">
                            <i class="fa fa-bell"></i> Alerts
                            <?php if ((isset($_smarty_tpl->tpl_vars['ALERTS_COUNT']->value)) && $_smarty_tpl->tpl_vars['ALERTS_COUNT']->value > 0) {?>
                                <span class="dropdown-badge"><?php echo $_smarty_tpl->tpl_vars['ALERTS_COUNT']->value;?>
</span>
                            <?php }?>
                        </a>
                        
                        <?php if ((isset($_smarty_tpl->tpl_vars['PANEL_LINK']->value))) {?>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_LINK']->value;?>
" target="_blank" class="dropdown-item" style="color: var(--primary-accent);">
                                <i class="fa fa-tachometer-alt"></i> Admin Panel
                            </a>
                        <?php }?>
                        
                        <div class="dropdown-divider"></div>
                        <a href="./index.php?route=/logout" class="dropdown-item" style="color: #ff3b30;">
                            <i class="fa fa-sign-out-alt"></i> Log Out
                        </a>
                    </div>
                </div>

            <?php } else { ?>
                
                <!-- GUEST: MANUAL LINKS FOR LOCALHOST -->
                
                <a href="./index.php?route=/login" class="nav-item" style="font-weight: bold;">
                    Login
                </a>

                <a href="./index.php?route=/register" class="nav-item" 
                   style="background: var(--primary-accent); color: white !important; opacity: 1; padding: 6px 18px; border-radius: 50px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
                    Register
                </a>

            <?php }?>
        </div>

    </div>
</nav>

<!-- BANNER -->
<?php if ((isset($_smarty_tpl->tpl_vars['BANNER_IMAGE']->value))) {?>
    <div class="ui container banner-container" style="margin-top: 1.5rem; width: 95%; max-width: 1100px;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BANNER_IMAGE']->value;?>
" alt="Banner" class="banner-image" style="width: 100%; border-radius: var(--radius-squircle);">
    </div>
<?php }?>

<!-- MESSAGGI GLOBALI -->
<div class="ui container global-messages" style="margin-top: 1rem; width: 95%; max-width: 1100px;">
    <?php if ((isset($_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value))) {?>
        <div class="ui message icon warning" style="border-radius: var(--radius-btn);">
            <i class="exclamation triangle icon"></i>
            <div class="content"><?php echo $_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value;?>
</div>
        </div>
    <?php }?>
</div><?php }
}

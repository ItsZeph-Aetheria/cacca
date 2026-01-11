<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:34:12
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962a9b44bb207_04238668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af11f3850aa5cd7f7e77222581fc06ce9d34fa57' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/profile.tpl',
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
function content_6962a9b44bb207_04238668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">
    
    <!-- PROFILE CARD -->
    <div class="ui segment profile-main-card">
        
        <!-- Banner Sfondo -->
        <div class="profile-cover-banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['COVER']->value;?>
');">
            
            <!-- 
               <!-- SETTINGS BUTTON (Direct Link) -->
            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value)) && (isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && $_smarty_tpl->tpl_vars['NICKNAME']->value == $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username']) {?>
                <a href="index.php?route=/user/settings" class="profile-settings-btn" style="z-index: 10;">
                    <i class="fa fa-cog"></i> Settings
                </a>
            <?php }?>

        </div>
        
        <!-- Contenuto Header -->
        <div class="profile-header-content">
            <!-- Avatar -->
            <img src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" class="profile-avatar-large" alt="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
">
            
            <!-- Name and Role -->
            <h1 class="profile-username" style="color: <?php echo $_smarty_tpl->tpl_vars['USERNAME_COLOUR']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h1>
            <div class="profile-role-badge"><?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
</div>
            
            <!-- Statistiche -->
            <div class="profile-stats-grid">
                <div class="stat-box">
                    <span class="stat-value"><?php echo $_smarty_tpl->tpl_vars['REGISTERED']->value;?>
</span>
                    <span class="stat-label">Joined</span>
                </div>
                <div class="stat-box">
                    <span class="stat-value"><?php echo $_smarty_tpl->tpl_vars['LAST_SEEN']->value;?>
</span>
                    <span class="stat-label">Seen</span>
                </div>
                <div class="stat-box">
                    <span class="stat-value"><?php echo $_smarty_tpl->tpl_vars['PROFILE_VIEWS']->value;?>
</span>
                    <span class="stat-label">Views</span>
                </div>
            </div>

            <!-- Actions (Friendship / Message) - Visible only if NOT you -->
            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value)) && $_smarty_tpl->tpl_vars['NICKNAME']->value != $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username']) {?>
                <div class="profile-actions" style="margin-top: 20px;">
                    <?php if ((isset($_smarty_tpl->tpl_vars['ADD_FRIEND']->value)) || (isset($_smarty_tpl->tpl_vars['REMOVE_FRIEND']->value))) {?>
                        <form action="" method="post" style="display:inline;">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="action" value="<?php if ((isset($_smarty_tpl->tpl_vars['ADD_FRIEND']->value))) {?>add_friend<?php } else { ?>remove_friend<?php }?>">
                            <button type="submit" class="ui button <?php if ((isset($_smarty_tpl->tpl_vars['ADD_FRIEND']->value))) {?>positive<?php } else { ?>negative<?php }?>">
                                <?php if ((isset($_smarty_tpl->tpl_vars['ADD_FRIEND']->value))) {
echo $_smarty_tpl->tpl_vars['ADD_FRIEND']->value;
} else {
echo $_smarty_tpl->tpl_vars['REMOVE_FRIEND']->value;
}?>
                            </button>
                        </form>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['SEND_MESSAGE']->value))) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SEND_MESSAGE_LINK']->value;?>
" class="ui button primary">
                            <i class="fa fa-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['SEND_MESSAGE']->value;?>

                        </a>
                    <?php }?>
                </div>
            <?php }?>
        </div>

        <!-- TABS NAVIGATON -->
        <div class="profile-tabs-container">
            <div class="ui top attached tabular menu profile-tabs">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                    
                                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'forum' || $_smarty_tpl->tpl_vars['tab']->value['title'] == 'Forum') {
continue 1;
}?>

                    <a class="item<?php if ($_smarty_tpl->tpl_vars['tab']->value['active']) {?> active<?php }?>" data-tab="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <!-- TABS CONTENT -->
        <div class="profile-content-area">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                
                                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'forum' || $_smarty_tpl->tpl_vars['tab']->value['title'] == 'Forum') {
continue 1;
}?>

                <div class="ui bottom attached tab segment <?php if ($_smarty_tpl->tpl_vars['tab']->value['active']) {?> active<?php }?>" data-tab="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['include'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    </div>
    
</div>

<!-- Modal Block User -->
<?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['MOD_OR_ADMIN']->value))) {?>
        <div class="ui modal" id="modal-block">
            <div class="header"><?php echo $_smarty_tpl->tpl_vars['BLOCK_USER']->value;?>
</div>
            <div class="content">
                <form class="ui form" action="" method="post">
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
</label>
                        <input type="text" name="reason">
                    </div>
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <input type="hidden" name="action" value="block">
                    <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                </form>
            </div>
        </div>
    <?php }
}?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

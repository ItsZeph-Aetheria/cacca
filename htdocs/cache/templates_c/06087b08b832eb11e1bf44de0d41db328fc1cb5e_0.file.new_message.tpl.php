<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:10:01
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/new_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962a409981747_17785688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06087b08b832eb11e1bf44de0d41db328fc1cb5e' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/new_message.tpl',
      1 => 1768072195,
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
function content_6962a409981747_17785688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
            <a href="./index.php?route=/user" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-home"></i></div> Overview</a>
            <a href="./index.php?route=/user/settings" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div> <?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</a>
            
            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item active"><div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> <?php echo $_smarty_tpl->tpl_vars['MESSAGING']->value;?>
</a>
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> <?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>
</a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <!-- HEADER -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                <h1 class="usercp-title" style="margin:0; border:none; padding:0;">
                    <?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE']->value;?>

                </h1>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="ui button mini basic">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>

            <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
                <div class="ui error message">
                    <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                </div>
            <?php }?>

            <form class="ui form" action="" method="post">
                
                <!-- Destinatario -->
                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['TO']->value;?>
</label>
                    <input type="text" name="to" id="to" value="<?php echo $_smarty_tpl->tpl_vars['TO_USER']->value;?>
" placeholder="Username">
                    <!-- Se hai Select2 o autocompletamento attivo, Nameless lo gestisce qui -->
                </div>

                <!-- Oggetto -->
                <div class="field">
                    <label><?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
</label>
                    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE_VALUE']->value;?>
" placeholder="Subject">
                </div>

                <!-- Editor (Contenuto) -->
                <div class="field">
                    <label>Message Content</label>
                    <textarea name="content" id="content" style="min-height: 250px;"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</textarea>
                </div>

                <div class="ui divider"></div>

                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                
                <button type="submit" class="ui primary button large">
                    <i class="fa fa-paper-plane"></i> Send Message
                </button>

            </form>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

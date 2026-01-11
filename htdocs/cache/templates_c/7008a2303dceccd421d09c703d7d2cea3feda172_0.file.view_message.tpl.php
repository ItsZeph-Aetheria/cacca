<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:56:18
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/view_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962aee21e5e11_46956645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7008a2303dceccd421d09c703d7d2cea3feda172' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/view_message.tpl',
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
function content_6962aee21e5e11_46956645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR -->
        <div class="usercp-sidebar">
            <div class="usercp-menu-header">Account</div>
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
            
            <!-- Chat Header -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                <h1 class="usercp-title" style="margin:0; border:none; padding:0;">
                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>

                </h1>
                
                <div class="chat-actions-top">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="ui button mini basic">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <?php if ((isset($_smarty_tpl->tpl_vars['LEAVE_CONVERSATION_LINK']->value))) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['LEAVE_CONVERSATION_LINK']->value;?>
" class="ui button mini negative basic" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_LEAVE']->value;?>
');">
                        <i class="fa fa-sign-out-alt"></i> Leave
                    </a>
                    <?php }?>
                </div>
            </div>

            <!-- Chat Container -->
            <div class="chat-container">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MESSAGES']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                    
                    <!-- Logica Sent/Received -->
                    <div class="chat-bubble <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['id']) {?>sent<?php } else { ?>received<?php }?>">
                        
                        <!-- Avatar (Only if received) -->
                        <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] != $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['id']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['profile_link'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['author_avatar'];?>
" style="width:35px; height:35px; border-radius:50%; margin-right:10px; align-self:flex-end;">
                            </a>
                        <?php }?>

                        <div class="bubble-inner">
                            <div class="chat-text forum_post">
                                <?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>

                            </div>
                            <div class="chat-meta">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['profile_link'];?>
" style="color:inherit; font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['message']->value['author_username'];?>
</a> &bull; <?php echo $_smarty_tpl->tpl_vars['message']->value['date'];?>

                            </div>
                        </div>

                    </div>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="ui divider" style="margin-top: 30px;"></div>

            <!-- Risposta Rapida -->
            <form action="" method="post" class="ui form chat-reply-box">
                <div class="field">
                    <textarea name="content" placeholder="Scrivi una risposta..." rows="3"></textarea>
                </div>
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <button type="submit" class="ui primary button">
                    <i class="fa fa-paper-plane"></i> Send Reply
                </button>
            </form>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

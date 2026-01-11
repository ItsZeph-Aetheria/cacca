<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:42:09
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/messaging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962ab9149f249_62193063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61cd26c0d54a637a490a026dc731a998eff56ea6' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/messaging.tpl',
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
function content_6962ab9149f249_62193063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR (Menu) -->
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
            
            <!-- TITLE AND NEW BUTTON -->
            <div style="display:flex; flex-direction:column; align-items:flex-start; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                <?php if ((isset($_smarty_tpl->tpl_vars['NEW_MESSAGE_LINK']->value))) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE_LINK']->value;?>
" class="ui primary button tiny">
                        <i class="fa fa-pen"></i> New Message
                    </a>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['VIEWING_MESSAGE']->value))) {?>
                    <h1 class="usercp-title" style="margin:0; border:none; padding:0;">
                        <?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>

                    </h1>
                <?php }?>
            </div>

            <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?><div class="ui success message"><?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>
</div><?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?><div class="ui error message"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?>

            <!-- 1. LIST VIEW (INBOX) -->
            <?php if (!(isset($_smarty_tpl->tpl_vars['VIEWING_MESSAGE']->value))) {?>
                
                <?php if (count($_smarty_tpl->tpl_vars['MESSAGES']->value)) {?>
                    <div class="message-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MESSAGES']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['link'];?>
" class="message-list-item <?php if ($_smarty_tpl->tpl_vars['message']->value['unread']) {?>unread<?php }?>">
                                <!-- Avatar ultimo mittente -->
                                <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_avatar'];?>
" class="msg-avatar" alt="User">
                                
                                <div class="msg-content">
                                    <div class="msg-title"><strong><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</strong></div>
                                    <div class="msg-preview">
                                        Last by: <strong><?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user'];?>
</strong>
                                    </div>
                                </div>
                                
                                <div class="msg-date">
                                    <?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_date'];?>

                                </div>
                            </a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

                    </div>
                <?php } else { ?>
                    <div class="ui info message"><?php echo $_smarty_tpl->tpl_vars['NO_MESSAGES']->value;?>
</div>
                <?php }?>

            <!-- 2. CONVERSATION VIEW (CHAT) -->
            <?php } else { ?>
                
                <div class="chat-actions" style="margin-bottom: 20px;">
                    <a href="./index.php?route=/user/messaging" class="ui button mini basic">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <!-- Add Leave button if available in $LEAVE_CONVERSATION_LINK -->
                </div>

                <div class="chat-container">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MESSAGES']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                        
                        <!-- Sent/Received Logic: If the author is me, it's sent -->
                        <div class="chat-bubble <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['id']) {?>sent<?php } else { ?>received<?php }?>">
                            
                            <!-- If received, show small avatar -->
                            <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] != $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['id']) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['author_avatar'];?>
" style="width:30px; height:30px; border-radius:50%; margin-right:10px; align-self:center;">
                            <?php }?>

                            <div>
                                <div class="chat-text"><?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>
</div>
                                <div class="chat-meta"><?php echo $_smarty_tpl->tpl_vars['message']->value['date'];?>
</div>
                            </div>

                        </div>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <div class="ui divider"></div>

                <!-- Risposta Rapida -->
                <form action="" method="post" class="ui form chat-reply-box">
                    <div class="field">
                        <textarea name="content" placeholder="Write a reply..." rows="3"></textarea>
                    </div>
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="ui primary button">
                        <i class="fa fa-paper-plane"></i> Send
                    </button>
                </form>

            <?php }?>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

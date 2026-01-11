<?php
/* Smarty version 4.5.5, created on 2026-01-05 16:17:44
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/view_topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695bd618577c59_81786493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a993ac7e87e6d85aa51c15c9888186149703aed2' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/view_topic.tpl',
      1 => 1767626256,
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
function content_695bd618577c59_81786493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="ui stackable grid">
        <div class="ui twelve wide column">
            
            <!-- Breadcrumb & Header -->
            <div style="margin-bottom: 20px;">
                <div class="ui breadcrumb" style="font-size: 1.1rem;">
                    <a class="section" href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
">Home</a>
                    <i class="right angle icon divider"></i>
                    <a class="section" href="<?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_URL']->value;?>
">Forums</a>
                    <i class="right angle icon divider"></i>
                    <div class="active section"><?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>
</div>
                </div>
                
                <h1 class="ui header" style="margin-top: 10px; font-size: 2rem;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TOPIC_LABELS']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
echo $_smarty_tpl->tpl_vars['label']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>

                </h1>
            </div>

            <!-- Pagination Top -->
            <?php if ((isset($_smarty_tpl->tpl_vars['PAGINATION']->value))) {?>
                <div style="margin-bottom: 20px;"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>
            <?php }?>

            <!-- POST LOOP -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPLIES']->value, 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
                <div id="post-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" class="post-card">
                    
                    <!-- Sidebar Utente -->
                    <div class="post-sidebar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>
" class="post-avatar" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
">
                        </a>
                        
                        <div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
" class="post-username" style="color: <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a>
                            <div class="post-user-title"><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_group']['name'];?>
</div>
                            
                            <!-- Stats (Desktop) -->
                            <div class="post-user-stats">
                                <div><strong><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_posts_count'];?>
</strong> posts</div>
                                <div><strong><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_likes_count'];?>
</strong> likes</div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenuto Post -->
                    <div class="post-content-area">
                        
                        <!-- Header Post (Data e Link) -->
                        <div class="post-header">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['link'];?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date'];?>
">
                                <i class="fa fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date_rough'];?>

                            </a>
                            
                            <!-- Bottoni Moderazione (Solo se permessi) -->
                            <div class="post-actions-top">
                                <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']))) {?>
                                    <button class="ui mini button icon" onclick="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']['action'];?>
" title="Spam"><i class="fa fa-flag"></i></button>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']))) {?>
                                    <button class="ui mini button icon negative" onclick="if(confirm('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>
')){ window.location.href='<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['link'];?>
'; }" title="Delete"><i class="fa fa-trash"></i></button>
                                <?php }?>
                            </div>
                        </div>

                        <!-- Testo del messaggio -->
                        <div class="post-body forum_post">
                            <?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>

                        </div>

                        <!-- Firma -->
                        <?php if (!empty($_smarty_tpl->tpl_vars['reply']->value['signature'])) {?>
                            <div class="post-signature">
                                <?php echo $_smarty_tpl->tpl_vars['reply']->value['signature'];?>

                            </div>
                        <?php }?>

                        <!-- Footer (Quote, Edit, Like) -->
                        <div class="post-footer">
                            <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']))) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']['link'];?>
" class="post-btn edit">
                                    <i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']['text'];?>

                                </a>
                            <?php }?>
                            
                            <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']))) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']['link'];?>
" class="post-btn">
                                    <i class="fa fa-quote-left"></i> <?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']['text'];?>

                                </a>
                            <?php }?>
                            
                            <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['report']))) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['link'];?>
" class="post-btn delete">
                                    <i class="fa fa-exclamation-triangle"></i> Report
                                </a>
                            <?php }?>
                        </div>

                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <!-- Pagination Bottom -->
            <?php if ((isset($_smarty_tpl->tpl_vars['PAGINATION']->value))) {?>
                <div style="margin-top: 20px; margin-bottom: 20px;"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>
            <?php }?>

            <!-- Quick Reply -->
            <?php if ((isset($_smarty_tpl->tpl_vars['CAN_REPLY']->value))) {?>
                <div class="quick-reply-card">
                    <h3 style="margin-top:0;">Leave a Reply</h3>
                    <form action="" method="post">
                        <?php if ((isset($_smarty_tpl->tpl_vars['TOKEN']->value))) {?><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
"><?php }?>
                        <div class="field">
                            <textarea name="content" id="quickreply" style="width:100%; min-height:150px; border-radius:12px; padding:15px; border:1px solid #ddd;"></textarea>
                        </div>
                        <button type="submit" class="ui primary button" style="margin-top:15px;">
                            <i class="fa fa-paper-plane"></i> Post Reply
                        </button>
                    </form>
                </div>
            <?php } else { ?>
                <div class="ui info message">
                    <i class="info circle icon"></i> You must log in to reply.
                </div>
            <?php }?>

        </div>
        
        <!-- Sidebar Widget (FIXED ERROR) -->
        <div class="ui four wide column">
             <?php if ((isset($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <div class="widget-wrapper-ios" style="margin-bottom: 20px;">
                        <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

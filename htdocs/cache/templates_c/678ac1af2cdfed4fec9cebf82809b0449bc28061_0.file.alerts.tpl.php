<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:26:45
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962a7f556ede3_20347607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '678ac1af2cdfed4fec9cebf82809b0449bc28061' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/alerts.tpl',
      1 => 1768073201,
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
function content_6962a7f556ede3_20347607 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="./index.php?route=/user/messaging" class="usercp-menu-item"><div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div> <?php echo $_smarty_tpl->tpl_vars['MESSAGING']->value;?>
</a>
            <a href="./index.php?route=/user/alerts" class="usercp-menu-item active"><div class="usercp-menu-icon"><i class="fa fa-bell"></i></div> <?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>
</a>
        </div>

        <!-- CONTENT -->
        <div class="usercp-content">
            
            <div style="display:flex; flex-direction:column; align-items:flex-start; margin-bottom:20px; border-bottom:1px solid var(--container-border); padding-bottom:15px;">
                <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_ALL_LINK']->value))) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['DELETE_ALL_LINK']->value;?>
" class="ui button tiny negative basic" onclick="return confirm('Are you sure?');">
                        <i class="fa fa-trash"></i> Delete All
                    </a>
                <?php }?>
            </div>

            <?php if (count($_smarty_tpl->tpl_vars['ALERTS_LIST']->value)) {?>
                
                <div class="alerts-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALERTS_LIST']->value, 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value['view_link'];?>
" class="alert-item <?php if ($_smarty_tpl->tpl_vars['alert']->value['read'] == 0) {?>unread<?php }?>">
                            
                            <!-- Icona (Dinamica se possibile, altrimenti campanella) -->
                            <div class="alert-icon">
                                <i class="fa fa-bell"></i> 
                                <!-- Se Nameless passasse l'avatar dell'autore qui sarebbe top, ma di base non lo fa -->
                            </div>

                            <div class="alert-content">
                                <div class="alert-text">
                                    <?php echo $_smarty_tpl->tpl_vars['alert']->value['content'];?>

                                </div>
                                <div class="alert-meta">
                                    <i class="fa fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['alert']->value['date'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['alert']->value['read'] == 0) {?>
                                        <span class="ui label mini red basic">NEW</span>
                                    <?php }?>
                                </div>
                            </div>

                            <!-- Freccetta -->
                            <div class="alert-action">
                                <i class="fa fa-chevron-right"></i>
                            </div>

                        </a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                
                <!-- Tasto "Segna tutti come letti" -->
                <?php if ((isset($_smarty_tpl->tpl_vars['READ_ALL_LINK']->value))) {?>
                    <div style="margin-top: 20px; text-align: right;">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['READ_ALL_LINK']->value;?>
" class="ui button primary small">
                            <i class="fa fa-check-double"></i> Mark all as read
                        </a>
                    </div>
                <?php }?>

            <?php } else { ?>
                <div class="ui info message">
                    <?php echo $_smarty_tpl->tpl_vars['NO_ALERTS']->value;?>

                </div>
            <?php }?>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

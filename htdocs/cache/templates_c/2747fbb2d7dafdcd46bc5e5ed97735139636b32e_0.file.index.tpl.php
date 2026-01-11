<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:03:43
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962a28f195f80_11618196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2747fbb2d7dafdcd46bc5e5ed97735139636b32e' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/index.tpl',
      1 => 1768070516,
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
function content_6962a28f195f80_11618196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="usercp-container">
        
        <!-- SIDEBAR (Menu) -->
        <div class="usercp-sidebar">
            
            <div class="usercp-menu-header">Account</div>
            
            <!-- Link Overview (Attivo) -->
            <a href="<?php echo $_smarty_tpl->tpl_vars['USER_CP_LINK']->value;?>
" class="usercp-menu-item active">
                <div class="usercp-menu-icon"><i class="fa fa-home"></i></div>
                Overview
            </a>

            <!-- Link Settings -->
            <a href="<?php echo $_smarty_tpl->tpl_vars['DETAILS_LINK']->value;?>
" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-user-cog"></i></div>
                <?php echo $_smarty_tpl->tpl_vars['DETAILS']->value;?>

            </a>

            <!-- Link Sicurezza -->
            <a href="<?php echo $_smarty_tpl->tpl_vars['SECURITY_LINK']->value;?>
" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-lock"></i></div>
                Security
            </a>

            <div class="usercp-menu-header" style="margin-top: 20px;">Social</div>
            
            <a href="<?php echo $_smarty_tpl->tpl_vars['MESSAGING_LINK']->value;?>
" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-envelope"></i></div>
                <?php echo $_smarty_tpl->tpl_vars['MESSAGING']->value;?>

            </a>
            
            <a href="<?php echo $_smarty_tpl->tpl_vars['ALERTS_LINK']->value;?>
" class="usercp-menu-item">
                <div class="usercp-menu-icon"><i class="fa fa-bell"></i></div>
                <?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>

            </a>

        </div>

        <!-- CONTENT (Overview) -->
        <div class="usercp-content">
            
            <h1 class="usercp-title"><?php echo $_smarty_tpl->tpl_vars['OVERVIEW']->value;?>
</h1>

            <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
                <div class="ui success message"><?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>
</div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                <div class="ui error message">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>

            <!-- Info Grid -->
            <div class="ui stackable grid">
                
                <div class="eight wide column">
                    <div class="ui segment" style="background: rgba(0,0,0,0.05);">
                        <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['USER_DETAILS']->value;?>
</h3>
                        <div class="ui list">
                            <div class="item">
                                <span style="opacity:0.6;">Username:</span> 
                                <strong><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</strong>
                            </div>
                            <div class="item">
                                <span style="opacity:0.6;">Group:</span> 
                                <strong><?php echo $_smarty_tpl->tpl_vars['USER_GROUP']->value;?>
</strong>
                            </div>
                            <div class="item">
                                <span style="opacity:0.6;">Registered:</span> 
                                <strong><?php echo $_smarty_tpl->tpl_vars['REGISTER_DATE']->value;?>
</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="eight wide column">
                    <!-- Se ci sono altri widget utente, vanno qui -->
                </div>

            </div>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

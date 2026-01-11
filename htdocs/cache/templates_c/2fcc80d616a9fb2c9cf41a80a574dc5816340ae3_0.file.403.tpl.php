<?php
/* Smarty version 4.5.5, created on 2026-01-10 19:09:24
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/403.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_696295d4492f43_69507400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fcc80d616a9fb2c9cf41a80a574dc5816340ae3' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/403.tpl',
      1 => 1768068562,
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
function content_696295d4492f43_69507400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">
    <div class="error-page-container">
        
        <!-- Icona Lucchetto -->
        <div class="error-icon" style="color: #e74c3c;"> <!-- Rosso per pericolo -->
            <i class="fa fa-lock"></i>
        </div>

        <h1 class="error-title">403</h1>
        <h2 class="error-subtitle"><?php echo $_smarty_tpl->tpl_vars['403_TITLE']->value;?>
</h2>
        
        <p class="error-desc">
            <?php echo $_smarty_tpl->tpl_vars['403_CONTENT']->value;?>

            <br>It looks like you don't have access to this Page.
            <br>If you believe this to be an error, Contact the Staff on Discord.
        </p>

        <div style="display: flex; gap: 15px; justify-content: center;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="ui primary button large">
                <i class="fa fa-home"></i> Back to Home
            </a>
            
            <?php if (!(isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_URL']->value;?>
" class="ui secondary button large">
                    <i class="fa fa-sign-in-alt"></i> Login
                </a>
            <?php }?>
        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

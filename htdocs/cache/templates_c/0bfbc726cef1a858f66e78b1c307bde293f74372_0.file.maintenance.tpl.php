<?php
/* Smarty version 4.5.5, created on 2026-01-10 19:38:55
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69629cbf53a186_86309832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bfbc726cef1a858f66e78b1c307bde293f74372' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/maintenance.tpl',
      1 => 1768070333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69629cbf53a186_86309832 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php if ((isset($_smarty_tpl->tpl_vars['HTML_LANG']->value))) {
echo $_smarty_tpl->tpl_vars['HTML_LANG']->value;
} else { ?>en<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['HTML_RTL']->value)) && $_smarty_tpl->tpl_vars['HTML_RTL']->value == true) {?> dir="rtl" <?php }?>>
<head>
    <meta charset="<?php if ((isset($_smarty_tpl->tpl_vars['CHARS']->value))) {
echo $_smarty_tpl->tpl_vars['CHARS']->value;
} else { ?>utf-8<?php }?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</title>
    
    <!-- CSS FIXATO -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_CSS']->value, 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    <!-- Carica anche il nostro aetheria.css manualmente se non lo carica il loop -->
    <link rel="stylesheet" href="/custom/templates/Aetheria/css/aetheria.css?v=maintenance">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body id="page-maintenance">

    <!-- RIMOSSO .ui.container CHE SPOSTAVA A SINISTRA -->
    
    <!-- MAINTENANCE CARD -->
    <div class="maintenance-box">
        
        <div class="maintenance-icon">
            <i class="fa fa-tools"></i>
        </div>

        <h1 class="maintenance-title"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_TITLE']->value;?>
</h1>
        
        <div class="maintenance-message">
            <?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MESSAGE']->value;?>

        </div>

        <div class="ui divider" style="opacity: 0.2; margin: 30px 0;"></div>

        <div class="maintenance-actions">
            <button class="ui primary button large" onclick="window.location.reload()">
                <i class="fa fa-sync-alt"></i> Riprova
            </button>
            
            <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_LINK']->value;?>
" class="ui secondary button large">
                <i class="fa fa-user-shield"></i> Admin Login
            </a>
        </div>

    </div>

</body>
</html><?php }
}

<?php
/* Smarty version 4.5.5, created on 2026-01-10 19:03:51
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69629487bce575_83632213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6e87e7c1f3965c4b3887253d492e14dc0e4a8f' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/404.tpl',
      1 => 1768068228,
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
function content_69629487bce575_83632213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">
    <div class="error-page-container">
        
        <!-- Immagine o Icona Grande -->
        <div class="error-icon">
            <i class="fa fa-map-signs"></i> <!-- O usa <img> -->
        </div>

        <h1 class="error-title">404</h1>
        <h2 class="error-subtitle"><?php echo $_smarty_tpl->tpl_vars['404_TITLE']->value;?>
</h2>
        
        <p class="error-desc">
            <?php echo $_smarty_tpl->tpl_vars['404_CONTENT']->value;?>

            <br>It looks like you got lost in the Void of the End.
        </p>

        <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="ui primary button large">
            <i class="fa fa-home"></i> Back to Home
        </a>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.5.5, created on 2026-01-10 18:35:38
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69628deaacee37_93862994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2bfeb6aa9408b08d1adf0b47d6a87d32e1f57bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/terms.tpl',
      1 => 1745235519,
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
function content_69628deaacee37_93862994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['TERMS']->value;?>

</h2>

<div class="ui padded segment" id="terms">
    <?php echo $_smarty_tpl->tpl_vars['SITE_TERMS']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

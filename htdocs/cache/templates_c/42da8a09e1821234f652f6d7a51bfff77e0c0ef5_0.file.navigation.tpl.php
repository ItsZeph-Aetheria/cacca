<?php
/* Smarty version 4.5.5, created on 2026-01-04 18:35:37
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695aa4e98d4f43_71757599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42da8a09e1821234f652f6d7a51bfff77e0c0ef5' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/navigation.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695aa4e98d4f43_71757599 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui fluid vertical menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CC_NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <a class="item<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}

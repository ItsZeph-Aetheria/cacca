<?php
/* Smarty version 4.5.5, created on 2026-01-04 03:45:42
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/includes/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6959d4569f56f3_49354272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b54ac42c38c359240d43628319ad94f0000522' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/includes/update.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6959d4569f56f3_49354272 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
        <div class="alert bg-danger text-white">
    <?php } else { ?>
        <div class="alert bg-primary text-white alert-dismissible" id="updateAlert">
        <button type="button" class="close" id="closeUpdate" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
<br />
    <a href="<?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE']->value;?>
</a>
    <hr style="border-color: rgba(0,0,0,.1)" /> <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>

    <br /><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>

    </div>
<?php }
}
}

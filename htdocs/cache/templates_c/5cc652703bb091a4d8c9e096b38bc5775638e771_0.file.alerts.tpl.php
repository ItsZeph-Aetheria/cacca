<?php
/* Smarty version 4.5.5, created on 2026-01-04 03:45:42
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/includes/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6959d4569fa507_77953054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cc652703bb091a4d8c9e096b38bc5775638e771' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/includes/alerts.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6959d4569fa507_77953054 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
    <div class="alert bg-success text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</h5>
        <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value)) && count($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>
    <div class="alert bg-danger text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['ERRORS_TITLE']->value;?>
</h5>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}

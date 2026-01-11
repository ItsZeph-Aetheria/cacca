<?php
/* Smarty version 4.5.5, created on 2026-01-04 03:45:42
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6959d456a03ea9_87795535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34040aafb30d74f1437f83d86dd63fb04b15966e' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/scripts.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6959d456a03ea9_87795535 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {
if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#closeUpdate').click(function (event) {
            event.preventDefault();

            let expiry = new Date();
            let length = 3600000;
            expiry.setTime(expiry.getTime() + length);

            $.cookie('update-alert-closed', 'true', { path: '/', expires: expiry });
        });

        if ($.cookie('update-alert-closed') === 'true') {
            $('#updateAlert').hide();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value))) {
echo $_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value;?>

<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
  function toggleDarkLightMode() {
    $.post("<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_ACTION']->value;?>
", { token: "<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_TOKEN']->value;?>
" })
      .done(function () {
        window.location.reload();
      });

    return false;
  }
<?php echo '</script'; ?>
>
<?php }
}

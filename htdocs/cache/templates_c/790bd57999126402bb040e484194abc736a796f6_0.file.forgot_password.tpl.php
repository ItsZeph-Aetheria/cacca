<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:44:02
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962ac024a7d11_46166590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790bd57999126402bb040e484194abc736a796f6' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/forgot_password.tpl',
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
function content_6962ac024a7d11_46166590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
  <?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>

  <div class="sub header"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_INSTRUCTIONS']->value;?>
</div>
</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
<div class="ui error icon message">
  <i class="x icon"></i>
  <div class="content">
    <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

  </div>
</div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
<div class="ui success icon message">
  <i class="check icon"></i>
  <div class="content">
    <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

  </div>
</div>
<?php }?>

<div class="ui padded segment" id="forgot-password">
  <div class="ui stackable grid">
    <div class="ui centered row">
      <div class="ui sixteen wide tablet ten wide computer column">
        <form class="ui form" action="" method="post" id="form-forgot-password">
          <div class="field">
            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
            <input type="email" id="inputEmail" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" tabindex="1">
          </div>
          <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
          <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" tabindex="2">
        </form>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

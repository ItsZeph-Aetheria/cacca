<?php
/* Smarty version 4.5.5, created on 2026-01-10 20:07:02
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/notification_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962a3563c75b9_16737930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c1e1d20ab71aba4b8c9e4eb81ba48893027296' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user/notification_settings.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6962a3563c75b9_16737930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<div class="ui stackable grid" id="notification_settings">
    <div class="ui centered row">
        <div class="ui six wide tablet four wide computer column">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="ui ten wide tablet twelve wide computer column">
            <div class="ui segment">
                <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['NOTIFICATION_SETTINGS_TITLE']->value;?>
</h3>

                <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
                    <div class="ui success icon message">
                        <i class="check icon"></i>
                        <div class="content">
                            <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</div>
                            <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

                        </div>
                    </div>
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                    <div class="ui error icon message">
                        <i class="x icon"></i>
                        <div class="content">
                            <ul class="list">
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
                    </div>
                <?php }?>

                <form action="" method="post">
                    <table class="ui definition celled table">
                        <thead>
                            <tr>
                                <th class="four wide"></th>
                                <th class="six wide"><?php echo $_smarty_tpl->tpl_vars['ALERT']->value;?>
</th>
                                <th class="six wide"><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOTIFICATION_SETTINGS']->value, 'setting');
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['setting']->value['value'];?>
</td>
                                    <td>
                                        <div class="ui toggle checkbox">
                                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value['type'];?>
:alert"<?php if ($_smarty_tpl->tpl_vars['setting']->value['alert']) {?> checked<?php }?>>
                                            <label class="screenreader-only"><?php echo $_smarty_tpl->tpl_vars['ALERT']->value;?>
</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ui toggle checkbox">
                                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value['type'];?>
:email"<?php if ($_smarty_tpl->tpl_vars['setting']->value['email']) {?> checked<?php }?>>
                                            <label class="screenreader-only"><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
                                        </div>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>

                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                </form>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

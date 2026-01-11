<?php
/* Smarty version 4.5.5, created on 2026-01-04 03:45:42
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/core/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6959d4569ab8c0_19334601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb1fde9d48013f2461362a9ae40130683d937c4' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/core/registration.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_6959d4569ab8c0_19334601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['REGISTRATION']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['REGISTRATION']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <!-- Captcha warning -->
                            <?php if ((isset($_smarty_tpl->tpl_vars['CAPTCHA_WARNINGS']->value))) {?>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
</h5>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CAPTCHA_WARNINGS']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            <?php }?>

                            <form id="enableRegistration" action="" method="post">
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="enable_registration" value="0">
                                    <input name="enable_registration" id="InputEnableRegistration" type="checkbox"
                                        class="custom-control-input js-check-change" <?php if ($_smarty_tpl->tpl_vars['REGISTRATION_ENABLED']->value == 1) {?>
                                        checked<?php }?> value="1">
                                    <label class="custom-control-label" for="InputEnableRegistration">
                                        <?php echo $_smarty_tpl->tpl_vars['ENABLE_REGISTRATION']->value;?>

                                    </label>
                                </div>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            </form>

                            <form action="" method="post">
                                <div class="form-group custom-control custom-switch">
                                    <input name="verification" id="verification" type="checkbox"
                                        class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['EMAIL_VERIFICATION_VALUE']->value == 1) {?> checked<?php }?>>
                                    <label class="custom-control-label" for="verification">
                                        <?php echo $_smarty_tpl->tpl_vars['EMAIL_VERIFICATION']->value;?>

                                    </label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input id="InputEnableRecaptcha" name="enable_recaptcha" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['CAPTCHA_GENERAL_VALUE']->value == 1) {?>
                                        checked<?php }?>>
                                    <label class="custom-control-label" for="InputEnableRecaptcha">
                                        <?php echo $_smarty_tpl->tpl_vars['CAPTCHA_GENERAL']->value;?>

                                    </label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input id="InputEnableRecaptchaLogin" name="enable_recaptcha_login" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['CAPTCHA_LOGIN_VALUE']->value == 1) {?>
                                        checked<?php }?> />
                                    <label class="custom-control-label" for="InputEnableRecaptchaLogin">
                                        <?php echo $_smarty_tpl->tpl_vars['CAPTCHA_LOGIN']->value;?>

                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="InputCaptchaType"><?php echo $_smarty_tpl->tpl_vars['CAPTCHA_TYPE']->value;?>
</label>
                                    <select name="captcha_type" id="InputCaptchaType" class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CAPTCHA_OPTIONS']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['active']) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>

                                        </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="InputRecaptcha"><?php echo $_smarty_tpl->tpl_vars['CAPTCHA_SITE_KEY']->value;?>
</label>
                                    <input type="text" name="recaptcha" class="form-control" id="InputRecaptcha"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['CAPTCHA_SITE_KEY']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CAPTCHA_SITE_KEY_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputRecaptchaSecret"><?php echo $_smarty_tpl->tpl_vars['CAPTCHA_SECRET_KEY']->value;?>
</label>
                                    <input type="text" name="recaptcha_secret" class="form-control"
                                        id="InputRecaptchaSecret" placeholder="<?php echo $_smarty_tpl->tpl_vars['CAPTCHA_SECRET_KEY']->value;?>
"
                                        value="<?php echo $_smarty_tpl->tpl_vars['CAPTCHA_SECRET_KEY_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label
                                        for="InputRegistrationDisabledMessage"><?php echo $_smarty_tpl->tpl_vars['REGISTRATION_DISABLED_MESSAGE']->value;?>
</label>
                                    <textarea style="width:100%" rows="10" name="message"
                                        id="InputRegistrationDisabledMessage"><?php echo $_smarty_tpl->tpl_vars['REGISTRATION_DISABLED_MESSAGE_VALUE']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="InputValidationPromoteGroup"><?php echo $_smarty_tpl->tpl_vars['VALIDATE_PROMOTE_GROUP']->value;?>
</label> <span
                                        class="badge badge-info" data-toggle="popover" data-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                        data-content="<?php echo $_smarty_tpl->tpl_vars['VALIDATE_PROMOTE_GROUP_INFO']->value;?>
"><i
                                            class="fa fa-question"></i></span>
                                    <select class="form-control" id="InputValidationPromoteGroup" name="promote_group">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value->id == $_smarty_tpl->tpl_vars['VALIDATION_GROUP']->value) {?>
                                            selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['group']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="InputPurgeUsers"><?php echo $_smarty_tpl->tpl_vars['PURGE_USERS_AFTER']->value;?>
</label>
                                    <span class="badge badge-info">
                                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                           title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['PURGE_USERS_AFTER_INFO']->value;?>
"></i>
                                    </span>
                                    <input type="number" min="0" name="purge_users" class="form-control" id="InputPurgeUsers"
                                           value="<?php echo $_smarty_tpl->tpl_vars['PURGE_USERS_AFTER_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- End Content Wrapper -->
        </div>

    <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}

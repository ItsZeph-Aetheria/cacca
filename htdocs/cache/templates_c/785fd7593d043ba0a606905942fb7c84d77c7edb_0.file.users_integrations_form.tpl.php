<?php
/* Smarty version 4.5.5, created on 2026-01-04 18:20:34
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/core/users_integrations_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695aa162886082_65180950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785fd7593d043ba0a606905942fb7c84d77c7edb' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/core/users_integrations_form.tpl',
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
function content_695aa162886082_65180950 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USER_MANAGEMENT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['INTEGRATION_TITLE']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['SYNC_INTEGRATION']->value))) {?>
                                        <form role="form" action="" method="post" style="display:inline">
                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                            <input type="hidden" name="action" value="sync">
                                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SYNC_INTEGRATION']->value;?>
" class="btn btn-primary">
                                        </form>
                                        <?php }?>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form role="form" action="" method="post">
                                <div class="form-group">
                                    <label for="InputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                    <input type="text" name="username" class="form-control" id="InputUsername"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputIdentifier"><?php echo $_smarty_tpl->tpl_vars['IDENTIFIER']->value;?>
</label>
                                    <input type="text" name="identifier" class="form-control" id="InputIdentifier"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['IDENTIFIER']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['IDENTIFIER_VALUE']->value;?>
">
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="verified" value="0">
                                    <input type="checkbox" name="verified" class="custom-control-input"
                                        id="InputVerified" value="1" <?php if ($_smarty_tpl->tpl_vars['VERIFIED_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label" for="InputVerified"><?php echo $_smarty_tpl->tpl_vars['IS_VERIFIED']->value;?>
</label>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="hidden" name="action" value="details">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
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

</html><?php }
}

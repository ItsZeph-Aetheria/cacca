<?php
/* Smarty version 4.5.5, created on 2026-01-04 19:03:16
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/core/emails_test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695aab6418e077_92622782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '603c98f4b7183c9d089f9d81ecaa91beed0b71ea' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/core/emails_test.tpl',
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
function content_695aab6418e077_92622782 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['EMAILS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['SEND_TEST_EMAIL_INFO']->value))) {?>
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL_INFO']->value;?>

                                </div>
                            </div>
                            <br />
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SEND_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['SEND']->value;?>
</a>
                            <?php }?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
                            <div>
                                <?php echo $_smarty_tpl->tpl_vars['TEST_EMAIL_QUERY']->value;?>

                                <ul>
                                    <li><?php echo $_smarty_tpl->tpl_vars['TEST_EMAIL_SUGGEST_1']->value;?>
</li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['TEST_EMAIL_SUGGEST_2']->value;?>
</li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['TEST_EMAIL_SUGGEST_3']->value;?>
</li>
                                </ul>
                            </div>
                            <?php }?>
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

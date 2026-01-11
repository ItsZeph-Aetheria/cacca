<?php
/* Smarty version 4.5.5, created on 2026-01-04 18:20:24
  from '/Applications/MAMP/htdocs/custom/panel_templates/Default/collections/dashboard_stats/recent_posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695aa158d20987_51412119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a5a516e6385583a3b6b20879cd8b70929adb76' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/panel_templates/Default/collections/dashboard_stats/recent_posts.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695aa158d20987_51412119 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card stats-card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}

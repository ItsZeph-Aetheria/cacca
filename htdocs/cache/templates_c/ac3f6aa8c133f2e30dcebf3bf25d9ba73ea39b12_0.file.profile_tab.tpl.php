<?php
/* Smarty version 4.5.5, created on 2026-01-05 16:13:46
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695bd52acff403_69053489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3f6aa8c133f2e30dcebf3bf25d9ba73ea39b12' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/profile_tab.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bd52acff403_69053489 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['PF_LATEST_POSTS_TITLE']->value;?>

</h3>

<?php if ((isset($_smarty_tpl->tpl_vars['NO_POSTS']->value))) {?>
<div class="ui info message">
    <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['NO_POSTS']->value;?>

    </div>
</div>
<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PF_LATEST_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<h4 class="ui dividing header">
    <div class="sub header right floated" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_friendly'];?>

    </div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
    <div class="ui wide popup">
        <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h4>
        <?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>

    </div>
</h4>
<div class="forum_post"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}

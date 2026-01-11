<?php
/* Smarty version 4.5.5, created on 2026-01-04 03:51:50
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/search_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6959d5c6bc0881_27575045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d3f5ba92dd9ec2be1adcbbd5fcc458863e4591' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/search_results.tpl',
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
function content_6959d5c6bc0881_27575045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header" display="inline block">
    <?php echo $_smarty_tpl->tpl_vars['SEARCH_RESULTS']->value;?>

</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['PAGINATION']->value))) {?>
<br />
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

<?php }?>

<div class="res right floated">
    <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_SEARCH_URL']->value;?>
" class="ui primary button"><?php echo $_smarty_tpl->tpl_vars['NEW_SEARCH']->value;?>
</a>
</div>

<?php if (empty($_smarty_tpl->tpl_vars['RESULTS']->value)) {?>
<div class="ui error message">
    <?php echo $_smarty_tpl->tpl_vars['NO_RESULTS']->value;?>

</div>
<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RESULTS']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
<div class="ui segments" id="forum-search-result">
    <div class="ui padded attached segment">
        <h3 class="ui header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_url'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['result']->value['topic_title'];?>
</a>
            <div class="ui wide popup">
                <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['result']->value['topic_title'];?>
</h4>
                <a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_author_profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_author_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['post_author'];?>
</a> |
                <?php echo $_smarty_tpl->tpl_vars['result']->value['post_date_full'];?>

            </div>
            <div class="sub header">
                <a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_author_profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_author_style'];?>
"
                    data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['result']->value['post_author_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['post_author'];?>
</a> &middot; <span
                    data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['post_date_friendly'];?>
</span>
            </div>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>

    </div>
    <div class="ui bottom attached secondary segment">
        <div class="right aligned">
            <a class="ui mini primary button" href="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['READ_FULL_POST']->value;?>
</a>
        </div>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['PAGINATION']->value))) {
echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

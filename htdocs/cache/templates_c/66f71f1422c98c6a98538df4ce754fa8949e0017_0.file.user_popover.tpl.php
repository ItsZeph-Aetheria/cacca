<?php
/* Smarty version 4.5.5, created on 2026-01-04 18:36:15
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/user_popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695aa50fb45cd5_91984813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f71f1422c98c6a98538df4ce754fa8949e0017' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/user_popover.tpl',
      1 => 1745235519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695aa50fb45cd5_91984813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'/Applications/MAMP/htdocs/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<div id="user-popup">
    <div class="header">
        <img class="ui tiny circular image" src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" />
        <h4 class="ui header" style="<?php echo $_smarty_tpl->tpl_vars['STYLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h4>
        <?php if (count($_smarty_tpl->tpl_vars['GROUPS']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group_html');
$_smarty_tpl->tpl_vars['group_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_html']->value) {
$_smarty_tpl->tpl_vars['group_html']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['group_html']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <div class="ui label"><?php echo $_smarty_tpl->tpl_vars['GUEST']->value;?>
</div>
        <?php }?>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['REGISTERED']->value))) {?>
        <div class="ui divider"></div>
        <div class="ui list">
            <div class="item">
                <span class="text"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['REGISTERED']->value,'/[:].*/','');?>
</span>
                <div class="description right floated" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['REGISTERED_DATE']->value;?>
"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['REGISTERED']->value,'/^[^:]+:\h*/','');?>
</b></div>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['LAST_SEEN']->value))) {?>
                <div class="item">
                    <span class="text"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['LAST_SEEN']->value,'/[:].*/','');?>
</span>
                    <div class="description right floated" data-tooltip="<?php echo $_smarty_tpl->tpl_vars['LAST_SEEN_DATE']->value;?>
"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['LAST_SEEN']->value,'/^[^:]+:\h*/','');?>
</b></div>
                </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['TOPICS']->value)) && (isset($_smarty_tpl->tpl_vars['POSTS']->value))) {?>
                <div class="item">
                    <span class="text"><?php echo smarty_modifier_capitalize(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['TOPICS']->value,'/[0-9]+/',''));?>
</span>
                    <div class="description right floated"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['TOPICS']->value,'/[^0-9]+/','');?>
</b></div>
                </div>
                <div class="item">
                    <span class="text"><?php echo smarty_modifier_capitalize(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['POSTS']->value,'/[0-9]+/',''));?>
</span>
                    <div class="description right floated"><b><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['POSTS']->value,'/[^0-9]+/','');?>
</b></div>
                </div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php }
}

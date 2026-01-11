<?php
/* Smarty version 4.5.5, created on 2026-01-10 21:04:28
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962b0cc261465_95636639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153fdc9666368077249e1cd390efc08a233e1277' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom.tpl',
      1 => 1768075436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:custom_pages/news.tpl' => 1,
    'file:custom_pages/guides.tpl' => 1,
    'file:custom_pages/store.tpl' => 1,
    'file:custom_pages/status.tpl' => 1,
    'file:custom_pages/article.tpl' => 1,
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6962b0cc261465_95636639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('page_title_lower', mb_strtolower((string) $_smarty_tpl->tpl_vars['TITLE']->value, 'UTF-8'));?>

<?php if ($_smarty_tpl->tpl_vars['page_title_lower']->value == 'news') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:custom_pages/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['page_title_lower']->value == 'guides') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:custom_pages/guides.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['page_title_lower']->value == 'store') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:custom_pages/store.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['page_title_lower']->value == 'status') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:custom_pages/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif (substr((string) $_smarty_tpl->tpl_vars['TITLE']->value, (int) 0, (int) 8) == 'Article:') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:custom_pages/article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="ui container aetheria-container">
        <div class="ui segment">
            <h1 class="ui header"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h1>
            <div class="ui divider"></div>
            <div class="description forum_post"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}

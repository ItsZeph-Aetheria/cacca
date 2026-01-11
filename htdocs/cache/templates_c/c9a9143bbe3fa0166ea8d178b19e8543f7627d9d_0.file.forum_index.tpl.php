<?php
/* Smarty version 4.5.5, created on 2026-01-05 16:54:59
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/forum_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695bded3d64aa6_15420054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a9143bbe3fa0166ea8d178b19e8543f7627d9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/forum/forum_index.tpl',
      1 => 1767628495,
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
function content_695bded3d64aa6_15420054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <div class="ui stackable grid">
        <div class="ui eleven wide column">
            
            <!-- Breadcrumbs -->
            <div class="ui breadcrumb" style="margin-bottom: 20px; font-size: 1.1rem;">
                <a class="section" href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
">Home</a>
                <i class="right angle icon divider"></i>
                <div class="active section">Forums</div>
            </div>

            <!-- CONTROLLO PRINCIPALE: Esistono i forum? -->
            <?php if ((isset($_smarty_tpl->tpl_vars['FORUMS']->value)) && count($_smarty_tpl->tpl_vars['FORUMS']->value) > 0) {?>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORUMS']->value, 'forum', false, 'category');
$_smarty_tpl->tpl_vars['forum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->do_else = false;
?>
                    
                    <!-- Controllo se la categoria ha sotto-forum -->
                    <?php if ((isset($_smarty_tpl->tpl_vars['forum']->value['sub_forums'])) && count($_smarty_tpl->tpl_vars['forum']->value['sub_forums']) > 0) {?>
                        <div class="forum-category-block">
                            
                            <!-- Header Categoria -->
                            <div class="forum-category-header">
                                <span><?php echo $_smarty_tpl->tpl_vars['forum']->value['title'];?>
</span>
                            </div>
                            
                            <!-- Lista Forum (Nodes) -->
                            <div class="forum-nodes-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['sub_forums'], 'subforum');
$_smarty_tpl->tpl_vars['subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->do_else = false;
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['link'];?>
" class="forum-node-row">
                                        
                                        <!-- Icona -->
                                        <div class="node-icon">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value['icon'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['subforum']->value['icon'], $tmp) > 0) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['subforum']->value['icon'];?>

                                            <?php } else { ?>
                                                <i class="fa fa-comments"></i>
                                            <?php }?>
                                        </div>
                                        
                                        <!-- Contenuto -->
                                        <div class="node-content">
                                            <span class="node-title"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['forum_title'];?>
</span>
                                            <div class="node-desc">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value['forum_description']))) {
echo $_smarty_tpl->tpl_vars['subforum']->value['forum_description'];
}?>
                                            </div>
                                        </div>
                                        
                                        <!-- Statistiche (Desktop) -->
                                        <div class="node-stats">
                                            <div><strong><?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value['topics']))) {
echo $_smarty_tpl->tpl_vars['subforum']->value['topics'];
} else { ?>0<?php }?></strong> Topics</div>
                                            <div><strong><?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value['posts']))) {
echo $_smarty_tpl->tpl_vars['subforum']->value['posts'];
} else { ?>0<?php }?></strong> Posts</div>
                                        </div>
                                        
                                        <!-- Freccia iOS -->
                                        <div class="node-chevron">
                                            <i class="fa fa-chevron-right"></i>
                                        </div>

                                    </a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php } else { ?>
                <!-- MESSAGGIO ERRORE VISIBILE SE NON CI SONO FORUM -->
                <div class="ui error message">
                    <div class="header">Nessun Forum Trovato</div>
                    <p>Sembra che non ci siano categorie o forum visibili per il tuo account.</p>
                    <p><em>Admin: Controlla di aver creato i forum nel pannello e i permessi.</em></p>
                </div>
            <?php }?>
            
        </div>

        <!-- Sidebar (Widget) -->
        <div class="ui five wide column">
            <?php if ((isset($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <div class="widget-wrapper-ios" style="margin-bottom: 20px;">
                        <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.5.5, created on 2026-01-10 23:53:07
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom_pages/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962d853b3f8e0_08078652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a431a847777fdbcc7171c3672a0f0fac7a650aa' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom_pages/article.tpl',
      1 => 1768085431,
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
function content_6962d853b3f8e0_08078652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('ARTICLE_CONFIG', array("Article: Breaking News: Aetheria is Opening!"=>array("type"=>"news","date"=>"05 Jan 2026","img"=>"https://wallpapers.com/images/hd/minecraft-ender-dragon-4k-7209-x-4374-9k32s0d1f8.jpg","bg_light"=>"linear-gradient(135deg, #f5f7fa, #c3cfe2)","bg_dark"=>"linear-gradient(135deg, #0f2027, #203a43, #2c5364)"),"Article: Getting Started"=>array("type"=>"guide","date"=>"12 Feb 2026","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2023/10/Realm_Guide.jpg","bg_light"=>"#f9ff9e","bg_dark"=>"#b8bb03"),"Article: LifeSteal Mechanics"=>array("type"=>"guide","date"=>"12 Feb 2026","img"=>"https://lifesteal-network.ghost.io/content/images/2024/01/wgwgewe.png","bg_light"=>"#ff9e9e","bg_dark"=>"#ff4949"),"Article: Economy and Shop"=>array("type"=>"guide","date"=>"12 Feb 2026","img"=>"https://lifesteal-network.ghost.io/content/images/2024/01/gwwse.png","bg_light"=>"#ffe09e","bg_dark"=>"#facf0f"),"Article: Proximity Chat"=>array("type"=>"guide","date"=>"12 Feb 2026","img"=>"https://lifesteal-network.ghost.io/content/images/2024/02/fregerghreugh.png","bg_light"=>"#ffcd9e","bg_dark"=>"#d88b4d"),"Article: Rules"=>array("type"=>"guide","date"=>"12 Feb 2026","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/10/Rules_Guide.jpg","bg_light"=>"#a6ff9e","bg_dark"=>"#83d16b"),"Article: FarLands"=>array("type"=>"guide","date"=>"12 Feb 2026","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/06/Adventure_World_Guide.jpg","bg_light"=>"#daa156","bg_dark"=>"#c27644"),"Article: Join the Discord !"=>array("type"=>"news","date"=>"10 Jan 2026","img"=>"https://static-www.adweek.com/wp-content/uploads/2021/07/DiscordLogo.jpg?w=890","bg_light"=>"#a0c8f5","bg_dark"=>"#82a5f0")));?>

<?php $_smarty_tpl->_assignInScope('CURRENT_ART', (($tmp = $_smarty_tpl->tpl_vars['ARTICLE_CONFIG']->value[$_smarty_tpl->tpl_vars['TITLE']->value] ?? null)===null||$tmp==='' ? null ?? null : $tmp));?>


<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <!-- BOX ARTICOLO -->
    <div class="article-container"
         style="<?php if ($_smarty_tpl->tpl_vars['CURRENT_ART']->value) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['CURRENT_ART']->value['bg_light']))) {?>--art-bg-light: <?php echo $_smarty_tpl->tpl_vars['CURRENT_ART']->value['bg_light'];?>
;<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['CURRENT_ART']->value['bg_dark']))) {?>--art-bg-dark: <?php echo $_smarty_tpl->tpl_vars['CURRENT_ART']->value['bg_dark'];?>
;<?php }?>
                <?php }?>">
        
        <!-- Immagine Copertina -->
        <?php if ($_smarty_tpl->tpl_vars['CURRENT_ART']->value && (isset($_smarty_tpl->tpl_vars['CURRENT_ART']->value['img'])) && $_smarty_tpl->tpl_vars['CURRENT_ART']->value['img'] != '') {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['CURRENT_ART']->value['img'];?>
" class="article-hero-image" alt="Cover">
        <?php }?>

        <!-- Navigazione DINAMICA -->
        <div class="article-nav">
            
                        <?php if ($_smarty_tpl->tpl_vars['CURRENT_ART']->value && (isset($_smarty_tpl->tpl_vars['CURRENT_ART']->value['type'])) && $_smarty_tpl->tpl_vars['CURRENT_ART']->value['type'] == 'guide') {?>
                <a href="./index.php?route=/guides" class="back-btn">
                    <i class="fa fa-arrow-left"></i> Back to Guides
                </a>
            <?php } else { ?>
                <a href="./index.php?route=/news" class="back-btn">
                    <i class="fa fa-arrow-left"></i> Back to News
                </a>
            <?php }?>
            
            <!-- Data -->
            <div class="article-date">
                <i class="fa fa-clock"></i> 
                <?php if ($_smarty_tpl->tpl_vars['CURRENT_ART']->value && (isset($_smarty_tpl->tpl_vars['CURRENT_ART']->value['date']))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['CURRENT_ART']->value['date'];?>

                <?php } else { ?>
                    Oggi
                <?php }?>
            </div>
        </div>

        <!-- Titolo -->
        <h1 class="article-title">
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['TITLE']->value,'Article:','');?>

        </h1>

        <div class="ui divider"></div>

        <!-- CONTENUTO -->
        <div class="article-content forum_post">
            <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

        </div>

        <!-- Footer -->
        <div class="article-footer">
            <p>Any questions ? Ask for support on Discord!</p>
            <a href="https://discord.gg/CEPyDKM2" target="_blank" class="ui button primary">
                <i class="fab fa-discord"></i> Join Discord
            </a>
        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

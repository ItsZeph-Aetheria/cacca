<?php
/* Smarty version 4.5.5, created on 2026-01-10 23:43:28
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom_pages/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962d610df7055_59225863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e34bdc3af42403a054c318aec6a510fb2a0a3db7' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom_pages/news.tpl',
      1 => 1768085006,
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
function content_6962d610df7055_59225863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('CUSTOM_NEWS', array(array("title"=>"Breaking News: Aetheria is Opening !","date"=>"12 Feb 2026","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2025/01/anniversary_blog-2.jpg","desc"=>"Aetheria, Be ready to explore distorted generation, ancient temples, fight for your live against Custom Bosses and much more ! For more info, read the full post by clicking on READ MORE below.","link"=>"./index.php?route=/news/opening","tag"=>"NEWS","color"=>"blue","bg_light"=>"#f49cbb","bg_dark"=>"#dd2d4a"),array("title"=>"Join the discord Community !","date"=>"10 Jan 2026","img"=>"https://static-www.adweek.com/wp-content/uploads/2021/07/DiscordLogo.jpg?w=890","desc"=>"Join the Discord of Aetheria to get fully in touch with Staff and Members !","link"=>"./index.php?route=/news/discord","tag"=>"NEWS","color"=>"blue","bg_light"=>"#a0c8f5","bg_dark"=>"#82a5f0")));?>


<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <!-- Header Box -->
    <div class="news-header-box">
        <h1 class="ui header" style="font-size: 3rem; margin-bottom: 10px; margin-top: 0;">
            Latest News
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.8; max-width: 700px; margin: 0 auto;">
           Remain updated on everything that happens on <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
!
        </p>
    </div>

    <!-- NEWS GRID -->
    <div class="updates-grid">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_NEWS']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
            <!-- Iniettiamo le variabili CSS custom -->
            <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
" class="update-card" 
               style="<?php if ($_smarty_tpl->tpl_vars['news']->value['bg_light']) {?>--news-bg-light: <?php echo $_smarty_tpl->tpl_vars['news']->value['bg_light'];?>
;<?php }?> <?php if ($_smarty_tpl->tpl_vars['news']->value['bg_dark']) {?>--news-bg-dark: <?php echo $_smarty_tpl->tpl_vars['news']->value['bg_dark'];?>
;<?php }?>">
                
                <!-- Immagine -->
                <div class="update-thumb" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
');">
                    <div class="update-tag-float">
                        <span class="ui label <?php echo $_smarty_tpl->tpl_vars['news']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['tag'];?>
</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="update-content">
                    <div class="update-meta">
                        <span style="color: var(--primary-accent); font-weight:bold;">
                            <i class="fa fa-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>

                        </span>
                    </div>

                    <div class="update-title">
                        <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                    </div>

                    <div class="update-excerpt">
                        <?php echo $_smarty_tpl->tpl_vars['news']->value['desc'];?>

                    </div>

                    <div class="update-footer">
                        <span style="font-weight:bold; opacity: 0.8; font-size:0.9rem;">
                            Read More &rarr;
                        </span>
                    </div>
                </div>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

    <div style="height: 50px;"></div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.5.5, created on 2026-01-10 23:33:28
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom_pages/guides.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6962d3b8cfb243_59447031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fa3ff6a7f12a327ee4285817d12285e4c66d59c' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/custom_pages/guides.tpl',
      1 => 1768084238,
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
function content_6962d3b8cfb243_59447031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('GUIDES_LIST', array(array("title"=>"Getting Started","desc"=>"The first steps on Aetheria: general guide","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2023/10/Realm_Guide.jpg","link"=>"./index.php?route=/guides/getting-started","bg_light"=>"#bbdefb","bg_dark"=>"#D1C300"),array("title"=>"LifeSteal Mechanics","desc"=>"What is LifeSteal and how does it work on Aetheria.","img"=>"https://lifesteal-network.ghost.io/content/images/2024/01/wgwgewe.png","link"=>"./index.php?route=/guides/lifesteal","bg_light"=>"#ffebee","bg_dark"=>"#b71c1c"),array("title"=>"Economy & Shop","desc"=>"Everything you have to know about Economy, Auction House and Player Shops !","img"=>"https://lifesteal-network.ghost.io/content/images/2024/01/gwwse.png","link"=>"./index.php?route=/guides/economy","bg_light"=>"#fff8e1","bg_dark"=>"#f57f17"),array("title"=>"Proximity Chat","desc"=>"How to use proximity chat to speak in-game","img"=>"https://lifesteal-network.ghost.io/content/images/2024/02/fregerghreugh.png","link"=>"./index.php?route=/guides/voice-chat","bg_light"=>"#f3e5f5","bg_dark"=>"#F55B18"),array("title"=>"Server Rules","desc"=>"All the rules you need to follow to avoid getting BANNED!","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/10/Rules_Guide.jpg","link"=>"./index.php?route=/rules","bg_light"=>'',"bg_dark"=>"#51C458"),array("title"=>"Farlands","desc"=>"How do the FarLands work on our server ?","img"=>"https://assets.originrealms.com/cdn-cgi/image/format=webp,quality=90,fit=scale-down,width=1920/2022/06/Adventure_World_Guide.jpg","link"=>"./index.php?route=/guides/farlands","bg_light"=>'',"bg_dark"=>"#C47D51")));?>


<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container aetheria-container">

    <!-- HEADER -->
    <div class="news-header-box">
        <h1 class="ui header" style="font-size: 3rem; margin-bottom: 10px; margin-top: 0;">
            Wiki & Guide
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.8; max-width: 700px; margin: 0 auto;">
            All the knowledge of <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 in one place.
        </p>
    </div>

    <!-- GUIDES GRID -->
    <div class="guides-index-grid">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUIDES_LIST']->value, 'guide');
$_smarty_tpl->tpl_vars['guide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['guide']->value) {
$_smarty_tpl->tpl_vars['guide']->do_else = false;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['guide']->value['link'];?>
" class="guide-index-card"
               style="<?php if ($_smarty_tpl->tpl_vars['guide']->value['bg_light']) {?>--guide-bg-light: <?php echo $_smarty_tpl->tpl_vars['guide']->value['bg_light'];?>
;<?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['guide']->value['bg_dark']) {?>--guide-bg-dark: <?php echo $_smarty_tpl->tpl_vars['guide']->value['bg_dark'];?>
;<?php }?>">
                
                <!-- Immagine Quadrata -->
                <img src="<?php echo $_smarty_tpl->tpl_vars['guide']->value['img'];?>
" class="guide-card-img" alt="Icon">

                <!-- Text -->
                <div class="guide-card-content">
                    <h3 class="guide-card-title"><?php echo $_smarty_tpl->tpl_vars['guide']->value['title'];?>
</h3>
                    <p class="guide-card-desc"><?php echo $_smarty_tpl->tpl_vars['guide']->value['desc'];?>
</p>
                </div>

                <!-- Freccia -->
                <div class="guide-card-arrow">
                    <i class="fa fa-chevron-right"></i>
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

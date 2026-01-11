<?php
/* Smarty version 4.5.5, created on 2026-01-05 03:57:15
  from '/Applications/MAMP/htdocs/custom/templates/Aetheria/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_695b288bdf4a91_33502506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef08fdbdec6f2b664cd70d0232f6000485ed4f8a' => 
    array (
      0 => '/Applications/MAMP/htdocs/custom/templates/Aetheria/footer.tpl',
      1 => 1767581796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695b288bdf4a91_33502506 (Smarty_Internal_Template $_smarty_tpl) {
?></div> <!-- End of #wrapper -->

    <!-- CONFIGURAZIONE PISTONE (Mettila qui o nel template.php) -->
    <?php $_smarty_tpl->_assignInScope('PISTON_OPEN', "https://i.ibb.co/DH3Q4V98/5bc1e56cd3c19-removebg-preview.png");?>
    <?php $_smarty_tpl->_assignInScope('PISTON_CLOSED', "https://i.ibb.co/KchbpZJ7/5bc1e56cd3c19-1-removebg-preview.png");?>

    <!-- FOOTER START -->
    <footer class="aetheria-footer">
        
        <!-- PISTONE ANCORATO (Sinistra) -->
        <div id="piston-wrapper">
            <img src="<?php echo $_smarty_tpl->tpl_vars['PISTON_OPEN']->value;?>
"   class="piston-img piston-visible" alt="Piston Open">
            <img src="<?php echo $_smarty_tpl->tpl_vars['PISTON_CLOSED']->value;?>
" class="piston-img piston-hidden"  alt="Piston Closed">
        </div>

        <!-- Social Icons -->
        <?php if ((isset($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value)) && count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>
            <div class="footer-socials">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['link'];?>
" target="_blank" class="social-btn" title="<?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>

                    </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <!-- Links -->
        <div class="footer-links">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" class="footer-link">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <a href="<?php echo $_smarty_tpl->tpl_vars['TERMS_LINK']->value;?>
" class="footer-link"><?php echo $_smarty_tpl->tpl_vars['TERMS_TEXT']->value;?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_LINK']->value;?>
" class="footer-link"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_TEXT']->value;?>
</a>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright">
            &copy; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
 <?php echo date('Y');?>
. Powered by <a href="https://namelessmc.com" target="_blank" style="font-weight:bold; color:inherit;">NamelessMC</a>.
            <br>Template <strong>Aetheria</strong>.
        </div>

    </footer>

    <!-- GLOBAL MODALS & JS -->
    <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
            <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    
    <?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
    </body>
    </html>
    <?php }
}
}

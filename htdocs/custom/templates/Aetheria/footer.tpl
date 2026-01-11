</div> <!-- End of #wrapper -->

    <!-- CONFIGURAZIONE PISTONE (Mettila qui o nel template.php) -->
    {assign var="PISTON_OPEN"   value="https://i.ibb.co/DH3Q4V98/5bc1e56cd3c19-removebg-preview.png"}
    {assign var="PISTON_CLOSED" value="https://i.ibb.co/KchbpZJ7/5bc1e56cd3c19-1-removebg-preview.png"}

    <!-- FOOTER START -->
    <footer class="aetheria-footer">
        
        <!-- PISTONE ANCORATO (Sinistra) -->
        <div id="piston-wrapper">
            <img src="{$PISTON_OPEN}"   class="piston-img piston-visible" alt="Piston Open">
            <img src="{$PISTON_CLOSED}" class="piston-img piston-hidden"  alt="Piston Closed">
        </div>

        <!-- Social Icons -->
        {if isset($SOCIAL_MEDIA_ICONS) && count($SOCIAL_MEDIA_ICONS) > 0}
            <div class="footer-socials">
                {foreach from=$SOCIAL_MEDIA_ICONS item=icon}
                    <a href="{$icon.link}" target="_blank" class="social-btn" title="{$icon.text}">
                        {$icon.text}
                    </a>
                {/foreach}
            </div>
        {/if}

        <!-- Links -->
        <div class="footer-links">
            {foreach from=$FOOTER_NAVIGATION key=name item=item}
                <a href="{$item.link}" target="{$item.target}" class="footer-link">
                    {$item.icon} {$item.title}
                </a>
            {/foreach}
            
            <a href="{$TERMS_LINK}" class="footer-link">{$TERMS_TEXT}</a>
            <a href="{$PRIVACY_LINK}" class="footer-link">{$PRIVACY_TEXT}</a>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright">
            &copy; {$smarty.const.SITE_NAME} {'Y'|date}. Powered by <a href="https://namelessmc.com" target="_blank" style="font-weight:bold; color:inherit;">NamelessMC</a>.
            <br>Template <strong>Aetheria</strong>.
        </div>

    </footer>

    <!-- GLOBAL MODALS & JS -->
    {if isset($GLOBAL_WARNING_TITLE)}
        {* ... codice modale esistente ... *}
    {/if}

    {foreach from=$TEMPLATE_JS item=script}
        {$script}
    {/foreach}

    {* ... resto del codice JS/Update ... *}

    {if !isset($EXCLUDE_END_BODY)}
    </body>
    </html>
    {/if}
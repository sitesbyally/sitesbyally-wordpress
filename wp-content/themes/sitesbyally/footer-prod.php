<?php
// Bail if Divi Theme Builder footer is active
if ( et_theme_builder_overrides_layout( ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE ) ) {
    return;
}
?>

<footer id="sba-footer" class="footer">
    <div class="container">
        <div class="footer__left">
            <?php echo esc_html( get_option( 'custom_footer_text', 'This site was designed and built by me! Checkout the theme code on GitHub.' ) ); ?>
        </div>
        <div class="footer__right">
            &copy; <?php echo date("Y"); ?> Sites By Ally
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

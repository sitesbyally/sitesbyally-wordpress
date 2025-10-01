<?php
function sba_enqueue_styles() {
    $parenthandle = 'divi-style';
    $theme = wp_get_theme();

    // 1️⃣ Parent Divi CSS
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );

    // 2️⃣ Compiled child CSS
    wp_enqueue_style(
        'child-custom',
        get_stylesheet_directory_uri() . '/css/custom.css',
        array( $parenthandle ),
        filemtime( get_stylesheet_directory() . '/css/custom.css' )
    );

    // 3️⃣ Google Fonts
    $google_fonts_url = 'https://fonts.googleapis.com/css2?family=Bad+Script&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap';
    wp_enqueue_style(
        'sba-google-fonts',
        esc_url( $google_fonts_url ),
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'sba_enqueue_styles' );

/**
 * 4️⃣ Preconnect to Google Fonts to improve performance
 */
function sba_preconnect_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'sba_preconnect_google_fonts', 1 );



// Disable unused Divi Builder modules
function custom_disable_divi_modules() {
    if ( class_exists('ET_Builder_Module') ) {
        remove_shortcode('et_pb_accordion');
        remove_shortcode('et_pb_audio');
        remove_shortcode('et_pb_bar_counter');
        remove_shortcode('et_pb_blurb');
        remove_shortcode('et_pb_call_to_action');
        remove_shortcode('et_pb_circle_counter');
        remove_shortcode('et_pb_comments');
        remove_shortcode('et_pb_contact_form');
        remove_shortcode('et_pb_countdown_timer');
        remove_shortcode('et_pb_email_option');
        remove_shortcode('et_pb_portfolio');
        remove_shortcode('et_pb_gallery');
        remove_shortcode('et_pb_login');
        remove_shortcode('et_pb_map');
        remove_shortcode('et_pb_number_counter');
        remove_shortcode('et_pb_person');
        remove_shortcode('et_pb_post_navigation');
        remove_shortcode('et_pb_post_slider');
        remove_shortcode('et_pb_pricing_table');
        remove_shortcode('et_pb_search');
        remove_shortcode('et_pb_sidebar');
        remove_shortcode('et_pb_slider');
        remove_shortcode('et_pb_tabs');
        remove_shortcode('et_pb_testimonial');
        remove_shortcode('et_pb_toggle');
        remove_shortcode('et_pb_video');
    }
}
add_action('et_builder_ready', 'custom_disable_divi_modules');

// Register footer text setting
function custom_footer_setting() {
    add_option( 'custom_footer_text', '© ' . date('Y') . ' My Website' );
    register_setting( 'general', 'custom_footer_text', array(
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '',
    ));

    add_settings_field(
        'custom_footer_text',
        'Custom Footer Text',
        'custom_footer_text_input',
        'general'
    );
}
add_action( 'admin_init', 'custom_footer_setting' );

function custom_footer_text_input() {
    $value = get_option( 'custom_footer_text', '' );
    echo '<input type="text" id="custom_footer_text" name="custom_footer_text" value="' . esc_attr( $value ) . '" class="regular-text">';
}

// Force WordPress to always load child theme footer.php
function sba_force_child_footer() {
    // Prevent Divi from running its own footer output
    remove_all_actions( 'get_footer' );

    // Load child theme footer.php manually
    require get_stylesheet_directory() . '/footer.php';
}
add_action( 'get_footer', 'sba_force_child_footer', 1 );



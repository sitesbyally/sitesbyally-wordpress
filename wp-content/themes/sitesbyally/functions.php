<?php
/**
 * Enqueue styles and scripts for the child theme using Vite
 */
function sba_enqueue_assets() {
    $parenthandle = 'divi-style';
    $theme = wp_get_theme();

    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );

    $dist_path = get_stylesheet_directory_uri() . '/dist/';
    $dist_dir  = get_stylesheet_directory() . '/dist/';

    $style_file = $dist_dir . 'style.css';
    $js_file    = $dist_dir . 'main.js';

    if ( file_exists($style_file) ) {
        wp_enqueue_style(
            'sba-child-style',
            $dist_path . 'style.css',
            array( $parenthandle ),
            filemtime($style_file)
        );
    }

    if ( file_exists($js_file) ) {
        wp_enqueue_script(
            'sba-child-js',
            $dist_path . 'main.js',
            array(),
            filemtime($js_file),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'sba_enqueue_assets');


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



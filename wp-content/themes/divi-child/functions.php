<?php
function dt_enqueue_styles() {
    $parenthandle = 'divi-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(), // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') 
    );
}
add_action( 'wp_enqueue_scripts', 'dt_enqueue_styles' );


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

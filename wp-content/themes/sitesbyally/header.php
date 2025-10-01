<?php
/**
 * Custom Child Theme Header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page-container">

<header id="sba-header" class="header">
    <div class="container">
        <?php
        // Get logo from Divi settings or fallback
        $logo = et_get_option( 'divi_logo' );
        if ( empty( $logo ) ) {
            $logo = get_template_directory_uri() . '/images/logo.png';
        }
        ?>
        <div class="header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="50" height="50" />
            </a>
        </div>

        <nav id="sba-nav" class="header__nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'menu_class' => 'nav',
                'menu_id' => 'sba-menu',
                'fallback_cb' => false,
            ) );
            ?>
        </nav>
</header>

<div id="main-area">
<?php
// Hook for content after header
do_action( 'et_before_main_content' );
?>

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

        <div class="menu--mobile">
         <div class="menu--mobile__header">
               <div class="logo-holder">
                     <?php 
                           $header_logo = $header_options['logo'];
                           if ($header_logo) {
                              echo '<a href="' . site_url() . '"><img class="header-logo" src="' . $header_logo['url'] . '" alt="SBA Logo" /></a>';
                           }
                     ?>
               </div>        
               <div class="header__mobile-toggle mobile-menu-btn">
                  <span class="bar1"></span> 
                  <span class="bar2"></span> 
                  <span class="bar3"></span> 
               </div>
         </div>
         <div class="row mobilemenu hidden">
               <nav class="nav--mobile">
                  <span class="search-bar"><?php get_search_form(); ?></span>
                  <?php thi_main_nav_menu() ?>
                  <?php thi_secondary_nav_menu() ?>
               </nav>
         </div>
      </div>
    </div>
</header>

<div id="main-area">
<?php
// Hook for content after header
do_action( 'et_before_main_content' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <title><?php echo wp_title('|', true, 'right') . get_bloginfo('name');?></title>

	<meta name="description" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

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
                    <img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo" width="50" height="50" />
                </a>
            </div>

            <nav id="sba-nav" class="header__nav menu">
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
            <div class="mobile-menu-btn">
                <span class="bar1"></span> 
                <span class="bar2"></span> 
                <span class="bar3"></span> 
            </div>
            <div class="mobilemenu hidden">
                <nav class="nav--mobile">
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
            </div>
        </div>
    </header>

    <div id="main-area">
        
    <?php
    // Hook for content after header
    do_action( 'et_before_main_content' );
    ?>
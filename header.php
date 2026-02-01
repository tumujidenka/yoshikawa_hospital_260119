<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="l-header">
        <div class="l-header__inner">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            </h1>
            <nav class="l-header__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'global',
                    'container' => false,
                    'menu_class' => 'l-header__list',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>
            <button class="l-header__hamburger js-hamburger" aria-label="メニューを開く">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- SP Drawer Menu -->
    <nav class="l-drawer js-drawer">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'global',
            'container' => false,
            'menu_class' => 'l-drawer__list',
            'fallback_cb' => false,
        ));
        ?>
    </nav>
    <div class="l-overlay js-overlay"></div>
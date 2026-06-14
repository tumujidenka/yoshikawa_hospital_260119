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
                    吉川病院
                </a>
            </h1>
            <div class="l-header__content">
                <nav class="l-header__nav">
                    <ul class="l-header__list">
                        <li class="l-header__item"><a href="<?php echo esc_url(home_url('/')); ?>"
                                class="l-header__link">ホーム</a></li>
                        <li class="l-header__item"><a href="<?php echo esc_url(home_url('/about/')); ?>"
                                class="l-header__link">当院について</a></li>
                        <li class="l-header__item"><a href="<?php echo esc_url(home_url('/medical/')); ?>"
                                class="l-header__link">診療科目</a></li>
                        <li class="l-header__item"><a href="<?php echo esc_url(home_url('/guide/')); ?>"
                                class="l-header__link">入院・受診案内</a></li>
                        <li class="l-header__item"><a href="<?php echo esc_url(home_url('/access/')); ?>"
                                class="l-header__link">アクセス/お問い合わせ</a></li>
                        <li class="l-header__item"><a href="<?php echo esc_url(home_url('/news/')); ?>"
                                class="l-header__news">お知らせ</a></li>
                    </ul>
                </nav>
                <div class="l-header__info">
                    <a href="tel:06-6583-4114" class="l-header__tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt=""
                            class="l-header__tel-icon" width="20" height="20">
                        06-6583-4114
                    </a>
                </div>
            </div>
            <button class="l-header__hamburger js-hamburger" aria-label="メニューを開く">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- SP Drawer Menu -->
    <nav class="l-drawer js-drawer">
        <ul class="l-drawer__list">
            <li class="l-drawer__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="l-drawer__link">ホーム</a>
            </li>
            <li class="l-drawer__item"><a href="<?php echo esc_url(home_url('/about/')); ?>"
                    class="l-drawer__link">当院について</a></li>
            <li class="l-drawer__item"><a href="<?php echo esc_url(home_url('/medical/')); ?>"
                    class="l-drawer__link">診療科目</a></li>
            <li class="l-drawer__item"><a href="<?php echo esc_url(home_url('/guide/')); ?>"
                    class="l-drawer__link">入院・受診案内</a></li>
            <li class="l-drawer__item"><a href="<?php echo esc_url(home_url('/access/')); ?>"
                    class="l-drawer__link">アクセス/お問い合わせ</a></li>
            <li class="l-drawer__item"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="l-drawer__link">お知らせ</a></li>
        </ul>
    </nav>
    <div class="l-overlay js-overlay"></div>
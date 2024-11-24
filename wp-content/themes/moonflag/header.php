<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <title itemprop="name">
        <?php
        if (is_home()) {
            echo "";
        } elseif (is_tax()) {
            echo single_cat_title() . ' |';
        } elseif (is_archive()) {
            echo get_the_archive_title() . ' |';
        } elseif (is_singular()) {
            echo single_post_title() . ' |';
        } else {
            echo get_the_title() . ' |';
        }
        ?>
        MoonFlag
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <header class="header" role="banner">
            <div class="container header--container">
                <div class="header--container--branding">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                    <div class="open-menu-mobile">
                        <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
                    </div>
                </div>
                <div class="header--container--icons">
                    <div class="top">
                        <div class="menu-items">
                            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'custom_header_menu',
                                    'menu'           => 'Menu do Header',
                                    'menu_id'        => 'custom-header-menu',
                                    'menu_class'     => 'main-menu',
                                    'fallback_cb'    => '__return_false',
                                ));
                                ?>
                            </nav>
                            <button onclick="closeMenu()" class="bg-close-menu-mobile">
                                Fechar menu
                            </button>
                        </div>
                        <button id="contact-us-button" onclick="openModal()" class="button button--primary button--icon">
                            Fale com a Zotus
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <?php include 'components/contact-us-modal.php'; ?>
        <div class="big-circle-graphic top mobile">&nbsp;</div>
        <main id="content" role="main">
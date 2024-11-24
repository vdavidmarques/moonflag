<?php

/*******************************
    Adding scripts and Css
 ********************************/
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0.0');

        wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '3.3.5', true);

        wp_enqueue_script('scripts', get_template_directory_uri() . "/dist/js/scripts.js", array('jquery'), null, true);
    }
});

/*******************************
        Adding logo
 ********************************/

function theme_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_custom_logo_setup');

/*******************************
        Add Elementor
 ********************************/

function my_theme_add_elementor_support()
{
    add_theme_support('elementor');

    add_theme_support('elementor-full-width');
}

add_action('after_setup_theme', 'my_theme_add_elementor_support');

function my_theme_register_elementor_locations($elementor_theme_manager)
{
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'my_theme_register_elementor_locations');

/*******************************
        Add Thumbnail to posts
 ********************************/

function my_theme_setup()
{
    add_theme_support('post-thumbnails');

    add_image_size('custom-size', 800, 600, true);
}
add_action('after_setup_theme', 'my_theme_setup');

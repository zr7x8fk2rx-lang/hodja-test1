<?php
/**
 * CPHT1 Blank - functions.php
 */

defined('ABSPATH') || exit;

// Tema features
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus([
        'primary' => __('Hovedmenu', 'cpht1-blank'),
        'footer' => __('Footer menu', 'cpht1-blank'),
    ]);
});

// Indlæs CSS og JS
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('cpht1-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_script('cpht1-script', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
});

// Widgets
add_action('widgets_init', function() {
    register_sidebar([
        'name' => __('Sidebar', 'cpht1-blank'),
        'id' => 'primary-sidebar',
        'description' => __('Primary sidebar', 'cpht1-blank'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
});

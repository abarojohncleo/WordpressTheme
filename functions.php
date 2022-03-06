<?php
    function load_stylesheets(){
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');
        wp_register_style('myStyles', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('myStyles');
    }
    add_action('wp_enqueue_scripts', 'load_stylesheets');

    function includeJquery(){
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js' , '', 1, true);
        add_action('wp_enqueue_scripts', 'jquery');
    }
    add_action('wp_enqueue_scripts', 'includeJquery');

    function loadJs(){
        wp_register_script('customJs', get_template_directory_uri() . '/js/script.js', '', 1, true);
        wp_enqueue_script('customJs');
    }
    add_action('wp_enqueue_scripts', 'loadJs');

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'top-menu' => __('Top Menu','theme'),
            'footer-menu' => __('Footer Menu','theme'),
        ) 
        );

    add_image_size('smallest', 100, 100, true);
    add_image_size('largest', 800, 800, true);
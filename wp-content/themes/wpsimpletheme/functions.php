<?php

if (!function_exists('theme_setup')) :

    function simple_theme_setup()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1568, 9999);

        register_nav_menus(
            [
                'menu_1' => 'Top Menu', 'top_menu',
                'menu_2' => 'Primary Menu', 'primary_menu',
                'footer' => 'Footer Menu', 'footer_menu',
            ]
        );
    }

endif;
add_action('after_setup_theme', 'simple_theme_setup');

/**
 *  Enqueue scripts and styles
 */
function load_simple_theme_stylesheets()
{

    // //fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i;'
    // https://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,700

    wp_register_style(
        'bootstrap',
        get_template_directory_uri().'/assets/css/bootstrap.min.css',
        null,
        '1.0',
        'all');
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'custom-google-fonts',
        '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i;',
        null,
        '1.0',
        'all');
    wp_enqueue_style('custom-google-fonts');

	wp_register_style(
		'fontawesome-fonts',
		'//use.fontawesome.com/releases/v5.7.2/css/all.css',
		null,
		'1.0',
		'all');
	wp_enqueue_style('fontawesome-fonts');

	wp_register_style(
		'custom-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[],
		microtime(),
		'all');
	wp_enqueue_style('custom-style');

}
add_action('wp_enqueue_scripts', 'load_simple_theme_stylesheets');

function load_simple_theme_scripts()
{
    wp_register_script(
        'jquery',
        get_template_directory_uri().'/assets/js/jquery-3.3.1.slim.min.js' ,
        null, microtime(),true);
    wp_enqueue_script('jquery');

    wp_register_script('popperjs',
        get_template_directory_uri().'/assets/js/popper.min.js',
        null,
        microtime(),
        true);
    wp_enqueue_script('popper-js');

    wp_register_script('bootstrap-js',
        get_template_directory_uri().'/assets/js/bootstrap.min.js',
        'jquery',
        microtime(),
        true);
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'load_simple_theme_scripts');


add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
function add_classes_on_li($classes, $item, $args)
{
	$classes[] = 'nav-item';

	return $classes;
}

add_filter('wp_nav_menu', 'add_classes_on_a');
function add_classes_on_a($ulclass)
{
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
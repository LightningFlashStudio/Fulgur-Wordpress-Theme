<?php
/*
    ===========================
     Include Scripts
    ===========================
*/
function fulgur_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/fulgur-css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/fulgur-css/fulgur.css', array(), '1.0.0', 'all');



    //js
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/fulgur-js/bootstrap.min.js', array(), '3.3.7', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/fulgur-js/fulgur.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery', '', array(), '', true);

}

add_action('wp_enqueue_scripts', 'fulgur_script_enqueue');
/*
    ===========================
     Activate Menus
    ===========================
*/
function fulgur_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Secondary Header Navigation');
}

add_action('init', 'fulgur_theme_setup');
/*
    ============================
    Theme Support Functions
    ============================
*/
add_theme_support('custom-background'); // Custom background image for the theme.
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery', 'status', 'quote', 'link'));

function fulgur_header_setup() { //Function for the header image, adds the arguments in an array.
$args = array(
    'default-image' => '',
    'default-text-color' => '000',
    'width' => 400,
    'height' => 200,
    'flex-width' => true,
    'flex-height' => true,
);
add_theme_support('custom-header', $args ); // Custom Header image for the theme.
}

add_action('after_setup_theme', 'fulgur_header_setup');
/*
    =======================
    Sidebar Function
    =======================
*/

function fulgur_widget_setup() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

}
add_action('widgets_init','fulgur_widget_setup');

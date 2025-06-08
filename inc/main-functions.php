<?php
// add style and sctipt files to theme 
function naftagaz_style_script()
{

    // enqueue styles 
    wp_enqueue_style( 'index', get_template_directory_uri().'/assets/css/index.css' , array(), '1.0.0', 'all' );

    // enqueue scripts 
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'naftagaz_style_script');


// Register nav menus 
if (! function_exists('naftagaz_nav_menus')) {

    function naftagaz_nav_menus()
    {
        register_nav_menus(
            array(
                'header_menu'   => 'Header Menu',
                'footer_menu'   => 'Footer Menu'
            )
        );
    }

    add_action('after_setup_theme', 'naftagaz_nav_menus');
}

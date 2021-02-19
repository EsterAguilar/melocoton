<?php

function eaguilar_config(){
        register_nav_menus(
                array(
                        'eaguilar_main_menu' => 'eaguilar menu principal',
                )
        );
}

add_action( 'after_setup_theme', 'eaguilar_config',  );

function eaguilar_scripts(){

        wp_enqueue_style('my_css', get_stylesheet_uri(), array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'eaguilar_scripts');

?>
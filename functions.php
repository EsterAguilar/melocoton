<?php

function eaguilar_scripts(){

    if ( is_page('contacto') ) {
        wp_enqueue_style( 'contacto', get_theme_file_uri('/page-contacto-styles.css'), array(), '1.0.0');
    } else {
        wp_enqueue_style('mi-css', get_stylesheet_uri());
    }
}

add_action( 'wp_enqueue_scripts', 'eaguilar_scripts');

?>
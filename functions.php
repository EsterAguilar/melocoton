<?php

function eaguilar_scripts(){

        wp_enqueue_style('my_css', get_stylesheet_uri(), array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'eaguilar_scripts');

?>
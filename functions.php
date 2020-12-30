<?php


//Wp scripts (styles javascripts)


function wpdocs_scripts_method() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/bootstrap.css' );
   wp_enqueue_style('my-style', get_template_directory_uri() . '/css/custom.css' );

    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );
















?>

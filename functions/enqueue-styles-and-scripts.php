<?php

function enqueue_styles_and_scripts()
{
    // Bootstrap

    wp_enqueue_style("bootstrap-style", "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js");

    // Fontawesome

    wp_enqueue_style("fontawesome-style" , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css");

    // Custom styles

    wp_enqueue_style("main-style", get_stylesheet_uri());
    wp_enqueue_style("typography-style", get_template_directory_uri() . "/assets/styles/typography.css");
    wp_enqueue_style("header-style", get_template_directory_uri() . "/assets/styles/header.css");

    // Custom scripts

    wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/index.js", ["jquery"]);
}

add_action("wp_enqueue_scripts", "enqueue_styles_and_scripts");
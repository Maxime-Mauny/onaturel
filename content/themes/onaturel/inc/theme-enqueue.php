<?php

if (!function_exists('onaturel_scripts')):

    function onaturel_scripts()
    {
        wp_enqueue_style(
            'onaturel-style-css',
            get_theme_file_uri('/public/css/style.css'),
            [],
            '1.0.29'
        );
     


        wp_enqueue_script(
            'onaturel-js',
            get_theme_file_uri('/public/js/app.js'),
            [],
            '1.0.0',
            true
        );

     
    }

endif;


add_action('wp_enqueue_scripts', 'onaturel_scripts');

 
<?php

require('customizer/onaturel_main.php');

function onaturel_customize_register($wp_customize) {


    $wp_customize->add_panel('onaturel_theme_panel', [
        
        'title' => 'oNaturel',
        'description' => 'oNaturel Panel - Gestion',
        'priority' => 1,
    ]);


 
      //MAIN images
    
      $wp_customize->add_section('onaturel_main', [
        'title' => 'Images',
        'panel' => 'onaturel_theme_panel'
    ]);
 

   onaturel_main($wp_customize);
 


}

add_action('customize_register', 'onaturel_customize_register');
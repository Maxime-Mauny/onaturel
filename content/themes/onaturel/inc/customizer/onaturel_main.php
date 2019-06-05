<?php

function onaturel_main($wp_customize){

        $wp_customize->add_setting('onaturel_img', []);

        $wp_customize->add_setting('onaturel_img_2', []);

        $wp_customize->add_setting('onaturel_img_3', []);

        $wp_customize->add_setting('onaturel_img_4', []);

        $wp_customize->add_setting('onaturel_img_5', []);





        $image_ct = new WP_Customize_Image_Control(
            $wp_customize,
            'onaturel',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main',
                'settings' => 'onaturel_img',
            ]
         );

         $image_ct_2 = new WP_Customize_Image_Control(
            $wp_customize,
            'onaturel-2',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main',
                'settings' => 'onaturel_img_2',
            ]
         );

         $image_ct_3 = new WP_Customize_Image_Control(
            $wp_customize,
            'onaturel-3',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main',
                'settings' => 'onaturel_img_3',
            ]
         );

         $image_ct_4 = new WP_Customize_Image_Control(
            $wp_customize,
            'onaturel-4',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main',
                'settings' => 'onaturel_img_4',
            ]
         );


         $image_ct_5 = new WP_Customize_Image_Control(
            $wp_customize,
            'onaturel-5',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main',
                'settings' => 'onaturel_img_5',
            ]
         );



    $wp_customize->add_control($image_ct);

    $wp_customize->add_control($image_ct_2);

    $wp_customize->add_control($image_ct_3);     

    $wp_customize->add_control($image_ct_4);     

    $wp_customize->add_control($image_ct_5);     




}
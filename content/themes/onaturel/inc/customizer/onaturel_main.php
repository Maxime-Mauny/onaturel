<?php

function onaturel_main($wp_customize){

                /*Images des Catégories */

        $wp_customize->add_setting('onaturel_img', []);
        $wp_customize->add_setting('onaturel_img_2', []);
        $wp_customize->add_setting('onaturel_img_3', []);
        $wp_customize->add_setting('onaturel_img_4', []);
        $wp_customize->add_setting('onaturel_img_5', []);


                /* Images du Carousel */

        $wp_customize->add_setting('onaturel_carousel', []);       
        $wp_customize->add_setting('onaturel_carousel_2', []);   
        $wp_customize->add_setting('onaturel_carousel_3', []);    







                /*Images des Catégories */


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




                /* Images du Carousel */



         $carousel= new WP_Customize_Image_Control(
            $wp_customize,
            'carousel',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main_carousel',
                'settings' => 'onaturel_carousel',
            ]
         );

         $carousel_2= new WP_Customize_Image_Control(
            $wp_customize,
            'carousel-2',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main_carousel',
                'settings' => 'onaturel_carousel_2',
            ]
         );


         $carousel_3= new WP_Customize_Image_Control(
            $wp_customize,
            'carousel-3',    
            [
                'label'    => 'Upload image',
                'section'  => 'onaturel_main_carousel',
                'settings' => 'onaturel_carousel_3',
            ]
         );






        /*Images des Catégories */

    $wp_customize->add_control($image_ct);
    $wp_customize->add_control($image_ct_2);
    $wp_customize->add_control($image_ct_3);     
    $wp_customize->add_control($image_ct_4);     
    $wp_customize->add_control($image_ct_5);   
    



            /* Images du Carousel */
    
    $wp_customize->add_control($carousel);
    $wp_customize->add_control($carousel_2);
    $wp_customize->add_control($carousel_3);




}
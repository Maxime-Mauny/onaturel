<section class="left">
          <div class="logo">
            <a href="<?= home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/icon.png' ?>"alt="..."><span>Naturel</span></a> 
          </div>
          <div class="nav-header"> 
            <ul>     
  <?php
            $menu = wp_nav_menu([
              'menu' => 'menu-top',
              'theme_location' => 'menu-top',
              'container' => 'a',
              'container_class' => 'nav-header',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '<li></li>');

            echo $menu;
   ?>         

            </ul>          
          </div>
</section> 
 
        <section class="icon-nav">  
       
        <ul>  
       <li> <?php //echo do_shortcode ('[yith_woocommerce_ajax_search]');?></li>
  <?php
            $menu = wp_nav_menu([
              'menu' => 'nav-icone',
              'theme_location' => 'nav-icone',
              'container' => 'a',
              'container_class' => 'icon-nav',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '<li></li>');

            echo $menu;
   ?>   
      </ul>             
      
               
</section> 

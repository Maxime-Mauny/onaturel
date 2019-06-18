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
        <section class="user">
       
        
        <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-shopping-cart"aria-hidden="true"></i></a>
</section> 

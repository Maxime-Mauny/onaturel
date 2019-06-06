<section class="sub-categories">
    <div class="nav-bar">  
        <?php

              $menu = wp_nav_menu([
              'menu' => 'menu-middle',
              'theme_location' => 'menu-middle',
              'container' => 'div',
              'menu_div' => 'nav-bar',
              'echo' => true
              ]);

               $menu = strip_tags($menu, '<ul></ul>');

              echo $menu;
      ?>            
    </div>
  </section>
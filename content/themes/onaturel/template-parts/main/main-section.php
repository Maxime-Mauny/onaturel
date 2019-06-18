<section class="blog">
    <div class="title-blog">
    <?php
        $menu = wp_nav_menu([
          'menu' => 'menu-blog',
          'theme_location' => 'blog',
          'container' => 'div',
          'div_class' => 'title-blog',
          'echo' => true
       ]);
       
        $menu = strip_tags ($menu, '<a></a>');

        echo $menu;
  ?>      
    </div>

 
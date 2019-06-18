<section class="blog">
    <div class="title-blog">
      <?php
$menu = wp_nav_menu([
'menu' => 'menu-blog',
//'theme_location' => 'menu-blog',
'container' => 'div',
'menu_div' => 'title-blog',
'echo' => true
]);

 $menu = strip_tags($menu, '<a></a>');
echo $menu;
?>   
</div>

 
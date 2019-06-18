<?php
/* 
Template Name: Products Shop
*/
?>


<?php
 get_header(); // page pour afficher   tous les produits
?>


<section class="product">
<div class="title-product">
<hr>
<a href="#">Produits</a>
<section class="posts-product">
 
<?php
    $args = [
    'post_type' => 'product',
            ];
     $wp_query = new WP_Query($args);
     if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
?>

 
<?php  get_template_part('template-parts/post/product', 'excerpt'); ?> 
 
 
<?php
     endwhile; endif;
     wp_reset_postdata();
?> 
 
 
 </section>
 </section>

<?php get_footer(); ?>
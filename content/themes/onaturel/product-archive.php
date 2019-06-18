<?php
/* 
Template Name: Categories
*/
?>


<?php
 get_header(); // page pour afficher   tous les produits
?>


<section class="product">
<div class="title-product">
<hr>
<a href="#"><?php the_category( ); ?></a>
<section class="posts-product">
 
<?php
    $args = [
    'taxonomy' => 'product_cat',
     'post_type' => 'category',
   
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
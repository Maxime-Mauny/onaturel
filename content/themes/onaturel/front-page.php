<?php get_header(); ?>

<?php  get_template_part('template-parts/main/main', 'carousel'); ?> 
<?php  get_template_part('template-parts/main/main', 'categories'); ?> 
<?php  get_template_part('template-parts/main/main', 'subcategories'); ?> 

<section class="blm-carousel">
<div id="carousel-demo" class="carousel-product text-center">
 
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
 
 </div>
 </section>
 
 

<?php  get_template_part('template-parts/main/main', 'section'); ?> 



<section class="posts">
<?php
        $args = [
            'posts_per_page' => 4
                ];

        $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
 </div>       
 
                <?php  get_template_part('template-parts/post/article', 'excerpt'); ?> 

        <?php
            endwhile; endif;
            wp_reset_postdata();
        ?>      
</section>
</section>  
<?php  get_template_part('template-parts/main/main', 'info'); ?> 
 

  
<?php get_footer(); ?>
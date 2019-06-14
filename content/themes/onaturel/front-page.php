<?php get_header(); ?>

<?php  get_template_part('template-parts/main/main', 'carousel'); ?> 
<?php  get_template_part('template-parts/main/main', 'categories'); ?> 
<?php  get_template_part('template-parts/main/main', 'subcategories'); ?> 


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
 
 

<?php  get_template_part('template-parts/main/main', 'section'); ?> 



<section class="posts">
<?php
        $args = [
            'orderby' => 'ASC',
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
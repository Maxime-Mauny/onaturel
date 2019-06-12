<?php
/* 
Template Name: Products Shop
*/
?>


<?php get_header(); ?>
<?php
        $args = [
            'post_type' => 'product',
                ];

        $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
    
	<div class="post">
   <img src="<?php the_post_thumbnail_url(); ?>" alt="...">
      <div class="text">
        <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
</div>
                 

<?php
	endwhile; endif;
	wp_reset_postdata();
?>


<?php get_footer(); ?>
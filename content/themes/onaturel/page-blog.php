<?php
/*
Template Name: Blog
*/
?>



<?php get_header(); ?>

<?php  get_template_part('template-parts/main/main', 'section'); ?>
<section class="posts"> 
     
<?php
$args = [
        'orderby' => 'date',
        ];

        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();                
?> 
 
  
 <div class="post">
   <img src="<?php the_post_thumbnail_url(); ?>" alt="...">
      <div class="text">
        <h2><?php the_title(); ?></h2>
      <div><?php the_excerpt(); ?></div>
        <button type="button" class="btn btn-success btn-sm" href="<?php the_permalink(); ?>">Lire la suite</button>
        <a href="<?php the_permalink(); ?>">Lire la suite</a> 
    </div>      
 </div>   
 
 

<?php
        endwhile; endif;
?>
 
 </section> 
</section> 
 

<?php get_footer(); ?>
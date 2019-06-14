<?php
/* 
Template Name: Products Shop
*/
?>


<?php
 get_header(); // page pour afficher   tous les produits
?>

<section class="blog">
    <div class="title-blog">
      <hr>
      <a href="#">Produits</a>
    </div>

 
<section class="posts">
<?php
$args = [
'post_type' => 'product',
//'orderby' => 'ASC',
      ];

$wp_query = new WP_Query($args);

if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
?>
  </div>  

  <div class="post">
   <img src="<?php the_post_thumbnail_url(); ?>" alt="..." >
      <div class="text">
        <h2><?php the_title(); ?></h2>
      <div><?php the_excerpt(); ?></div>
      <div class="thumbnail-price"><?php $product->get_regular_price();  ?></div>  
           
</div>

      
        
 

<?php
endwhile; endif;
wp_reset_postdata();
?>
 </section>
</section>  

<?php get_footer(); ?>
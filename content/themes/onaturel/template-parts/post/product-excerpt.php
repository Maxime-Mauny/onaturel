 <?php 
     global $product;
?>
 <div class="post-product">
   <img src="<?php the_post_thumbnail_url(); ?>" alt="...">
      <div class="text">
        <h2>Lorem Ipsum</h2>
        <p><?php the_excerpt(); ?></p>
        <a href="#"><?php echo $product->get_regular_price() ?></a>
        </div>
   </div>  
      
 
      
 
 
 
 
 
 
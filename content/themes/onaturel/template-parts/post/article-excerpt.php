<div class="post">
   <img src="<?php the_post_thumbnail_url(); ?>" alt="...">
      <div class="text">
        <h2><?php the_title(); ?></h2>
      <div><?php the_excerpt(); ?></div>
        <button type="button" class="btn btn-success btn-sm" href="<?php the_permalink(); ?>">Lire la suite</button>
          <a href="<?php the_permalink(); ?>">Lire la suite</a> 
</div>


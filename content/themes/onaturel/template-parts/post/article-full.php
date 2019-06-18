<div class="post post-full">
  <h2 class="text-center main-heading"><?php the_title(); ?></h2>
  <hr>
  <p class="text-muted text-center written-by">Ecrit par 
    <a href="#" class="text-muted"><?php the_author_link(); ?></a>
  </p>
  <img src="<?php the_post_thumbnail_url(); ?>" alt="..."> <!-- image size : 1200x600 -->
  <div class="post-meta-details text-muted">
    <time datetime="2018-03-27" class="mr-2"><i class="fa fa-calendar"></i> Publié le <?= get_the_date(); ?></time>    

    <?php 
      $categories = get_the_category();
      foreach($categories as $category):
    ?>
    <a href="<?= get_category_link($category); ?>" class="btn btn-success btn-sm news-tag<?= $category->slug ?>">
    <?= $category->name ?>
    </a>    
    <?php
      endforeach;
    ?>

  </div>
      <div class="text post-content">        
      <!--<div>--><?php the_content(); ?>
      </div>
</div>
<?php
// fichier d'affichage des pages par default WP
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post();?>
 
<div class="post post-full">
  <h2 class="text-center main-heading"><?php the_title(); ?></h2>
  <hr>
  <p class="text-muted text-center written-by">Ecrit par 
    <a href="#" class="text-muted"><?php the_author_link(); ?></a>
  </p>
 
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
 
<?php endwhile; endif;  ?>

<?php get_footer(); ?>
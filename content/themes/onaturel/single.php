 
<?php
// Page pour l'affichage des articles full
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post();?>
 
<?php  get_template_part('template-parts/post/article', 'full'); ?> 
 
<?php endwhile; endif;  ?>

<?php get_footer(); ?>
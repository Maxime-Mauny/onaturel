<?php
/*
Template Name: Newsletters
*/
?>


<?php get_header(); ?>

<?php

    global $wpdb;
    $result = $wpdb->get_results("SELECT * FROM newsletter");

?>

<?php foreach ($result as $print): ?>




<?php endforeach; ?>
 

 
<?php get_footer(); ?>
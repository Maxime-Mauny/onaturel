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


 
<?php get_footer(); ?>
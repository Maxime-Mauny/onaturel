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

<label for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">



<?php endforeach; ?>
 

 
<?php get_footer(); ?>
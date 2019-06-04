<?php
/*
Template Name: Newsletters
*/
?>


<?php get_header(); ?>


<?php

     function saveEmail(){

        if(isset($_POST['submit'])){

            global $wpdb;
            $wpdb->insert('newsletter' , array('email' => $email));

        }     

        saveEmail();
    }

 

?>
 
 <form action="" method="POST">
  <div class="form-group">
<label for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
<button type="submit" class="btn btn-primary">Submit</button>
</form>

 
 

 
<?php get_footer(); ?>
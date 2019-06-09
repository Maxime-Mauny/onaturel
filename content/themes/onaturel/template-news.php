<?php
/*
Template Name: Newsletters
*/
?>


<?php get_header(); ?>

<form action="" method="POST">
  <div class="form-group">
<label for="exampleFormControlInput1">Email address</label>
<input type="email" name ="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
<button type="submit" name="submit" cclass="btn btn-primary">Submit</button>
</form>

<?php

        if(isset($_POST['submit'])){

            $email = $_POST ['email'];

            global $wpdb;
     
           $database=$wpdb->insert("newsletter", array("email" =>$email));

           if($database == true)
           {
               echo"<h2>Thank You</h2>";
           }
           else
           {
               echo"<h2>Veullez reessayer </h2>";
           }

        }  

 

?>

 
 
<?php get_footer(); ?>
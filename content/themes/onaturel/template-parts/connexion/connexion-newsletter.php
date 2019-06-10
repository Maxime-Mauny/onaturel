<div class="newsletter"> 
    <form action="" method="POST">  
        <div class="form-group">
            <label >Newsletter</label>
               <i class="fa fa-envelope-o" aria-hidden="true"></i>              
                 <input type="email" name ="email"  placeholder="Entrez Votre e-mail">
        <button type="submit" name="submit"  >Ok</button>
    </form>
</div>

<?php   
        /* Newsletter */


if( isset($_POST['submit'] )){
    $email = $_POST ['email'];
    global $wpdb;
    // on localise notre table 
        $wpdb->get_results("SELECT * FROM newsletter where  email = '$email' ");
        // on va parcourir notre table pour verifier si l'email existe
            $count = $wpdb->num_rows;
 
            // S'il n'existe pas alors il va inserer l'information
                if(empty($count))
                             {
                         //  $data = array (
                        //    'email' => $_POST ['email'] 
                             // );
            // Insertion dans ma table newsletter
         //   $wpdb->insert( "newsletter", $data);
                 //   $status = 'L\'email a été bien envoyé'; 
                      $status =  'L\'email est vide';             
                                }                                 
                                else if (!empty($count))
                                {
                    $status = 'L\'email est déjà inscrit';                
                                }                         
                                else  
                                {
                 $data = array (
                             $email => $_POST ['email'] 
                              );
                     //  Insertion dans ma table newsletter
                   $wpdb->insert( "newsletter", $data);
                   $status = 'L\'email a été bien envoyé'; 
                 //   $status =  'L\'email est vide'; 
                                }
                                
            echo $status;
         } 

?>
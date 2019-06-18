<div class="newsletter"> 
    <form action="" method="POST">  
        <div class="form-group">
            <label >Newsletter</label>
               <i class="fa fa-envelope-o" aria-hidden="true"></i>              
                 <input type="email" name ="email"  placeholder="Entrez Votre e-mail">
        <button type="submit" name="submit">Ok</button>
    </form>
 
<?php   
        /* Newsletter */
if($_POST){

$email = isset($_POST['email'] ) ? $_POST['email'] : "";
    global $wpdb;
    // on localise notre table 
        $wpdb->get_results("SELECT * FROM newsletter where  email = '$email' ");
        // on va parcourir notre table pour verifier si l'email existe
            $count = $wpdb->num_rows;

if(empty($_POST)){ 
                 echo "<div>l'email est vide</div>";             
            }  
            else  if(($count>0)){
                echo "<div style:green>l'email est déja activé</div>";               
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 echo "<div>cette adresse email n'est pas valide.</div>";
            }   
            else  
            {   
            $data = array (
            'email' => $_POST ['email']
            );    
            $wpdb->insert( "newsletter", $data);
                  echo "<div>l'email a été bien envoyé</div>";
 
    }

}  
    
?>
</div>
<?php
    include "./userBussiness.php";
    
    if(isset($_POST)){
        if(strcmp($_POST['action'], "save") == 0){
            //echo("Ingresó");    
            $userBussiness = new UserBussiness();

            $userBussiness-> save(new User($_POST['id'], $_POST['documentID'], $_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['iban'], $_POST['active'])); 
            // echo "Registro exitoso";
            header("location: ../View/home.php");
        }
        
    }

    

?>
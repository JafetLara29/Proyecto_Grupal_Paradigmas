<?php
    include "./userBussiness.php";
    // echo "Entro a user action";
    if(isset($_POST)){
        if(isset($_POST['action'])){//Si la variable action tiene algo
            if(strcmp($_POST['action'], "save") == 0){    
                $userBussiness = new UserBussiness();

                $userBussiness-> save(new User($_POST['id'], $_POST['documentID'], $_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['iban'], $_POST['active']));
                header("location: ../View/home.php");
            }else 
                if(strcmp($_POST['action'], "edit") == 0){
                    
                    $id = $_POST['id'];
                    $document = $_POST['documentID'];
                    $name = $_POST['name'];
                    $lastname = $_POST['lastName'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $iban = $_POST['iban'];

                    header("location: ../View/home.php?data=true&id=".$id."&document=".$document."&name=".$name."&lastname=".$lastname."&address=".$address."&phone=".$phone."&email=".$email."&iban=".$iban);

                }else 
                    if(strcmp($_POST['action'], "update") == 0){
                        $userBussiness = new UserBussiness();
                        $userBussiness -> edit(new User($_POST['id'], $_POST['documentID'], $_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['iban'], $_POST['active']));
                       
                        header("location: ../View/home.php");
                    }else 
                        if(strcmp($_POST['action'], "delete") == 0){
                            $userBussiness = new UserBussiness();
                            
                            $userBussiness -> delete($_POST['id'], "0");
                       
                            header("location: ../View/home.php");
                        }

                }
        }
        
    

    
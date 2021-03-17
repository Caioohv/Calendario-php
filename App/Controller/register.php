<?php

    include '../Model/register.php';

    if(isset($_POST['name']) && isset($_POST['userId']) && isset($_POST['passwd']) && isset($_POST['passwd2'])){
        
        // Get data from Post
        $name = $_POST['name'];
        $userId = $_POST['userId'];
        $pass1 = $_POST['passwd'];
        $pass2 = $_POST['passwd2'];
        
        if($pass1 == $pass2){
            // Do the registration
            $result = register($name, $userId, $pass1);
            if($result){
                header('location: ../../index.php');
            }else{
                //header('location: ../../index.php?page=register&error=reg');
            }

            
        }else{
            // When the passwords dont match
            header('location: ../../index.php?page=register&error=match');
        }
    }else{
        // When any field is empty
        header('location: ../../index.php?page=register&error=emptyField');
        
    }

?>
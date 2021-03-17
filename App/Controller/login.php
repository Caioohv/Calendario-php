<?php



include '../Model/login.php';


$userId = $_POST['userId'];
$passwd = MD5($_POST['passwd']);

if(login($userId, $passwd)){
    $_Session['userId'] = $userId;
    
   header('location: ../../index.php');    
}else{
    //header('location: ../../index.php?error=true'); 
}



?>
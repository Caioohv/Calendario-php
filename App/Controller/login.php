<?php



include '../Model/login.php';


$userId = $_POST['userId'];
$passwd = $_POST['passwd'];

if(login($userId, $passwd)){
    $_Session['userId'] = $userId;
    echo 'error login controller';
    //header('location: ../../index.php');    
}else{
    header('location: ../../index.php?error=true'); 
}



?>
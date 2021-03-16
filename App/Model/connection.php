<?php

    $server = 'localhost:33060';
    $user = 'viier';
    $password = 'viier';
    $database = 'calendarapp';

    $con = new mysqli($server, $user, $password, $database);

    // verify connection
    if($con -> connect_error){
        die("Falha na conexão ".$con->connect_error);
    }


?>
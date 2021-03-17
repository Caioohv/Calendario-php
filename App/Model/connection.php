<?php

    function connect(){
        $server = '127.0.0.1';
        $user = 'viier';
        $password = 'viier';
        $database = 'calendarapp';

        $con = new mysqli($server, $user, $password, $database);

        // verify connection
        if($con -> connect_error){
            die("Falha na conexão ".$con->connect_error);
        }
        return $con;
    }
    


?>
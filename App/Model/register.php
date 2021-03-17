<?php

    include 'connection.php';

    function register($name, $userId, $passwd){
        $passwd = MD5($passwd);
        $sql = "INSERT INTO user values ('$userId', '$name', '$passwd');";
        echo $sql;
        $con = connect();

        $result = mysqli_query($con, $sql);

        return $result;
    }

?>
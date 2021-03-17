<?php

    include 'connection.php';

    function login($userId, $passwd){
        $sql = "select * from user where userId='$userId' and passwd='$passwd';";
        $con = connect();
        $result = mysqli_query($con, $sql);

        //echo $sql;
        
        if(mysqli_num_rows($result)>0){
            return true;
        }
        return false;
    }

?>
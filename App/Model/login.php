<?php

include_once 'connection.php';

function login($userId, $passwd){
    $sql = 'select email, passwd from user where email='.$userId.';';

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    if($passwd == $row['passwd']){
        return true;
    }
    return false;
}

?>
<?php

    session_start();
    include 'App/header.php';

?>

<body>

    <?php

        if(isset($_SESSION['userId'])){
            include 'App/Screens/calendar.php';
        }else{
            include 'App/Screens/login.php';
        }

    ?>

</body>
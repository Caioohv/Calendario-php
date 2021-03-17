<?php

    session_start();
    include 'App/header.php';

?>

<body>

    <?php

        if(isset($_SESSION['userId'])){
            
            if(isset($_GET['page'])){

            }else{
                include 'App/Screens/calendar.php';
            }

        }else{
            if(isset($_GET['page'])){
                if($_GET['page'] == "register"){
                    include 'App/Screens/register.php';
                }
            }else{
                include 'App/Screens/login.php';
            }
            
        }
        
    ?>

</body>
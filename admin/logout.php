<?php
    include('../repeat/connection.php');
    if(($_SESSION['user']))
    {
        unset($_SESSION['user']);
    }
    
    session_destroy();
    header("location:".'http://localhost/multi_servicing_system/'.'admin/login.php');
?>
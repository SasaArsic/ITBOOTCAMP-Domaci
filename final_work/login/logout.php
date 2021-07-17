<?php
    session_start();
    unset($_SESSION['login_id']);
    unset($_SESSION['items']);
    setcookie('login_id', 0, time()-60*60*24, "/");
    // echo "<a href='index.php'></a>";
    header('location: ../index.php');


  
?>
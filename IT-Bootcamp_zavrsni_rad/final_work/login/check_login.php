<?php
    session_start();
    include "../data.php";
    $username = $_GET['username'];
    $password = $_GET['password'];
    

    if($username==""|| $password==""){
        die("<img style='width:1250px; height:600px;' src='gandalf.gif'/>");
    }
    
    $res=$b->select_user($username,$password);
    $id=$res[0]['id'];
    

    if($_GET['remember'] == false)
        $_SESSION['login_id'] = $id;
    else                                   //60sec*60min*24h*30dana*3meseca
        setcookie('login_id', $id, time()+60*60*24*30*3, "/");
    
    if($username==='admin' && $password==='the1incharge'){
        header("Location: ../admin.php");
    }
    else{
        header("Location: ../index2.php");
    }


    
?> 

    
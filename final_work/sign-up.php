<?php
include 'data.php';

$email= $_GET['email'];
$pwd=$_GET['pwd'];
$user=$_GET['user'];

$b->insert_user($user,$email,$pwd);
header("Location: index.php");
?>


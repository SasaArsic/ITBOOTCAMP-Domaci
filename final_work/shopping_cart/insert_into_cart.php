<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="endpage.css"> 
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div>
<?php
include "shopping_cart.php";
include "../data.php";

$total = $c->total();

if(isset(($_COOKIE['login_id']))){
    $u=($_COOKIE['login_id']);
}else{
    $u= $_SESSION['login_id'];
}


for($i=0; $i<count($_SESSION['items']); $i++){
   $id_m = $_SESSION['items'][$i]['id'];
   $p = $_SESSION['items'][$i]['price'];
   $b->insert_cart( $id_m,$u,$p,$total );
}


?>
</div>
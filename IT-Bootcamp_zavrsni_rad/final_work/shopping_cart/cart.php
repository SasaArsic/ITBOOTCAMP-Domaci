<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class='cartdiv'>
<?php
include "shopping_cart.php";
include "cart_header.html";
$c->content_of_cart();
?>
    <div class='watch'>
        <img src="popcorn.gif" alt="popcorns"> <br>
        <a id='link' href="insert_into_cart.php">ARE POPCORNS READY? GO WATCH YOUR MOVIES</a>
    </div>

</div>    
   
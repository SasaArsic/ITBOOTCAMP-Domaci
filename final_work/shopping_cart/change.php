<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="selected.css">
</head>
<body>
    
</body>
</html><?php
include 'shopping_cart.php';
include '../data.php';


if(isset($_GET['action']) && $_GET['action']=='add'){
    $id=$_GET['id'];
    $mov=$b->one_movie($id);
    $c->add_item($id,$mov['title'],$mov['price'],1);
}

if(isset($_GET['action']) && $_GET['action'] == 'reduce'){
   $id = $_GET['id'];
   $c->add_quantity($id, -1);        
 }
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
   $id = $_GET['id'];
    $c->delete_item($id);
 }
 header("Location: cart.php");



?>
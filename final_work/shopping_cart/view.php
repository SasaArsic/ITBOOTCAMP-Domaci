<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    
</body>
</html>

<?php

include 'shopping_cart.php';
include '../data.php';
include "cart_header.html";

$movie= $b->all_movies();
echo "<div class='content'>";
echo "<table>";
echo "<tr><th>TITLE </th><th colspan='3' >PRICE</th></tr>";
foreach($movie as $row){
    echo "<tr>";
    foreach($row as $ind=>$val)
        if($ind =='title' or $ind=='price'){
            echo "<td class='view'>".$val."</td>";
        }  
        echo "<td class='view'>$</td>";
        echo "<td class='view' id='link'><a href='change.php?id=".$row['id']."&action=add'>ADD TO CHART</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

?>
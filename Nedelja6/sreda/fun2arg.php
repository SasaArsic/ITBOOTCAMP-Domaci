<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Бонус задатак Написати функцију која враћа N div елемената који имају M span елемената,
који имају текст од 1 до M</p>


<?php

function div_span($n,$m){
    for($i=1; $i<=$n; $i++){
        echo "<div>";
        for($j=1; $j<=$m; $j++){
            echo "<span> $j</span>";
        }
        echo "<div>";
    }
}

div_span(1,5);

// Nacin 2


function div_span2($n,$m){
    $s="";
    for($i=1; $i<=$n; $i++){
        $s .= "<div>";
        for($j=1; $j<=$m; $j++){
            $s.= "<span> $j</span>";
        }
        $s .= "<div>";
    }
    return $s;
} 

echo div_span2(3,3);




?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре)</p>

<?php

function bigger($num1, $num2, $num3){
    if($num1>$num2 and $num1>$num3){
        return $num1;
    }elseif($num2>$num3){
        return $num2;
    }else{
        return $num3;
    }
}

echo bigger(10,6,12);







?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".
</p>



<?php

function palindrom($str){
    $n1 = explode(" ", strtolower($str));
    $n2 = join("", $n1);
    return ($n2 === strrev($n2));
}

function prikaz_palindroma($niz){
    foreach($niz as $rec){
        if(palindrom($rec) === true){
            echo $rec;
            echo "<br/>";
        }
    }
}


$x=["potop", "buducnost", "lul", "nije"];
prikaz_palindroma($x);



?>
</body>
</html>
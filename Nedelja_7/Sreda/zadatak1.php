<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.
</p>


<?php

$zadat=["BMW","Mercedes", "Tojota", "KIA", "Golf","Sevrolet"];


    $nov=[];
    foreach($zadat as $rec){
        if(strlen($rec) < 5){
            array_push($nov, "<span class='zeleni'>$rec</span>");
        
        }else{
            array_push($nov, "<span class='crveni'>$rec</span>");
        
        }
        // array_push($nov,$rec);

    }


echo join(",",$nov);


?>
</body>
</html>

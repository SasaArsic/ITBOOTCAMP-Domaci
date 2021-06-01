<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). 
</p>



<?php

$x=[2,4,6,7,9,8,5];


function arit_sredina($niz){
    $c=count($niz);
    $pr=0;
    foreach($niz as $br){
        $pr += $br;
    }
    $sredina= $pr/$c;
    return $sredina;
}



function upisati_veci($niz){
    $arsr=arit_sredina($niz);
    $arsr=number_format($arsr,2);
    $veci=[];
    foreach($niz as $br){
        if($br>$arsr){
            array_push($veci,$br);
        }
    }
    return $veci;
}

$nov_niz= upisati_veci($x);
echo join(",",$nov_niz);




?>
</body>
</html>
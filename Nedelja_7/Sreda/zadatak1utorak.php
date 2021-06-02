<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.
</p>




<?php

function ne_sadrzi_nule($niz){
    $ne_sadrzi = true;
    foreach($niz as $broj){
        if($broj == 0){
            $ne_sadrzi = false;
        }
    }
    return $ne_sadrzi;
}

    $x=[2,3,5,6,7];
    $y=[3,5,7,0];

    if(ne_sadrzi_nule($x)){
        echo "Niz ne sadrzi nule <br>";
    }else{
        echo "Niz  sadrzi nule <br>";
    }
    

    if(ne_sadrzi_nule($y)){
        echo "Niz ne sadrzi nule <br>";
    }else{
        echo "Niz  sadrzi nule <br>";
    }





?>
</body>
</html>
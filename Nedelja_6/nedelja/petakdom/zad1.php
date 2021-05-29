<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)
</p>


<?php

function dvoctroc($niz){
    $c=count($niz);
    $br2=0;
    $br3=0;
    for($i=0; $i<$c; $i++){
        if($niz[$i]<10){
            continue;
        }
        if($niz[$i]>10 and $niz[$i]<100){
            $br2++;
        }
        if($niz[$i]>100 and $niz[$i]<1000){
            $br3++;
        }
    }
    if($br2>$br3){
        echo "ima vise dvocifrenih brojeva";
    }else{
        echo "ima vise trocifrenih brojeva";
    }
}

$x=[34,555,888];
dvoctroc($x);





?>
</body>
</html>
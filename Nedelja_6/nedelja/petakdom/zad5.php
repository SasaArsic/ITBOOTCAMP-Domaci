<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Data su dva niza jedan koji sadrži boje i drugi koji sadrži reči. Prikazati svaku reč preko spana u odgovarajućoj boji. Primer: $boje = ['green', 'blue', 'yellow'];       $reci = ['sto', 'stolica', 'mobilni']; 
Rec "sto" se prikazuje u zelenoj boji, stolica u plavoj, mobilni u zutoj.

</p>


<?php

$boje = ['green', 'blue', 'yellow'];
$reci = ['sto', 'stolica', 'mobilni']; 

function boje_reci($b,$r){
    $span="";
    foreach($b as $i=>$boja){
        foreach($r as $j=>$rec){
            if($i === $j){
                $span .= "<span style='color:$boja'> $rec </span>";
            }
        }
    }
    return $span;
}

$prikaz = boje_reci($boje,$reci);
echo  $prikaz;
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti
</p>



<?php

$ascniz =  ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];

function pronalazi_najuspesniji($niz){
    $max =0;
    $dan ="";
    foreach($niz as $d => $br){
        if($max < $br){
            $max = $br;
            $dan = $d;
        }
    }
    return [$dan,$max ];
}



$najusp= pronalazi_najuspesniji($ascniz);
echo join(",",$najusp);
echo "<br>";


function pro_usp($niz){
    $zb=0;
    $br=0;
    foreach($niz as $dan => $vr){
        $zb += $vr;
        $br++;
    }
    $pr = $zb / $br;
    return $pr;
}


echo "<br>";
$prosek= pro_usp($ascniz);
echo "prosek: $prosek";
echo "<br>";
 



function razlika_najbolje_najgore($niz){
    $min = min($niz);
    $max = max($niz);
    $r = $max - $min;
    return $r;
}


echo "<br>";
$razlika= razlika_najbolje_najgore($ascniz);
echo "razlika izmedju najboljeg i nagoreg: $razlika";
echo "<br>";
?>
</body>
</html>
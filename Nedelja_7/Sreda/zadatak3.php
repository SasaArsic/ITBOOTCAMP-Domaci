<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 
</p>


<?php
$x=$_GET['brojevi'];
$x=explode(" ",$x);

function bar_3_neparna($niz){
    $neparni = false;
    $brojac=0;
    foreach($niz as $broj){
        if($broj % 2 != 0){
            $brojac++;
        }
    }
    if($brojac >=3){
        $neparni= true;
    }
    return $neparni;
}


if(bar_3_neparna($x)){
    echo "Niz sadrzi bar 3 neparna broja <br>";
}else{
    echo "Niz ne sadrzi 3 neparna broja <br>";
}

function svi_manji($niz){
    $ima= true;
    foreach ($niz as $br){
        if($br > 1000){
            $ima = false;
        }
    }
    return $ima;
}

if(svi_manji($x)){
    echo "Svi brojevi u nizu su manji od 1000 <br>";
}else{
    echo "Nisu svi brojevi u nizu manji od 1000 <br>";
}

?>
</body>
</html>
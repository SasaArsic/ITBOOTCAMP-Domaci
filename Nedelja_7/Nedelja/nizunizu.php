<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1.Dodati u gornji niz jos 4 osobe po zelji.</p>



    <?php

    $x = [
        //0 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        //1
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        //2
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        //3
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
    ];

        
    array_push ($x, ['ime'=>"Vanja", "godine"=>45, "grad"=>"Sombor", "pozicija"=>"Team lead"]);
    array_push ($x, ['ime'=>"Milos", "godine"=>34, "grad"=>"Cacak", "pozicija"=>"HR"]);
    array_push ($x, ['ime'=>"Lana", "godine"=>44, "grad"=>"Kragujevac", "pozicija"=>"administrator"]);
    array_push ($x, ['ime'=>"Anja", "godine"=>56, "grad"=>"Kraljevo", "pozicija"=>"Tester"]);
    

    foreach($x as $osoba){
        echo "<p>";
        foreach($osoba as $ind=>$el)
            echo "<span>$ind=$el</span>, ";
        echo "</p>";
    }
?>

<p>2.Napisati fju koja prikazuje imena svih programera.</p>


<?php

function prikazuje_imena($niz){
    foreach($niz as $osoba){
        echo "<p>".$osoba['ime']. "</p>";
    }
}

prikazuje_imena($x);
echo "<br>";


?>

<p>3.Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.</p>

<?php
 
function prikazuje_osobu($osoba){
    echo "<p>";
    foreach($osoba as $el){
        echo $el.","; 
    }
    echo "</p>";
}


for($i=0; $i<count($x); $i++)
    if(stripos($x[$i]['ime'], "s") !== false){
        prikazuje_osobu($x[$i]);
    }

    prikazuje_osobu($x[3]);
?>


</body>
</html>
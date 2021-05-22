<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)

</p>
    <?php

$ime= "Sasa";
$prezime = "Arsic";

function paragraf(){
    global $ime, $prezime;
    echo "<span>$ime</span> <span>$prezime</span>";
}

echo "Pozivamo funkciju pargraf: ";
paragraf();
echo "<br/>";
echo "<br/>";

$di= strlen($ime);
$dp = strlen($prezime);
$uk = $di + $dp;


echo "Pozivamo funkciju pargraf onoliko puta koliko ima slova u imenu i prezimenu";
echo "<br/>";

for($i=1; $i<=$uk; $i++){
    paragraf();
    echo "<br/>";
}




?>
</body>
</html>
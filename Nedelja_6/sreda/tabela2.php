<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

td{
    height: 30px;
    width: 30px;
    border: 1px solid black;
}    
    </style>
</head>
<body>
<p>Dat je slucajan broj od 1 do 64.
Napraviti tabelu 8x8. Sirina i visina svake celije je 30px i imaju border 1px. 
Celiji sa datim brojem postaviti crnu pozadinu. (preko klase ili inline style). 
Npr ako je broj 11, onda je celija u drugom redu i 3.koloni obojena crno.
</p>
    <?php

    $n= mt_rand(1,64);
    echo "<p> Slucajan broje je: $n</p>";

    echo "<table>";
    $brojac=0;
    for($i=1; $i<=8; $i++){
        echo "<tr>";
       for($j = 1; $j<=8; $j++ ){
            $brojac++;
            if($brojac==$n){
            echo "<td style='background-color: black'>$brojac </td>";
            }else{
            echo "<td>$brojac </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    
    















?>
</body>
</html>
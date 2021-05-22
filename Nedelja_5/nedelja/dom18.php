<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ispisati brojeve od 20 do 1 preko while ciklusa.</p>


    <?php

    $i=20;
    while($i>1){
        $i--;
        echo "$i, ";
    }
    ?>

    <p>Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom</p>



    <?php

    $pr=1;
    $p = 0;
    $i=30;
    while($pr<=100000){
        $p=$pr;
        $pr*= $i;
        $i--;
    }
    echo "<span style='color:green'>Poalednji pomnozen $i</span>,<span style='color:red'> Poslednji rezultat $pr</span> ";
    echo "<br/>";
    echo "Poslednji rezultat pre prelaska 100.000: $p";

?>


<p>Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4.</p>


<?php

for($i=30; $i<=99; $i++){
    $prvac=floor($i/10);
    $drugac=$i%10;
    if($prvac % 3 == 0 or $drugac % 4 == 0) continue;
    
    echo "$i, ";
}






?>

</body>
</html>
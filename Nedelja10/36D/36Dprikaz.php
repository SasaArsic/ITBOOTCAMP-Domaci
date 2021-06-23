<?php

include '36D.php';
include '36Dbaza.php';


$proizvod= $b->lista_proizvoda();


   
echo "<div style='border: 2px solid black; width:10%;'>";
foreach($proizvod as $row){
    echo "<div style='border: 2px solid black'>";
    foreach($row as $val)
            echo "<span style='border: 1px solid black'>".$val."</span>";
    echo "<form action='promena_korpe.php'>";
    echo "<input type='hidden' name='akcija' value='dodaj'>";
    echo "<input type='hidden' name='id_proizvoda' value='".$row['id'].">";
    echo "<input type='submit'  value='KUPI'>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";
echo "<br>";






?>
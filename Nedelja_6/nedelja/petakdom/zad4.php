<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.oznacen{
    background-color:yellow;
}
</style>
<body>
    <p> Prethodnoj funkciji dodati parametar $oznacen koja pokazuje koji <li> treba imati klasu oznacen na sledeci nacin:
a) Parametar oznacen predstavlja index niza (0 ili 1 ili 2….)
b) Parametar oznacen predstavlja sta pise u meniju ("Stavka 1", ili "Stavka 2"…)
 U css, dodati klasu oznacen - druga boja pozadine.
</p>


<?php

function pravi_listu($niz,$oznacen){
    $lista= "<ul>";
    foreach($niz as $ind=>$rec){
        if($ind==$oznacen){
            $lista .= "<li class='oznacen'>$rec</li>";
        }else{
            $lista .= "<li>$rec</li>";
        }
    }
    $lista .= "</ul>";
    return $lista;
}

$x= ["stavka1","stavka2","stavka3","stavka4"];
echo pravi_listu($x,3);
echo "<br/>";

function pravi_listu_2($niz,$oznacen){
    $lista= "<ul>";
    foreach($niz as $ind=>$rec){
        if($rec==$oznacen){
            $lista .= "<li class='oznacen'>$rec</li>";
        }else{
            $lista .= "<li>$rec</li>";
        }
    }
    $lista .= "</ul>";
    return $lista;
}


echo pravi_listu_2($x,"stavka2");
?>
</body>
</html>
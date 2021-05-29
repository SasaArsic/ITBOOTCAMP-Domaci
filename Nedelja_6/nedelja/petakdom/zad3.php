<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napisati fju koja od niza reči pravi html listu kao meni... 
Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  
</p>



<?php

function pravi_listu($niz){
    $lista= "<ul>";
    foreach($niz as $rec){
        $lista .= "<li>$rec</li>";
    }
    $lista .= "</ul>";
    return $lista;
}

$x= ["stavka1","stavka2","stavka3","stavka4"];
echo pravi_listu($x);


?>
</body>
</html>
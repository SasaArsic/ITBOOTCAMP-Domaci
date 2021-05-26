<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
редом бројеве од 1 до N</p>

<?php

function create_div($n){
    echo"<div>";
    for($i=1; $i<=$n; $i++){
        echo "<span>$i</span>";
    }
    echo "</div>";
}

create_div(5);


// drugi nacin funkcija u funkciji

function create_span($n){
    return "<span>$n</span>";
}

 echo create_span(4);

function create_div2($n){
     echo "<div>";
     for($i=1; $i<=$n; $i++){
        echo create_span($i);
    }
    echo "</div>";
}

create_div2(10);
?>


<p>Treci nacin</p>


<?php


function create_div_second($n){
    $s = "<div>";
    for($i=1; $i<=$n; $i++){
        $s .= "<span>$i</span>";
    }$s .= "</div>";
    return $s;
}

echo create_div_second(7);





?>
</body>
</html>
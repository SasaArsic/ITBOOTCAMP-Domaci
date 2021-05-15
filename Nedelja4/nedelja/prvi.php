<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .red{
        color:red;
    }
    .green{
        color:green;
    }
    </style>
</head>
<body>

<div>NACIN 1 (a)</div> <br>
    <?php
    $a = mt_rand(1,30);
    echo "Prvi slucajan broj: $a";
    echo "<br>";
    $b = mt_rand (1,30);
    echo "Drugi slucajan broj: $b";
    echo "<br>";

    if($a>$b){
        echo "<p style='color:red'>$a<p/>";
        echo "<p style='color:green'>$b<p/>";

    }
    if($a<$b){
        echo "<p style='color:red'>$b<p/>";
        echo  "<p style='color:green'>$a<p/>";

    }

?>
<div>NACIN 1 (b)</div>
<?php


    if($a>$b){
        echo "<p style='color:red'>$a<p/>";
        echo "<p style='color:green'>$b<p/>";

    }else{
        echo "<p style='color:red'>$b<p/>";
        echo  "<p style='color:green'>$a<p/>";

    }

?>


<div>NACIN 2</div> <br>

<?php

$a = mt_rand(1,30);
echo "Prvi slucajan broj: $a";
echo "<br>";
$b = mt_rand (1,30);
echo "Drugi slucajan broj: $b";
echo "<br>";


if($a>$b){
    $cl = 'red';
}else{
    $cl= 'green';
}
if($b>$a){
    $cl2='red';

}else{
    $cl2='green';
}

?>

<p class='<?=$cl?>'><?=$a?></p>
<p class='<?=$cl2?>'><?=$b?></p>

</body>
</html>
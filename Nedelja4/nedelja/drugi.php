<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a = mt_rand(1,50);
    echo "Prvi slucajan broj je: $a";
    echo "<br>";
    $b = mt_rand(1,50);
    echo "Drugi slucajan broj je: $b";
    echo "<br>";
    $c = mt_rand(1,50);
    echo "Treci slucajan broj je: $c";
    echo "<br>";


    echo "Poredjani u rastucem redosledu:";

    if($a<$b and $a<$c){
        if($b<$c){
            echo "$a, $b, $c";
        }else{
            echo "$a, $c, $b";
            
        }
    }if($b<$a and $b<$c){
        if($a<$c){
            echo "$b, $a, $c";

        }else{
            echo "$b, $c, $a";

        }
    }
    if($c<$b and $c<$a){
        if($a<$b){
            echo "$c, $a, $b";

        }else{
            echo "$c, $b, $a";

        }
    }
    


?>
</body>
</html>
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
    $b1 =$_GET['br1'];
    $b2 =$_GET['br2'];
    $b3 =$_GET['br3'];
    $b4 =$_GET['br4'];

    echo "Broj 1: $b1";
    echo "<br/>";
    echo "Broj 2: $b2";
    echo "<br/>";
    echo "Broj 3: $b3";
    echo "<br/>";
    echo "Broj 4: $b4";
    echo "<br/>";



    function provera(){
        global $b1, $b2, $b3, $b4;
        if($b2>$b1 and $b4>$b3){
            $zb1=0;
            for($i=$b1; $i<=$b2; $i++){
                if($i%4==0){
                    $zb1+=$i;
                }
            }
            $zb2=0;
            for($i=$b3; $i<=$b4; $i++){
                if($i%3==0){
                    $zb2+=$i;
                }
            }
            if ($zb2 >$zb1){
            echo "Zbir brojva koji su deljivi sa 3 u rasponu od treceg do cetvrtog unesenog broja je: $zb2";}
            else{
            echo "Zbir brojva koji su deljivi sa 4 u rasponu od prvog do  drugog unesenog broja je: $zb1";}
        }

        else{ 
            die("Brojevi koje ste uneli na drugoj  i cetvrtoj poziciji nisu veci od brojeva unetih na prvoj i drugoj stoga se program nece izvrsiti.");
        }

    }


    provera();






?>
</body>
</html>
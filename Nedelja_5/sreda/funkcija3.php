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
     $i1 = 'Marija';
     $i2 = 'Lena';
 
     function duze_ime(){
         global $i1, $i2;
         if (strlen($i1)>strlen($i2)){
             return $i1;
         }else{
             return $i2;
         }
     }


     function krace_ime(){
        global $i1, $i2;
        if (strlen($i1)<strlen($i2)){
            return $i1;
        }else{
            return $i2;
        }
    }
 
    $di = duze_ime();
    $ki = krace_ime();

    echo "<p style='color:red'>$di</p>";
    echo "<p style='color:green'>$ki</p>";


 






?>
</body>
</html>
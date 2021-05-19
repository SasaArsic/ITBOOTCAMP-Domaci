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

    $i1 = 'Ana';
    $i2 = 'Aleksandra';

    function ime(){
        global $i1, $i2;
        if (strlen($i1)>strlen($i2)){
            echo $i1;
        }else{
            echo $i2;
        }
    }

    ime();




?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        width: 70px;
        height: 30px;
    }
    a{
        color: black;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <?php

    $b1 = mt_rand(1,10);
    $b2 =mt_rand(1,10);
    $b3 = mt_rand(1,10);

    $k1 = $b1**2;
    $k2 = $b2 **2;
    $k3 = $b3 **2;
    ?>


    <table>
    <tr>
    <td><?=$b1?></td>
    <td><?=$k1?></td>
    </tr>
    <tr>
    <td><?=$b2?></td>
    <td><?=$k2?></td>
    </tr>
    <tr>
    <td><?=$b3?></td>
    <td><?=$k3?></td>
    </tr>
    
    </table>
    <a href="../zadatak_2/index.php">Resenje zadatka 2</a>
</body>
</html>
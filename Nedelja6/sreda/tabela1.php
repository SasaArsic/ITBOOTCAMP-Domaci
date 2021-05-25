<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Napravitabelu 3x4 u kojoj pise: 
2 - 3 2 - 6 2 - 9 2 - 12
4 - 3 4 - 6 4 - 9 4 - 12
6 - 3 6 - 6 6 - 9 6 - 12

</p>
    <?php


echo "<table border='1'>";
    for($i=2; $i<=6; $i+=2){
        echo "<tr>";
        for($j = 3; $j<=12; $j+=3 ){
            echo "<td> $i - $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";





?>
</body>
</html>
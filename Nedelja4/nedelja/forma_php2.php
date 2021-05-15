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
    $ime=$_GET['impr'];

    $fl=substr($ime,0,1);
    $sp=strpos($ime," ");
    $ll=substr($ime,5,1);

    echo "$fl.$ll."

?>
</body>
</html>
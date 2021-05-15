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
    $ime=$_GET['ime'];
    $pr=$_GET['prezime'];

    $ime = substr($ime,0,1);
    $pr = substr($pr,0,1);

    $ime=strtoupper($ime);
    $pr=strtoupper($pr);

    echo "$ime.$pr.";






?>
</body>
</html>
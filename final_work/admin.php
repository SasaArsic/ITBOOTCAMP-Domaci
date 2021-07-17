<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php

include ("data.php");

if(isset($_GET['action']) && $_GET['action']=='delete'){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $b->remove_movie($id);
    }
}
if(isset($_GET['action']) && $_GET['action']=='add'){
    if(isset($_GET['title']) && isset($_GET['published']) && isset($_GET['genre']) && isset($_GET['pic']) && isset($_GET['desc']) && isset($_GET['price'])){
        $title=$_GET['title'];
        $published=$_GET['published'];
        $genre=$_GET['genre'];
        $pic=$_GET['pic'];
        $desc=$_GET['desc'];
        $price=$_GET['price'];
        $b->add_movie($title,$published,$genre,$pic,$desc,$price);
    }
}
if(isset($_GET['action']) && $_GET['action']=='change'){
    if(isset($_GET['id']) && isset($_GET['title']) && isset($_GET['published']) && isset($_GET['genre']) && isset($_GET['pic'])&& isset($_GET['desc']) && isset($_GET['price'])){
        $title=$_GET['title'];
        $published=$_GET['published'];
        $genre=$_GET['genre'];
        $pic=$_GET['pic'];
        $desc=$_GET['desc'];
        $price=$_GET['price'];
        $id = $_GET['id'];

        $b->update_movie($id,$title,$published,$genre,$pic, $desc,$price);
    }
}


$movies= $b->all_movies();
echo "<div class='admindiv'>";
echo "<table>";
echo "<tr><th>ID</th><th>TITLE</th><th>PUBLISHED</th><th>GENRE</th><th>PICTURE</th><th>DESCRIPTION</th><th colspan='3'>PRICE</th>";
foreach($movies as $row) {
    echo "<tr>";
    foreach($row as $val)
        echo '<td>'. $val . '</td>';
        echo "<td><a href='change.php?action=form_change&id=".$row['id']."'>CHANGE</a></td>";
        echo "<td><a href='admin.php?action=delete&id=".$row['id']."'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
<a href='#addm' onclick="appear()" id='add_movie'>NEW MOVIE</a>


  
    <script>
        function appear() {
          document.getElementById("addm").style.display = "inline-block";
        }
      </script>
<form id='addm' action="admin.php">
    <input type="hidden" name="action" value="add">
    <input name="title" placeholder='Title' >
    <input name="published" placeholder='Year of publication'>
    <input name="genre" placeholder='Which genre'>
    <input name="pic" placeholder='Pic/url'>
    <input name="desc" placeholder='Description'>
    <input name="price" placeholder='Price'>
    <input id='addbtn' type="submit" value="ADD">
    </form>


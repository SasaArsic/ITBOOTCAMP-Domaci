<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="change.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include "data.php";
    if(isset($_GET['action']) && $_GET['action']=='form_change'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $movie = $b->one_movie($id);
        }
    }
  
    
    
?>
<div class='changemovie'>
    <p>Change Movie:</p>
    <form action="admin.php">
    <input type="hidden" name="action" value="change">
    <input type="hidden" name="id" value="<?=$movie['id'] ?>">
    <input name="title" value="<?=$movie['title']?>" ><br>
    <input class='s' name="published" value="<?=$movie['published']?>"><br>
    <input class='s' name="genre" value="<?=$movie['genre']?>"><br>
    <input name="pic" value="<?=$movie['picture']?>"><br>
    <textarea cols="70" rows="10" id='desc'  name="desc" ><?=$movie['description']?></textarea> <br>
    <input class='s' name="price" value="<?=$movie['price']?>"><br>
    <input  id='button' type="submit" value="CHANGE"><br>
    </form>
    </div>
<!-- 
    <script>
        $(function() {
    $( "#button" ).click(function() {
      $( "#button" ).addClass( "onclic", 250, validate);
    });
  
    function validate() {
      setTimeout(function() {
        $( "#button" ).removeClass( "onclic" );
        $( "#button" ).addClass( "validate", 450, callback );
      }, 2250 );
    }
      function callback() {
        setTimeout(function() {
          $( "#button" ).removeClass( "validate" );
        }, 1250 );
      }
    });
    </script> -->

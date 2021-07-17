<?php


    include "Film.php";
    
    if(!isset($_GET['id'])){
        die("This page does not exist");
    }
    $id = $_GET['id'];
   
    $lf->one_film_more_details($id);



?>
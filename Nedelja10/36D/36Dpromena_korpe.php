<?php

include "36D.php";
include "36Dbaza.php";

if(isset($_GET['akcija']) && $_GET['akcija']=='dodaj'){
    $id=$_GET['id_proizvoda'];
    $proizvod=$b->daj_jedan_proizvod($id);
    $p->dodaj_proizvod($id,$proizvod['naziv'],$proizvod['cena'],1);
    $p->prikaz();
}







?>
<?php

class WebShop{

    function heder(){
        echo "<h1><a href='index.php'>Dobrodosli u Web Shop</a></h1>";
    }

    function futer(){
        echo "<h5>Bolje Vas nasli!</h5>";
    }
    function meni(){
        //napraviti meni tako sto se pokupe sve grupe iz niza podaci, i naprave svi linkovi.
        echo "<ul style='list-style:none; '>
        <li style='display:inline-block;'><a href='index.php'>SVE</a></li>
        <li style='display:inline-block;'><a href='index.php? grupa=bela'>BELA</a></li>
        <li style='display:inline-block;'><a href='index.php? grupa=mlecna'>MLECNA</a></li>
        <li style='display:inline-block;'><a href='index.php? grupa=crna'>CRNA</a></li></ul>";
    }
}

$pr= new WebShop();






?>
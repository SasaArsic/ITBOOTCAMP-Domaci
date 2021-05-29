<!-- <p>Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div  (echo 😊) za prikaz svih podataka.
Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena.
Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.
Ako je popust 0, prikazana je samo prava cena.
CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse.
</p> -->
<style>
div{
    width: 200px;
    display: inline-block ;
    border: 2px solid black;
    height: 305px;
}
img{
    width: 200px;
    height: 200px;
}
.sa_popustom{
    color: green;
}
.original_cena{
    color:red;
    text-decoration: line-through;
}
</style>
<?php

function proizvod($ime,$slika,$cena,$popust=0){
    $p = $cena / 100;
    $n = $p * $popust;
    $nova = $cena - $n;

    echo "<div> 
    <img src='$slika'> <br/>
    <p>$ime</p>";
    if($popust>0){
        echo "<p class='original_cena'> Cena:$cena</p>
        <p class='sa_popustom'>  Cena sa popustom: $nova </p>";
    }else{
        echo "<p class='original_cena'> Cena:$cena</p>";
        echo "<br/>";
    }
    echo "</div>";
}


?>
<?php

class Baza{
    public $conn;

    function __construct($baza){
        $this->conn = new mysqli('localhost', 'root', '', $baza);
        if ($this->conn->connect_error)
            die ('Greska u konekciji: '. $this->conn->connect_error);
        else
            echo 'Konektovan!';
    }

    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci === false)
            return ['uspesno'=>false,'poruka'=> $this->conn->error];
        else 
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return ['uspesno'=>true, 'niz'=>$niz];
    }
    function izvrsi_upit($upit){
        $odg = $this->conn->query($upit);
        if($odg === false) {
            die('Nije izvrsen upit: ' . $this->conn->error);
        } else {
            echo "Uspesno izvrsen upit!";
        }
            
    }
    function prikazi_destinacije(){
        $r= $this->izvrsi_select('select * from destinacije');
        if($r['uspesno']==true)
            return $r['niz'];
        else{
            die ("neusesan upit ".$r['poruka']);
        }
    }

    function prikazi_putnike(){
        $r= $this->izvrsi_select("SELECT ime_prezime, datum_polaska, datum_povratka, drzava, grad FROM (`putnici_putovanja` AS PP JOIN putnici AS P ON PP.broj_pasosa=P.broj_pasosa) JOIN putovanja AS PUT ON PP.id_putovanja=PUT.id JOIN destinacije AS D ON PUT.destinacija_id=D.id");
        if($r['uspesno']==true)
            return $r['niz'];
        else{
            die ("neusesan upit ".$r['poruka']);
        }
    }
    function otkazi_rezervaciju($br_pasosa){
        $r= $this->izvrsi_upit("DELETE FROM `putnici_putovanja` WHERE broj_pasosa=$br_pasosa");
    }

}

$b= new Baza('turisticka_agencija');
$destinacije = $b->prikazi_destinacije();

echo "<table border='1'>";
foreach($destinacije as $red) {
    echo "<tr>";
    foreach($red as $val)
        echo '<td>'. $val . '</td>';
    echo "</tr>";
}
echo "</table>";

$putnici=$b->prikazi_putnike();

echo "<br>";

echo "<table border='1'>";
foreach($putnici as $red) {
    echo "<tr>";
    foreach($red as $val)
        echo '<td>'. $val . '</td>';
    echo "</tr>";
}
echo "</table>";

echo "<br>";

$b->otkazi_rezervaciju(23);



?>
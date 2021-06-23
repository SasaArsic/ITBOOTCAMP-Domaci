<?php

class Baza{
    public $conn;

    function __construct($baza){
        $this->conn= new mysqli('localhost','root','',$baza);
        if ($this->conn->connect_error)
            die('Greska:'.$this->conn->connect_error);
        else
            echo "Konekcija uspesna";

    }

    function izvrsi_select($select){
        $podaci = $this->conn->query($select);
        if($podaci === false)
            return['uspesno'=> false, 'poruka'=>$this->conn->error];
        else{
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return ['uspesno'=>true, 'niz'=>$niz];
        }

    }

    function izvrsi_upit($upit){
        $odg=$this->conn->query($upit);
        if($odg===false){
            die('Nije izvresn upit:'.$this->conn->error);
        } else{
            echo "Uspesno izvrsen upit";
        }
    }

    function vraca_id($grad,$drzava){
        $r=$this->izvrsi_select("SELECT id FROM destinacije WHERE drzava='$drzava' AND grad='$grad'");
        if($r['uspesno']== true){
            return $r['niz'];
        }
        else{
            die("Neuspesan Upit:" .$r['poruka']);
        }
    }
    function daj_destinaciju(){
        $r = $this->izvrsi_select("select * from destinacije");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die("Neuspesan upit: ".$r['poruka']);
        }
    }
    function putovanja($id){
        $r=$this->izvrsi_select("SELECT * FROM putovanja WHERE destinacija_id='$id'");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die("Neuspesan upit: ".$r['poruka']);
        }
    }
    function brise_putovanja($id){
        $this->izvrsi_upit("DELETE FROM putnici_putovanja where id_putovanja='$id'");
    }
    function spisak_putnika(){
        $r=$this->izvrsi_select("SELECT * FROM putnici_putovanja");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die("Neuspesan upit: ".$r['poruka']);
        }

    }
}

$d= new Baza('turisticka_agencija');

$des=$d->daj_destinaciju();
echo "<table border='1'>";
    foreach($des as $row){
        echo "<tr>";
        foreach($row as $val){
            echo "<td>".$val."</td>";
        }
        echo "</tr>";
    }
echo "</table>";
echo "<br>";

if(isset($_GET['drzava']) && isset($_GET['grad'])){
    $d_id=$d->vraca_id($_GET['drzava'],$_GET['grad']);
    $d_id=$d_id[0]['id'];
    echo "id putovanja =" .$d_id;
    echo "<br>";
    $putovanje = $d->putovanja($d_id);
    echo "<table border='1'>";
        foreach($putovanje as $row){
            echo "<tr>";
            foreach($row as $val){
                echo "<td>".$val."</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
    echo "<br>";

    $d->brise_putovanja($putovanje[0]['id']);
}




$sp=$d->spisak_putnika();
echo "<p>Spisak putnika</p>";
echo "<table border='1'>";
    foreach($sp as $row){
        echo "<tr>";
        foreach($row as $val){
            echo "<td>".$val."</td>";
        }
        echo "</tr>";
    }
echo "</table>";
echo "<br>";


?>
<p>Izaberi putovanje</p>
<form action="35D.php">
    <input name='grad'>
    <input name='drzava'>
    <input type="submit" value="posalji">
</form>
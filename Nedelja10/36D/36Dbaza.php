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

  
    
    function lista_proizvoda(){
        $r=$this->izvrsi_select("SELECT * FROM proizvodi");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die("Neuspesan upit: ".$r['poruka']);
        }

    }
}

$b= new Baza('korpa_baza');



?>

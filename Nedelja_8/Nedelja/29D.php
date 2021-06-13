<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu.
</p>

<?php

class SastojakHrane{
    public $naziv, $mera, $kalorije;

    function __construct($naziv, $mera, $kalorije){
        $this->naziv=$naziv;
        $this->mera=$mera;
        $this->kalorije=$kalorije;
    }

    function promeniMeru($nova_mera){
        $this->mera=$nova_mera;
    }

    function prikazi(){
        echo "<p>Naziv:".$this->naziv." , Mera: ".$this->mera." i Kalorije: ".$this->kalorije."</p>";
    }
}


$s1= new SastojakHrane('so',100,9);
echo $s1->prikazi();
$s1->promeniMeru(690);
echo $s1->prikazi();


/**
 * Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
* Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.   */


class Jelo{
    
    public $naslov, $opis, $sastojci;


    function __construct($naslov,$opis,$podaci){
        $this->naslov=$naslov;
        $this->opis=$opis;
        $this->sastojci=[];
        for($i=0;$i<count($podaci); $i++){
           $p=new SastojakHrane($podaci[$i]['naziv'],$podaci[$i]['mera'],$podaci[$i]['kalorije']);
           array_push($this->sastojci,$p);
       }

    }
    
    function prikazi(){
        echo "<p>JELO: ".$this->naslov." je ".$this->opis." i sastoji se iz";
    for($i=0;$i<count($this->sastojci);$i++){
        $this->sastojci[$i]->prikazi();
    }
    echo "</p>";
        
    }
    function promeniMeru($sastojak,$nova_mera){
        for($i=0;$i<count($this->sastojci);$i++){
            if($this->sastojci[$i]->naziv == $sastojak){
                $this->sastojci[$i]->promeniMeru($nova_mera);
            }
            
        }
    }
}


$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
];


$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi();

?>
</body>
</html>
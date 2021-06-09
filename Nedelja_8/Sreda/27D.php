<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
Napisati konstruktor koji dobija i  postavlja sve clanice.
Napisati metodu za citanje cene.
Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."
</p>
<p>Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.

U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.
</p>


<?php
 class Krevet{
     public $duzina,$sirina,$materijal;
     private $cena;

     public function __construct($duzina,$sirina,$materijal,$cena){
         $this->duzina=$duzina;
         $this->sirina=$sirina;
         $this->materijal=$materijal;
         $this->cena=$cena;

     }

     public function daj_cenu(){ 
        return $this->cena;
    }
    public function __toString(){
        return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina." napravljen od ".$this->materijal." po ceni ".$this->cena;
    }
    public function popust($popust){
        $p= $this->cena * $popust/100;
        $novacena =$this->cena - $p;
        $this->cena=$novacena;
        return $novacena;
    }
 }


$k1=new Krevet(2,3,"cer",344);
echo $k1->daj_cenu()." ";
echo "<p>$k1</p>";
$k2=new Krevet(4,6,"bukva",999);

if($k2->daj_cenu()>$k1->daj_cenu()){
    echo "<p>$k2</p>";
}
else{
   echo "<p>$k1</p>";
}

$k3= new Krevet(6,8,"lipa",500);
echo "<p>$k3</p>";

$k3->popust(10);
echo "<p>$k3</p>";

?>
</body>
</html>
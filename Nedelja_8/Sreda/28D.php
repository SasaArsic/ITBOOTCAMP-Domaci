<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>1,Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice. <br>
2.Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
(Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")

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



class Baldahin extends Krevet{
    public $visina,$cenaBaldahina;

    function __construct($duzina,$sirina,$materijal,$cena,$visina,$cenaBaldahina){
        $this->visina=$visina;
        $this->cenaBaldahina=$cenaBaldahina;
        parent::__construct($duzina,$sirina,$materijal,$cena);
    }

    function __toString(){
        return "Cena kreveta bez baldahina: ".$this->daj_cenu()." cena kreveta sa baldahinom: ".$this->daj_cenu()+$this->cenaBaldahina;
    }
}


$kb= new Baldahin(200,300,'bukva',4000,100,1500);
echo $kb;


?>
</body>
</html>
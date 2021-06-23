<?php
session_start();

$_SESSION['stavke_korpe']=[];



class Stavke{
    public $stavke_korpe;


    function __construct(){
        $this->stavke_korpe=[];
    }

    function dodaj_proizvod($id,$naziv,$cena,$kolicina){
        $noviniz=['id'=>$id,'naziv'=>$naziv,'cena'=>$cena,'kolicina'=>$kolicina];
        array_push($this->stavke_korpe,$noviniz);
    }

       

    function dodaj_kolicinu($id,$koliko){
        for($i=0;$i<count($this->stavke_korpe);$i++){
            if($this->stavke_korpe[$i]['id']== $id){
                $this->stavke_korpe[$i]['kolicina']+=$koliko;
            }
        }
    }
    



    function brisanje($id){
        for($i=0;$i<count($this->stavke_korpe);$i++){
            if($this->stavke_korpe[$i]['id']== $id){
                array_splice($this->stavke_korpe,$i,1);
            }
        }
    }
}


// $p= new Stavke();
// $p->dodaj_proizvod(1,'lopta',900,1);
// print_r($p);
// echo "<br>";
// $p->dodaj_kolicinu(1,8);
// print_r($p);
// $p->dodaj_proizvod(2,'zvaka',9,4);
// $p->dodaj_proizvod(3,'lutka',800,2);
// print_r($p);
// echo "<br>";
// $p->brisanje(1);
// print_r($p);
// echo "<br>";


?>
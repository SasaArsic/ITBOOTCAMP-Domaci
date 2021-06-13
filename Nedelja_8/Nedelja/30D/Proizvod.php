<?php 
    include "podaci.php";
    
    class Proizvod{
        public $id, $ime,$slika,$opis, $grupa,$naslov, $cena;

        function __construct($niz){
            
            $this->id = $niz['id'];
            $this->ime = $niz['ime'];
            $this->slika = $niz['slika'];
            $this->opis = $niz['opis'];
            $this->naslov = $niz['naslov'];
            $this->cena = $niz['cena'];
            $this->grupa = $niz['grupa'];

        }
        function prikazi_proizvod(){
            echo "<div style='border:2px solid  black; width:400px; display:inline-block; height:400px; width:300px;' >";
            echo "<h1 class='naslov_proizvoda'>$this->naslov</h1>";
            echo "<h6>$this->grupa</h6>";
            echo "<img style='width:200px' src='".$this->slika."' alt='slika'/>";
            echo "<a href='detaljnije.php?id=$this->id'>Detaljnije</a>";
            echo "</div>";
        }
        function prikazi_proizvod_detaljnije() {
            echo "<h1>$this->naslov</h1>";
            echo "<img style='width:400px'  src='$this->slika' alt='slika'>";
            echo "<p>$this->opis</p>";
            echo "<p>$this->cena</p>";
        }
    }

    class ListaProizvoda{
        public $p;


        function __construct(){
            $this->p = [];
        }
        function dodaj_proizvode($podaci){
            for($i=0; $i<count($podaci); $i++){
                $pr = new Proizvod($podaci[$i]);
                array_push($this->p, $pr);
            }

        }
        function dodaj_4_proizvoda($proizvod0, $proizvod1, $proizvod2, $proizvod3){
            $this->p[0] = new Proizvod($proizvod0);
            $this->p[1] = new Proizvod($proizvod1);
            $this->p[2] = new Proizvod($proizvod2);
            $this->p[3] = new Proizvod($proizvod3);
        }
        function prikazi_sve_proizvode($grupa=""){
        foreach($this->p as $jedan_proizvod)
        if($jedan_proizvod->grupa == $grupa or $grupa == "")
            $jedan_proizvod->prikazi_proizvod();
            
        }

                  
        

        function prikazi_jedan_proizvod_detaljnije($id){
            for($i=0; $i<count($this->p); $i++){
                if($this->p[$i]->id == $id)
                    $this->p[$i]->prikazi_proizvod_detaljnije();
            }
        }
    }

    $lp = new ListaProizvoda();
    $lp->dodaj_proizvode($podaci);
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
 
$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];
   echo "<p>====================================================</p>";
   echo "<p>1.  Preko map fje dodati svakom clanu godine_staza (jedan slucajan broj od 1 do 3, nije niz)</p>";
   
   $x=array_map(function($osoba){
       for($i=0;$i<count($osoba);$i++){
           $osoba['godine_staza']=mt_rand(1,3);
       }
       return $osoba;
   },$x);


   echo "<p>Posle dodavanja godine staza</p>";
   foreach($x as $osoba){
       echo "<p>";
       foreach($osoba as $ind=>$el)
       echo "<span>$ind=$el</span>,";
       echo "</p>";
   }




//Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
   //
function prikazi_osobu($osoba){
    echo "<p>".join(",", $osoba)."</p>";
}
function prikazi_osobe($niz){
    for($i=0; $i<count($niz); $i++)
        prikazi_osobu($niz[$i]);
    }

usort($x, function($p, $d){
    if($p['godine_staza']==$d['godine_staza'])
        if($p['godine']>$d['godine'])
            return -1; 
        else    
            return 1;
    if($p['godine_staza']>$d['godine_staza'])
       return -1; 
     else    
        return 1;
});


prikazi_osobe($x);
echo "<br>";


$max=0;
    foreach($x as $osoba){
        if($max<$osoba['godine_staza']){
            $max=$osoba['godine_staza'];
        }
    }
echo "maximalna vrednost: $max";

$maximalni = array_filter($x, function($osoba){
    global $max;
    return ($osoba['godine_staza'] === $max); 
});


prikazi_osobe($maximalni);
echo "<br>";

?>



</body>
</html>
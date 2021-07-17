<?php
session_start();?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content_of_cart.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    if(!isset($_SESSION['items']))
    $_SESSION['items']=[];
    
class Cart{
    public $items;


    function __construct(){
        $this->items=$_SESSION['items'];
    }

    function add_item($id,$title,$price,$quantity){
        $have=false;
        for($i=0;$i<count($this->items);$i++){
            if($this->items[$i]['id']== $id){
                $this->add_quantity($id,$quantity);
                $have=true;
                break;
            }
        }
        if(!$have){
            $newa=['id'=>$id,'title'=>$title,'price'=>$price,'quantity'=>$quantity];
            array_push($this->items,$newa);
            $_SESSION['items']=$this->items;
        }
    
    }

    // function content(){
    //     echo "<table class='selected'>";
    //     for($i=0;$i<count($this->items);$i++){
    //         echo "<tr>";
    //         echo "<td>".$this->items[$i]['title']."</td>";
    //         echo "<td>".$this->items[$i]['price']."</td>";
    //         echo "<td>".$this->items[$i]['quantity']."</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // }

    function add_quantity($id,$q){
        for($i=0;$i<count($this->items);$i++){
            if($this->items[$i]['id']== $id){
                $this->items[$i]['quantity']+=$q;
            }
        }
        $_SESSION['items']=$this->items;
    }
    function delete_item($id){
        for($i=0; $i<count($this->items); $i++){
            if($this->items[$i]['id'] == $id){
                array_splice($this->items, $i, 1);
                break;
            }
        }
        $_SESSION['items'] = $this->items;
    }
    function total(){
        $s = 0;
        for($i=0; $i<count($this->items); $i++){
            $t = $this->items[$i]['price'] * $this->items[$i]['quantity'];
            $s += $t;
        }
        return $s;
    }

    function content_of_cart(){
        echo "<div class='coc'>";
        echo "<table class='coct'>";
        echo "<tr><th class='cocth'>TITLE</th><th class='cocth'>PRICE</th><th colspan='5'class='cocth'>QUANTITY</th></tr>";
        $s = 0;
        for($i=0; $i<count($this->items); $i++){
            $u = $this->items[$i]['price'] * $this->items[$i]['quantity'];
            $s += $u;
            if($this->items[$i]['quantity']!=0){
                echo "<tr>";
                echo "<td class='tdcoc'>".$this->items[$i]['title']."</td>";
                echo "<td class='tdcoc'>".$this->items[$i]['price']."</td>";
                echo "<td class='tdcoc'>".$this->items[$i]['quantity']."</td>";
                echo "<td class='tdcoc'>".$u."</td>";
                echo "<td class='tdcoc'><a class='moreless' href='change.php?action=add&id=".$this->items[$i]['id']."'>+</a></td>";
                echo "<td class='tdcoc'><a class='moreless' href='change.php?action=reduce&id=".$this->items[$i]['id']."'>-</a></td>";

                echo "<td class='tdcoc' ><a id='del' href='change.php?action=delete&id="
                    .$this->items[$i]['id']."'>DELETE</a></td>";
                echo "</tr>";
            }
        }
        if($s==0){
            echo "<p style='color:black; font-size:2em; font-weight: 700;'>Your cart is empty</p>";
        }else{
            echo "<tr id='total'><td colspan='6' style='text-align:right'>TOTAL:</td><td>$s$</td></tr>";
        }
        
        echo "</table>";
        echo "</div>";

       

    }

}
$c=New Cart();
// $c->add_item(1,'mov1',99,1);



?>
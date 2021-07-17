<?php
class Base{
    public $conn;

    function __construct($base){
        $this->conn = new mysqli('localhost', 'root', '', $base);
        if ($this->conn->connect_error)
            die('Error: '. $this->conn->connect_error);
    }

    function execute_select($query){
        $data = $this->conn->query($query);
        if($data === false)
            return ['success'=>false, 'msg'=>$this->conn->error];
        else{
            $array = $data->fetch_all(MYSQLI_ASSOC);
            return ['success'=>true, 'array'=>$array];
        }
    }
    function execute_query($query){
        $res = $this->conn->query($query);
        if($res === false) {
            die('Nije izvrsen upit: '."<br/>" . $this->conn->error."<br/>". $query);
        } 
            
    }
    function all_movies(){
        $r = $this->execute_select("select * from movies");
        if($r['success'] == true){
            return $r['array'];
        }else{
            die("Query failed: ".$r['msg']);
        }
    }
    function users(){
        $r = $this->execute_select("select * from users");
        if($r['success'] == true){
            return $r['array'];
        }else{
            die("Query failed: ".$r['msg']);
        }
    }

    function remove_movie($id){
        $this->execute_query("DELETE FROM movies WHERE id=$id");
    }

    function add_movie($title,$published,$genre,$picture,$description,$price){
        $title = $this->conn->real_escape_string($title);
        $published= $this->conn->real_escape_string($published);
        $genre = $this->conn->real_escape_string($genre);
        $picture = $this->conn->real_escape_string($picture);
        $description = $this->conn->real_escape_string($description);
        $price = $this->conn->real_escape_string($price);

        $this->execute_query("INSERT INTO movies (id,title,published,genre,picture, description,price) VALUES 
            (NULL, '$title','$published','$genre','$picture','$description','$price')");
    }

    function update_movie($id,$title,$published,$genre,$pic, $desc,$price){
        $this->execute_query("UPDATE `movies` SET `title`='$title',`published`='$published',`genre`='$genre',`picture`='$pic',`description`='$desc',`price`='$price' WHERE `id`='$id'");
    }

    function one_movie($id){
        $r = $this->execute_select("select * from movies where id=$id");
        if($r['success'] == true){
            return $r['array'][0];
        }else{
            die("Query failed: ".$r['msg']);
        }
    }
    function select_user($username,$password){
        $r = $this->execute_select("SELECT * FROM users WHERE username='$username' AND password='$password'");
        if($r['success'] == true){
            return $r['array'];
        }else{
            die("Query failed: ".$r['msg']);
        }
    }
   function insert_user($username,$email,$password){
    $this->execute_query("INSERT INTO `users`(`username`, `email`,`password`) VALUES ('$username','$email','$password')");
   }
   
   function insert_cart($id_movie,$id_user, $price,$total_price){
    $this->execute_query("INSERT INTO `shopping_cart`(`id_movie`, `id_user`, `purchasing_date`, `price`, `total_price`) VALUES ('$id_movie','$id_user',NULL,'$price','$total_price')");
}

}

$b = new Base('final_work');


?>
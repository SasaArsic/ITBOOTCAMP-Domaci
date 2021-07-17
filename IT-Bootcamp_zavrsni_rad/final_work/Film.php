<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="film.css">
    <link rel="stylesheet" href="more_about.css">

<?php 
    include 'data.php';
    include 'navbar.html';
    
    class Film{
        public $id, $title,$published,$picture, $genre, $price,$description;

        function __construct($array){
            
            $this->id = $array['id'];
            $this->title = $array['title'];
            $this->published = $array['published'];
            $this->picture = $array['picture'];
            $this->genre = $array['genre'];
            $this->price = $array['price'];
            $this->description = $array['description'];

        }
        function list_of_films(){
                        echo "<div class='col-sm'>";
                            echo "<h3>".$this->title."</h3>";
                            echo "<img src='".$this->picture."' alt='PIC' /><br /><br />";
                            echo "<a class='link-secondary' href='about.php?id=$this->id' target='_blanc'>Read More</a>";
                        echo "</div>";
                
            
        }
        function more_about() {
            echo "<div class='about backgpic'>";
                echo "<div class='img_div'>";
                    echo "<img src='$this->picture' alt='slika'/>";
                echo "</div>";
                echo "<div class='txtandprice'>";
                    echo "<h1>$this->title</h1>";
                    echo "<p class='published'>Year of publication: $this->published</p>";
                    echo "<p class='desc'><span>Movie plot:</span> $this->description</p>";
                    echo "<a class='price' href='shopping_cart/change.php?action=add&&id=$this->id'> Price : $this->price $</a>";
                echo "</div>";
            echo "</div>";
        }
    }


    class Film_list{
        public $f;


        function __construct(){
            $this->f = [];
        }
        function add_film($data){
            for($i=0; $i<count($data); $i++){
                $d = new Film($data[$i]);
                array_push($this->f, $d);
            }

        }
        
        function show_all($genre=""){
            echo "<div class=container-fluid'>";
                echo "<div class='section2 backgpic' id='movies'>";
                    echo "<div class='container'>";
                         echo "<div class='row'>";
                            foreach($this->f as $film)
                            if($film->genre == $genre or $genre == "")
                            $film->list_of_films();
                        echo "</div><br>";
                    echo "</div>";
                    echo "<a class='logout' href='login/logout.php'>LOG OUT</a>";
                echo "</div>";
                
            echo "</div>";
            
        }

                  
        

        function one_film_more_details($id){
            for($i=0; $i<count($this->f); $i++){
                if($this->f[$i]->id == $id)
                    $this->f[$i]->more_about();
            }
        }
    }

    $lf = new Film_list();
    $movies = $b->all_movies();
    $lf->add_film($movies);
  
    
    
    

?>
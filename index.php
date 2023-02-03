<?php
    class Movie {
        public $name;
        public $genre;
        public $vote;

        public function __construct($_name, $_genre, $_vote) {
            $this->name = $_name;
            $this->genre = $_genre;
            $this->vote = $_vote;
        }

        public function getName(){
            return $this->name;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getVote(){
            return $this->vote;
        }
    }

    $IronMan = new Movie('Iron Man', ['Action', 'Adventure', 'Science Fiction'], 8);
    $HarryPotter = new Movie('Harry Potter', ['Fantasy', 'Adventure', 'Action'], 10);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Op Movies</title>
    </head>
    <body>
        <header class="container text-center">
            <h1>OOP Movies</h1>
        </header>

        <main>
            <div class="card">
                <?php 
                    echo '<h3> Titolo: ';
                    echo $IronMan->getName() ;
                    echo '</h3>';

                    echo '<h5> Generi: </h5>';
                    foreach($IronMan->getGenre() as $genreEl){
                        echo
                        "<ul class='movie-genres'>
                            <li> $genreEl </li>
                        </ul>";
                    }

                    echo '<h5> Il voto corrisponde a ';
                    echo $IronMan->getVote() ;
                    echo '</h5>';
                ?>
            </div>
    
            <div class="card">
                <?php 
                    echo '<h3> Titolo: ';
                    echo $HarryPotter->getName() ;
                    echo '</h3>';

                    echo '<h5> Generi: </h5>';
                    foreach($HarryPotter->getGenre() as $genreEl){
                        echo
                        "<ul class='movie-genres'>
                            <li> $genreEl </li>
                        </ul>";
                    }

                    echo '<h5> Il voto corrisponde a ';
                    echo $HarryPotter->getVote() ;
                    echo '</h5>';
                ?>
            </div>
        </main>
    </body>
</html>
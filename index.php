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

        }
    }

    $IronMan = new Movie('Iron Man', ['action', 'Adventure', 'Science Fiction'], 8);
    $HarryPotter = new Movie('Harry Potter', ['fantasy', 'Adventure', 'Action'], 10);
    var_dump($IronMan, $HarryPotter);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Op Movies</title>
    </head>
    <body>
        
    </body>
</html>
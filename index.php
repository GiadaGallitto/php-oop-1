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
    }

    $IronMan = new Movie('Iron Man', ['action', 'Adventure', 'Science Fiction'], 8);
    $HarryPotter = new Movie('Harry Potter', ['fantasy', 'Adventure', 'Action'], 10);
    echo($IronMan->getName());
    var_dump($IronMan);
    echo($HarryPotter->getName());
    var_dump($HarryPotter)
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
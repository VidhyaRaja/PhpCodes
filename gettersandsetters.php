<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and setters</title>
</head>
<body>
    <?php

        class Movie{
            public $movie;
            private $rating;

            function __construct($movie, $rating){
                $this->movie = $movie;
                $this->setRating($rating);
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG"){
                    $this->rating = $rating;
                }else{
                    $this->rating = "NR";
                }
            }

            function getRating(){
                return $this->rating;
            }
        }
        $avengers = new Movie("Avengers", "PG-13");

        $avengers->setRating("G");
        echo $avengers->getRating("DOF");

    ?>
</body>
</html>
<?php

class Movie
{
    public $title;
    public $year;
    public $language;
    public $genre;
    public function __construct($_title, $_year, $_genre, $_language = 'IT')
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->language = $_language;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$movie_1 = new Movie("Carlito's way", 1989, "Thriller", "EN");
$movie_2 = new Movie("La grande Bellezza", 2013, "dramma", "IT");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <?php echo var_dump($movie_1) ?>
    <?php echo var_dump($movie_2) ?>
</body>

</html>
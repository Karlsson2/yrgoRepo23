<?php 

$movie = [
    'title' => 'Groundhog Day',
    'language' => 'English',
    'website' => 'https://www.themoviedb.org/movie/137-groundhog-day',
];


    foreach($movie as $key => $movie1){
        echo ucwords($key) . " : " .  $movie1 . "</br>";
    }
?>
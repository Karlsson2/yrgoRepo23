<?php

$hasParent = false;
$age = 17;

if ($age < 18 && $hasParent == true){
    echo "You can go ahead and watch The Square with your parents.";
} elseif ($age < 18 && $hasParent == false){
    echo "Sorry. You're not allowed to watch The Square without your parents.";
} elseif ($age > 18){
    echo "Welcome to the movie theatres, you're a grown-up!";
}

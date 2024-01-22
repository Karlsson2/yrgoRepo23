<?php

//Now you know how to throw an exception. 
//Now we're going to wrap our script within a try catch statement. 
//Continue working on the previous exercise in a new file. 
//Put the logic within the try block and catch the exception below it. 
//Assign the exception to a variable called, you guessed it, $exception. 
//Within the catch block, echo the error message using the getMessage() method. This time, use the name Jessi Glaser instead.

require __DIR__ . '/vendor/autoload.php';

use App\Person;

$person = new Person("Jessi Glaser", 13);

try {
    if ($person->age < 18) {
        throw new Exception(
            $person->name . "is not old enough to drive."
        );
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

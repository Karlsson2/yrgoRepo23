<?php
    /*We've learned how to get the absolute path to a directory with __DIR__. Let us now use that knowledge to include PHP files into each other. Create a new PHP file and name it 03.php. Using the require statement and the magic constant __DIR__, include the file 01.php. The script within 01.php will now be loaded into the 03.php and it will be executed. The output should look like the text below.*/
    require(__DIR__ . "/01.php");
?>
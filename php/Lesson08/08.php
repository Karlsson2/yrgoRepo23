<?php

$actors = [
    ['name' => 'Andie MacDowell', 'year' => 1958],
    ['name' => 'Bill Murray', 'year' => 1950],
    ['name' => 'Chris Elliot', 'year' => 1960],
    ['name' => 'Stephen Tobowsky', 'year' => 1951],
];

?>

<?php 
    $keys = array_keys($actors);
    for($i = 0; $i < count($actors); $i++) : ?>
    <?= $actors[$keys[$i]]["name"]?> was born in <?= $actors[$keys[$i]]["year"]?> <br/>
<?php endfor; ?>
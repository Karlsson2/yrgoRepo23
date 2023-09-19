<?php require "actors.php";?>
<?php require "header.php";?>

<ul>
<?php 
foreach($actors as $actor):
    echo <<<ITEM
        <li><a href="$actor[tmdb_url]">$actor[name]</a> - $actor[character]</li>
    ITEM;
endforeach;?>
</ul>
<?php require "footer.php";?>
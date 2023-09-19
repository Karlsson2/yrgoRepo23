<?php require "actors.php";?>
<?php require "header.php";?>

<ul>
<?php 
//using heredoc for HTML readability
foreach($actors as $actor):
    echo <<<ITEM
        <li><a href="$actor[tmdb_url]">$actor[name]</a> - $actor[character]</li>
    ITEM;
endforeach;?>
</ul>
<?php require "footer.php";?>
<?php 
    require __DIR__ . "/header.php";
    require __DIR__ . "/actors.php"
?>
   <main>
        <?php foreach($actors as $actor): echo
                <<<ITEM
                    <article>
                    <img src="$actor[url]" alt"$actor[name]"/>
                    <h2>$actor[name]</h2>
                    <p>$actor[character]</p>
                    </article>
                ITEM;
        endforeach; ?>
    </main>

<?php 
    require __DIR__ . "/footer.php";
?>
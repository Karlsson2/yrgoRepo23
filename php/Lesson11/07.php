<?php
$people = [
    'Christopher Læssø' => true,
    'Ruben Östlund' => false,
    'Elisabeth Moss' => true,
];
?>
<ol>
    <?php foreach ($people as $key => $actor) : ?>
        <?php if ($actor == true) : ?>
            <li> <?= $key ?> is an actor.</li>
        <?php else : ?>
            <li> <?= $key ?> is not an actor.</li>
        <?php endif; ?>
    <?php endforeach; ?>
    <!-- TODO: Implement the foreach loop logic here. -->
</ol>
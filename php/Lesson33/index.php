<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Article;
use App\Blog;
use App\Author;
use App\Support\Str;

$blog = new Blog('The Mandalorian');
$author = new Author("Mando");
$blog->addArticle(new Article('Mandos Tips for Traveling the Galaxy', "With all the stress that goes into booking flights and lodging, packing (and not forgetting) everything you'll need, finding pet sitters, and everything else that goes with a trip overseas, there's the added stress of staying connected while abroad", new DateTime("2020-03-24"), $author));
$blog->addArticle(new Article('A Galaxy Extremely Far Far Away', "A long time ago, a galaxy far, far away sprang into existence. Billions of years later, light from that galaxy hit a mirror in a solar-powered satellite orbiting the third planet of a medium-sized star, and the scientific community of the ruling species of that planet got really excited. And they all lived happily ever after.", new DateTime("2020-10-30"), $author));
?>
<h1><?= $blog->name ?></h1>
<main>
    <?php foreach ($blog->articles as $article) : ?>
        <article>
            <h2><?= $article->title ?></h2>
            <p>Written by <?= $article->author->name ?> on <?= $article->date->format("F dS o") ?></p>
            <p><?= $article->getExcerpt(10) ?>...</p>
            <a href="/<?= $article->slug ?>"><button>Continue reading →</button></a>
        </article>
    <?php endforeach; ?>

    <?php
    echo Str::snakeCase('This is the Way'); // this_is_the_way
    echo ("</br>");
    echo Str::constantCase('This is the Way'); // THIS_IS_THE_WAY
    echo ("</br>");
    echo Str::pascalCase('This is the Way'); // ThisIsTheWay
    ?>
</main>
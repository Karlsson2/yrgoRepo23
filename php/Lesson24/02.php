<?php

declare(strict_types=1);

$show = [
    'title' => 'Girls',
    'tmdb_url' => 'https://www.themoviedb.org/tv/42282-girls',
    'description' => 'The assorted humiliations, disasters and rare triumphs of four very different twenty-something girls: Hannah, an aspiring writer; Marnie, an art gallery assistant and cousins Jessa and Shoshanna.',
];

header("Content-Type: json");
echo json_encode($show);

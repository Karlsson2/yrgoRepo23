<?php
function getRandomEmoji(): string
{
    $emojis = [
        'joy' => '😂',
        'rage' => '😡',
        'scream' => '😱',
        'shit' => '💩',
        'smirk' => '😏',
        'sunglasses' => '😎',
        'thumbsdown' => '👎',
        'thumbsup' => '👍',
        'unicorn' => '🦄',
    ];

    return $emojis[array_rand($emojis, 1)];
}

echo getRandomEmoji();

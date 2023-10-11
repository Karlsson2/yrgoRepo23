<?php

function searchEmojis($query): array
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
    $emoji_array = [];
    foreach ($emojis as $key => $emoji) {
        if (str_contains($key, $query)) {
            $emoji_array[] = $emoji;
        }
    }
    return $emoji_array;
}
print_r(searchEmojis('thumb'));

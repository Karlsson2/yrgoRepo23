<?php

declare(strict_types=1);

function sayHelloTo(string $name): string
{
    return "Hello, $name!";
}

function getMovieDescription(string $title, string $director, int $year): string
{
    return "The movie $title was released $year and directed by $director.";
}

function getFirstChar(string $aString): string
{
    return substr($aString, 0);
}

function getStringsLength(array $strArray): array
{
    $newArray = [];
    foreach ($strArray as $string) {
        $newArray[] = strlen($string);
    }

    return $newArray;
}

function getBlock(int $block): string
{
    $blocks = [
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAFUlEQVR4AWPI7vlPEhrGGkY1jGoAAEwQ9hBqU6EFAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAACVBMVEXnWhD31rUAAABagmvSAAAANklEQVR4AWMQDU0MYXBgUGFCIdRAhNIKIKEahi67gGECE0MUiHBd5QAUCwMRTA5cDForslYAAKVzDEjCrcCGAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAALElEQVR4AWP4fm0rSYjheZQAJmJgwClOogZyAH5TMcXpoIFUQJtgHY0HUgEAQR/y28nnCdAAAAAASUVORK5CYII=',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAADFBMVEVrjP/nWhD/pUIAAABg5DuiAAAAQElEQVR4AWMQDQ0NYchatWo1Q96qVbsZsqZGrWbIir8GJOKmw4h94UBiZT2IqAISq36BWFlgLkjbr90QA/4DAQBLbyVGZjjebAAAAABJRU5ErkJggg==',
    ];
    return $blocks[$block];

    // TODO: Implement function exercise 5 with type declarations.
}

function getQuote(int $position): string
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];

    // TODO: Implement function exercise 6 with type declarations.

    if (count($quotes) <= $position - 1) {
        return "Error: quote number $position does not exist.";
    }
    return $quotes[$position - 1];
}

function getRandomQuote(): string
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];

    return $quotes[rand(0, count($quotes) - 1)];
}

function getMap(int $width, int $height): array
{
    $sky = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAFUlEQVR4AWPI7vlPEhrGGkY1jGoAAEwQ9hBqU6EFAAAAAElFTkSuQmCC";
    $ground = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAACVBMVEXnWhD31rUAAABagmvSAAAANklEQVR4AWMQDU0MYXBgUGFCIdRAhNIKIKEahi67gGECE0MUiHBd5QAUCwMRTA5cDForslYAAKVzDEjCrcCGAAAAAElFTkSuQmCC";

    $map = [];

    for ($i = 0; $i < $height; $i++) {
        $map[] = [];
        if ($i == $height - 1) {
            for ($y = 0; $y < $width; $y++) {
                array_push($map[$i], $ground);
            }
        } else {
            for ($y = 0; $y < $width; $y++) {
                array_push($map[$i], $sky);
            }
        }
    }

    return $map;
}

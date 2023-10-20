<?php

function sanitizeName(string $character): string
{
    $character = htmlspecialchars(preg_replace('/[^a-zA-Z0-9\']/', '', $character));
    return $character;
}

function sanitizeMessage(string $message): string
{
    $message = htmlspecialchars(preg_replace('/[^a-zA-Z0-9\']/', '', $message));
    return $message;
}

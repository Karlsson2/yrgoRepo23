<?php

declare(strict_types=1);

function diffInYears(int $timestamp): string
{
    $diff = 2018 - date('Y', $timestamp);
    return $diff == 0 ? "this year" : "$diff years ago";
}

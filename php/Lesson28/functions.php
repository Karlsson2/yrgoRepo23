<?php

declare(strict_types=1);



function transformName(string $name)
{
    $fullName = explode(" ", $name);
    $firstName = $fullName[0];
    $lastName = $fullName[1];
    $firstName = strtoupper($firstName);
    $lastName = strtolower($lastName);
    return $newFullName = $firstName . " " . $lastName;
};

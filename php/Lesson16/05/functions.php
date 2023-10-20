<?php
function sanitizeName(string $name): string
{
    return trim(strtolower(htmlspecialchars($name)), " ");
}

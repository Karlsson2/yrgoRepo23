<?php

declare(strict_types=1);

namespace App\Support;

class Str
{
    public static function camelCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);

        $words = explode(' ', $string);

        $words = array_map(function ($word) {
            return ucwords(strtolower($word));
        }, $words);

        return lcfirst(implode('', $words));
    }
    public static function kebabCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);
        $words = explode(" ", $string);
        $words = array_map(function ($word) {
            return strtolower($word);
        }, $words);

        return lcfirst(implode("-", $words));
    }
    public static function snakeCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);
        $words = explode(" ", $string);
        $words = array_map(function ($word) {
            return strtolower($word);
        }, $words);

        return implode("_", $words);
    }
    public static function constantCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);
        $words = explode(" ", $string);
        $words = array_map(function ($word) {
            return strtoupper($word);
        }, $words);

        return implode("_", $words);
    }
    public static function pascalCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);
        $words = explode(" ", $string);
        $words = array_map(function ($word) {
            return strtolower($word);
        }, $words);
        return ucfirst(implode("", $words));
    }
}

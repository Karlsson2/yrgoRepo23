<?php

declare(strict_types=1);

namespace App;

use App\Support\Str;
use DateTime;

class Article
{
    public string $slug;
    public function __construct(public string $title, public string $content, public DateTime $date, public Author $author)
    {
        $this->slug = Str::kebabCase($this->title);
    }
    public function getExcerpt($numberOfWords)
    {
        $content = $this->content;
        $array = explode(" ", $content);
        $array = array_slice($array, 0, $numberOfWords + 1);
        $exerpt = implode(" ", $array);
        return $exerpt;
    }
}

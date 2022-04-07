<?php

class Article
{
    private static int $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    public static function returnCounter()
    {
        return self::$counter;
    }
}

$first_object = new Article();
$second_object = new Article();
$third_object = new Article();

echo Article::returnCounter();
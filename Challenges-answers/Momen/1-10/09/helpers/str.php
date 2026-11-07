<?php
declare(strict_types=1);

class Str
{
    static function lower(string $str): string
    {
        $str = trim($str);
        $str = strtolower($str);

        return $str;
    }

    static function upper(string $str): string
    {
        $str = trim($str);
        $str = strtoupper($str);
        return $str;
    }
    public static function clean(string $text): string
    {
        $text = trim($text);
        $words = explode(" ", $text);
        $words = array_filter($words, fn($word) => $word !== "");

        return implode(" ", $words);
    }
    public static function title(string $text): string
    {
        $text = self::clean($text);

        return ucwords(strtolower($text));
    }
    public static function initials(string $name): string
{
    $name = self::clean($name);
    $words = explode(" ", $name);

    $letters = array_map(
        fn($word) => strtoupper($word[0]),
        $words
    );

    return implode(".", $letters);
}
}

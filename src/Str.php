<?php

namespace Tb12as\PhpHelper;

class Str
{
    /**
     * contains
     *
     * @param  string $str
     * @param  mixed $needle
     * @return bool
     */
    public static function contains(string $str, string $needle): bool
    {
        return strpos($str, $needle) !== false;
    }

    /**
     * words
     *
     * @param  string $str
     * @param  int $count
     * @return string
     */
    public static function words(string $str, int $count = 5): ?string
    {
        if ($str != '') {
            $words = explode(" ", $str);
            return implode(" ", array_slice($words, 0, $count));
        }
        return null;
    }
}

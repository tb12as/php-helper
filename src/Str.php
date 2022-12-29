<?php

namespace Tb12as\PhpHelper;

class Str
{
    public static function contains($str, $needle)
    {
        return strpos($str, $needle) !== false;
    }

    public function words($str, $count = 5)
    {
    	$words = explode(" ", $str);
    	return implode(" ", array_slice($words, 0, $count));
    }
}

<?php
namespace App;

class Calculatrice
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function minus($a, $b)
    {
        return $a - $b;
    }

    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    public static function division($a, $b)
    {
        if($b === 0) {
            throw new Exception('par zéro bouffon');
        }

        return $a / $b;
    }
}


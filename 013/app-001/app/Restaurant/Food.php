<?php

declare(strict_types=1);

namespace App\Restaurant;

class Food
{
    public static function prepare()
    {
        echo 'prepare the food<br>';
    }
    public static function heat()
    {
        echo 'Heat the food<br>';
    }
    public static function clean()
    {
        echo 'Clean the table for me<br>';
    }
    public static function eat()
    {
        echo 'eat me<br>';
    }
}

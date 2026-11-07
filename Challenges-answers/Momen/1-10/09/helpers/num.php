<?php

declare(strict_types=1);

class Num
{
    public static function isPassingScore(int $score): bool
    {
        return $score >= 50;
    }

    public static function isAdult(int $age): bool
    {
        return $age >= 18;
    }
    public static function isBetween(
        int $number,
        int $min,
        int $max
    ): bool {
        return $number >= $min && $number <= $max;
    }
    public static function discountedPrice(
        float $price,
        float $discount
    ): float {
        return $price - ($price * $discount / 100);
    }
    public static function average(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }

        return array_sum($numbers) / count($numbers);
    }
}

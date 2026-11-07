<?php

declare(strict_types=1);
class Restaurant
{
    public const RESTAURANT_NAME  = 'Koshary_Elg3aan';
    public const CURRENCY  = 'EGP';
    protected const TAX_RATE  = 0.12;
    public static string $address = 'Kafr 3bdo';
    protected static string $openingTime = '24/7';
    private static string $secretCode = '6666';

    public static function showRestaurantInfo()
    {
        echo self::RESTAURANT_NAME  . "<br>";
        echo self::$address . "<br>";
        echo self::$openingTime . "<br>";
    }
    public static function showSecretCode()
    {
        echo self::$secretCode . "<br>";
    }
    protected static function showTaxRate()
    {
        echo self::TAX_RATE . "<br>";
    }
    public static function showOpeningTime()
    {
        echo self::$openingTime . "<br>";
    }
    public static function getSecretCode()
    {
        return self::$secretCode ;
    }
    public static function setSecretCode(string $NewSecretCode)
    {
        if (strlen($NewSecretCode) < 4) throw new ("invalid data provided");
        self::$secretCode = $NewSecretCode;
    }
}

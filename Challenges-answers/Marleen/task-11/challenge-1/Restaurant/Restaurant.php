<?php
declare (strict_types=1);


class Restaurant {
    public const RESTAURANT_NAME = 'Burger Factory';
    public const CURRENCY = 'EGP';
    protected const TAX_RATE = 0.10;

     public static $address = 'portsaeed street';
     protected static $openingTime = '9 am';
     private static $secretCode = 'A6536^hsgdh';

    public static function showRestaurantInfo(): string{
      return  "The restaurant name is ". self::RESTAURANT_NAME . ". It's address is " . self::$address . ". Opening time is " . self::$openingTime ;
    }
    public static function showSecretCode(): string{
        return self::$secretCode;
    }
    protected static function showTaxRate(): float{
       return self::TAX_RATE;
    }
    public static function showOpeningTime(): string{
        return self::$openingTime;
    }

    // Encapsulation

    public static function getSecretCode(): string{
        return self::$secretCode;
    }
    public static function setSecretCode(string $newSecretCode): void{
        if (strlen($newSecretCode)<10)throw new('invalid data is provided');
        self::$secretCode = $newSecretCode;
    }
}
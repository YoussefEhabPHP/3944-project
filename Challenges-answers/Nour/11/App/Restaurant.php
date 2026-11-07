<?php
declare(strict_types=1);

class Restaurant{
    
public const RESTAURANT_NAME= 'Nour Restaurant' ;
public const CURRENCY= '$' ;
public const TAX_RATE= 0.14 ;

public static $address='Egypt,Alex';
protected static $openingTime='9:00 Am';
private static $secretCode='4529';

public static function showRestaurantInfo() {
    echo self::RESTAURANT_NAME . "<br>"
       . self::$address . "<br>"
       . self::$openingTime;
}
public static function showSecretCode(){
    echo self::$secretCode . "<br>";
} 
protected static function showTaxRate(){
    echo self::TAX_RATE . "<br>";
} 
public static function showOpeningTime(){
    echo self::openingTime . "<br>";
}
public static function getSecretCode(){
    echo self::secretCode . "<br>";
}
public static function setSecretCode(float $newsecretCode):void{
    if(strlen($newsecretCode) > 10){throw new ("SecretCode Code Should be less Than 10 Characters");}
    self::$secretCode = $newsecretCode;
}





}
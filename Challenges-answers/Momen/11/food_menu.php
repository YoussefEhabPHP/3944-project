<?php

declare(strict_types=1);

require_once 'restaurant.php';
class FoodMenu extends Restaurant
{
    public const MENU_VERSION = '1.0.3';
    public static $foodName = 'Kebda';
    protected static $foodPrice = 15;
    private static $preparationCost = 10;



    public static function showFoodInfo()
    {
        echo self::$foodName . "<br>";
        echo self::$foodPrice . "<br>";
    }
    public static function getPreparationCost()
    {
       return self::$preparationCost ;
    }
    public static function setPreparationCost(int $newCost)
    {
        if ($newCost <= 0)  throw new ("invalid cost amount");
        self::$preparationCost = $newCost;
    }
    public static function setFoodPrice(int $newCost)
   {
       if ($newCost <= 0)  throw new ("invalid cost amount");
       self::$foodPrice = $newCost;
   }
    public static function showFinalPrice()
    {
        $finalPrice = self::$foodPrice * parent::TAX_RATE;
        echo self::$foodPrice + $finalPrice . "<br>";
    }
}

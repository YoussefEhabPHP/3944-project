<?php
declare (strict_types=1);
require_once 'Restaurant.php';

class FoodMenu extends Restaurant{

public const MENU_VERSION = 'Fast Food Menu';
public static $foodName = 'cheese burger';
protected static $foodPrice = 150;
private static $preparationCost = 40;

public static function showFoodInfo() : string|float{
    return self::$foodName . self::$foodPrice;
}
public static function getPreparationCost(): float{
    return self:: $preparationCost;
}
public static function setPreparationCost(float $newPreparationCost): void {
    if ($newPreparationCost<0) throw new ('Negative costs are rejected');
    self::$preparationCost = $newPreparationCost;
}
public static function showFinalPrice(): float{

$finalPrice = self::$foodPrice + (self::$foodPrice * parent::TAX_RATE);
return $finalPrice;
}
public static function setFoodPrice(float $newFoodPrice): void{
    if ($newFoodPrice<=0) throw new ('Something went wrong invalid price');
self:: $foodPrice = $newFoodPrice;
}
public static function getFoodPrice(): float{
    return self:: $foodPrice;
}
}
<?php
declare(strict_types=1);

class FoodMenu extends Restaurant{

public const MENU_VERSION='10.1.1';


public static $foodName='Pasta';
protected static $foodPrice='1200';
private static $preparationCost='200';

public static function showFoodInfo(){
    echo self::$foodName ."<br".
    self::$foodPrice;
}
public static function getPreparationCost(){
    echo self::preparationCost."<br";
}
public static function setPreparationCost(float $newpreparationCost){
    if($newpreparationCost<=0){throw new ('The PreparationCost Should Be Positaze');}
    self::$preparationCost=$newpreparationCost;
}
public static function setFoodPrice(float $newPrice){
    if($newPrice<=0){throw new ('The Food Price Should Be Positaze');}
    self::$foodPrice=$newPrice;
}
public static function showFinalPrice(){
    $finalPrice = self::$foodPrice*Restaurant::TAX_RATE;
    echo $finalPrice . "<br>";
}

}
<?php
declare (strict_types=1);
require_once 'FoodMenu.php';
class Order extends FoodMenu{
    public const MINIMUM_ORDER = 150;
    public static $quantity = 1;
    protected static $discountRate = 0.05;
    private static $deliveryFee = 40;
    public static function showOrderInfo(): string|float{
        return "The food name is " . parent:: $foodName . " .The quantity is" . self:: $quantity . ".The delivery fees are " . self:: $deliveryFee;
    }
    public static function getDeliveryFee(): float{
        return self:: $deliveryFee;
    }
    public static function setDeliveryFee(float $newDeliveryFees): void{
        if ($newDeliveryFees<0) throw new ('rejected delivery fees');
        self::$deliveryFee = $newDeliveryFees;
    }
    public static function setQuantity(float $newQuantity):void{
        if ($newQuantity<=0) throw new ('Something went wrong invalid quantity');
        self::$quantity = $newQuantity;
    }
    public static function calculateSubtotal(): float{
        $totalPrice = parent::$foodPrice * self::$quantity;
        return $totalPrice;
    }
    public static function calculateDiscount():float{
        $orderDiscount = parent::$foodPrice * self::$discountRate * self::$quantity;
        return $orderDiscount;
    }
    public static function calculateTotal(): float {
        $totalPaid = (parent:: $foodPrice * self::$quantity) + (parent::TAX_RATE * parent::$foodPrice * self:: $quantity) + (self::$discountRate * parent::$foodPrice * self:: $quantity);
        return $totalPaid;
    }

}
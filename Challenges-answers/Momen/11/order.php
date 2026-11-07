<?php

declare(strict_types=1);
require_once 'food_menu.php';
class Order extends FoodMenu
{
    public const MINIMUM_ORDER = 1;

    public static $quantity = 1;
    protected static $discountRate = 0;
    private static $deliveryFee = 0.10;

    public static function showOrderInfo()
    {
        echo parent::$foodName . "<br>";
        echo self::$quantity . "<br>";
        echo self::$deliveryFee . "<br>";
    }
    public static function getDeliveryFee()
    {
        return self::$deliveryFee;
    }
    public static function setDeliveryFee($newdeliveryfee)
    {
        if ($newdeliveryfee < 0) throw new ("invalid input number");
        self::$deliveryFee = $newdeliveryfee;
    }
    public static function setQuantity($newquantity)
    {
        if ($newquantity <= 0) throw new Exception("invalid input number");
       return self::$quantity = $newquantity;
    }
    public static function calculateSubtotal(): float
    {
        return parent::$foodPrice * self::$quantity;
    }
    public static function calculateDiscount(): float
    {
        return self::calculateSubtotal() * self::$discountRate;
    }
    public static function calculateTotal()
    {
        $subtotal = self::calculateSubtotal();
        $discount = self::calculateDiscount();
        $tax = ($subtotal - $discount) * parent::TAX_RATE;
        $deliveryFee = self::getDeliveryFee();
        return $subtotal - $discount + $deliveryFee + $tax;
    }
}

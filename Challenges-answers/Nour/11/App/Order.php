<?php
declare(strict_types=1);

class Order extends FoodMenu{
public const MINIMUM_ORDER='500';

public static $quantity='';
protected static $discountRate='0.0';
private static $deliveryFee='35';

public static function showOrderInfo(){
    echo FoodMenu::$foodName . "<br>" .
    self::$quantity . "<br>" . 
    self::$deliveryFee ;
}
public static function getDeliveryFee(){
    echo self::$deliveryFee . "<br>" ;
}
public static function setDeliveryFee($newdeliveryFee){
    if($newdeliveryFee<0){throw new ('The DeliveryFee Should Be Positaze');}
    self::$deliveryFee=$newdeliveryFee;
}
public static function setQuantity($newquantity){
    if($newquantity<=0){throw new ('The Quantity Should Be Positaze');}
    self::$quantity=$newquantity;
}
public static function calculateSubtotal(){
    $sub=FoodMenu::foodPrice*self::$quantity;
    echo $sub . "<br>";
}
public static function calculateDiscount(){
    $dis=self::$discountRate*self::calculateSubtotal();
    echo $dis . "<br>";
}
public static function calculateTotal(){
    $total=self::calculateSubtotal()-self::calculateDiscount()+self::$deliveryFee;
    echo $total . "<br>";
}

}
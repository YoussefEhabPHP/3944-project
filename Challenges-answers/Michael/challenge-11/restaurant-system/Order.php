<?php
declare(strict_types=1);

require_once 'FoodMenu.php';

class Order extends FoodMenu {
    // Constants
    const MINIMUM_ORDER = 15.00;

    // Properties
    static int $quantity = 2;
    protected static float $discountRate = 0.10;
    private static float $deliveryFee = 5.00;

    // Methods
    static function showOrderInfo(): void {
        echo "--- Order Information ---<br>";
        echo "Item: " . static::$foodName . "<br>";
        echo "Quantity: " . self::$quantity . "<br>";
        echo "Delivery Fee: " . self::$deliveryFee . " " . parent::CURRENCY . "<br>";
    }

    // Encapsulation: $deliveryFee
    static function getDeliveryFee(): float {
        return self::$deliveryFee;
    }

    static function setDeliveryFee(float $fee): void {
        if ($fee < 0) throw new ( "❌ Error: Delivery fee cannot be negative");
        self::$deliveryFee = $fee;
        echo "✅ Success: Delivery fee updated to " . self::$deliveryFee . "<br>";
    }

    // Encapsulation: Setter for $quantity
    static function setQuantity(int $qty): void {
        if ($qty <= 0) throw new ("❌ Error: Quantity must be greater than zero");
        self::$quantity = $qty;
        echo "✅ Success: Order quantity updated to " . self::$quantity . "<br>";
    }

    static function calculateSubtotal(): float {
        return static::$foodPrice * self::$quantity;
    }

    static function calculateDiscount(): float {
        return self::calculateSubtotal() * self::$discountRate;
    }

    static function calculateTotal(): void {
        $subtotal = self::calculateSubtotal();
        $discount = self::calculateDiscount();
        $tax = $subtotal * parent::TAX_RATE;
        
        $finalTotal = ($subtotal - $discount) + $tax + self::$deliveryFee;

        echo "--- Order Cost Summary ---<br>";
        echo "Subtotal (" . static::$foodPrice . " x " . self::$quantity . "): " . $subtotal . " " . parent::CURRENCY . "<br>";
        echo "Discount (" . (self::$discountRate * 100) . "%): -" . $discount . " " . parent::CURRENCY . "<br>";
        echo "Tax (" . (parent::TAX_RATE * 100) . "%): +" . $tax . " " . parent::CURRENCY . "<br>";
        echo "Delivery Fee: +" . self::$deliveryFee . " " . parent::CURRENCY . "<br>";
        echo "Final Total: " . $finalTotal . " " . parent::CURRENCY . "<br>";
    }
}

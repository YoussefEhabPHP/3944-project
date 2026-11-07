<?php
declare(strict_types=1);

require_once 'Restaurant.php';

class FoodMenu extends Restaurant {
    // Constants
    const MENU_VERSION = "v2.5 (2026)";

    // Properties
    static string $foodName = "Grilled Chicken";
    protected static float $foodPrice = 25.00;
    private static float $preparationCost = 10.50;

    // Methods
    static function showFoodInfo(): void {
        echo "--- Food Information ---<br>";
        echo "Food Item: " . static::$foodName . "<br>";
        echo "Base Price: " . static::$foodPrice . " " . parent::CURRENCY . "<br>";
    }

    // Encapsulation
    static function getPreparationCost(): float {
        return self::$preparationCost;
    }

    static function setPreparationCost(float $cost): void {
        if ($cost < 0) throw new ("❌ Error: Preparation cost cannot be negative");
        self::$preparationCost = $cost;
        echo "✅ Success: Preparation cost updated to " . self::$preparationCost . "<br>";
    }

    // Encapsulation: $foodPrice
    static function setFoodPrice(float $price): void {
        if ($price <= 0) throw new ("❌ Error: Food price must be greater than zero");
        static::$foodPrice = $price;
        echo "✅ Success: Food price updated to " . static::$foodPrice . "<br>";
    }

    static function showFinalPrice(): void {
        $taxAmount = static::$foodPrice * parent::TAX_RATE;
        $finalPrice = static::$foodPrice + $taxAmount;
        echo "Base Price: " . static::$foodPrice . " " . parent::CURRENCY . " | With Tax (" . (parent::TAX_RATE * 100) . "%): " . $finalPrice . " " . parent::CURRENCY . "<br>";
    }
}

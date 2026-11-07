<?php
declare(strict_types=1);

class Restaurant {
    // Constants
    const RESTAURANT_NAME = "Aureon";
    const CURRENCY = "USD";
    protected const TAX_RATE = 0.14;

    // Properties
    static string $address = "123 El-Gesh Street, Sidi Gaber, Alexandria, Egypt";
    protected static string $openingTime = "10:00 AM";
    private static string $secretCode = "InitialSecretCode123";

    // Methods
    static function showRestaurantInfo(): void {
        echo "--- Restaurant Information ---<br>";
        echo "Name: " . self::RESTAURANT_NAME . "<br>";
        echo "Address: " . self::$address . "<br>";
        echo "Opening Time: " . self::$openingTime . "<br>";
    }

    static function showSecretCode(): void {
        echo "Secret Code Display: " . self::$secretCode . "<br>";
    }

    protected static function showTaxRate(): void {
        echo "Tax Rate: " . (self::TAX_RATE * 100) . "%<br>";
    }

    static function showOpeningTime(): void {
        echo "Opening Time: " . self::$openingTime . "<br>";
    }

    // Encapsulation
    static function getSecretCode(): string {
        return self::$secretCode;
    }

    static function setSecretCode(string $code): void {
        if (strlen($code) < 10) throw new ("❌ Error: Secret code must be at least 10 characters long");
        self::$secretCode = $code;
        echo "✅ Success: Secret code updated successfully<br>";
    }
}

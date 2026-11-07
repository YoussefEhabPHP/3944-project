<?php
declare (strict_types=1);

require_once 'Vehicle.php';
class Truck extends Vehicle {
    static function showLoadCapacity(string $loadCapacity): void {
$loadCapacity = '2 Ton';
echo "vehicles -> Vehicle -> Truck -> $loadCapacity";

    }
    static function showNumberOfWheels(int $wheelsNum): void {
        $wheelsNum = 18;
        echo "vehicles -> Vehicle -> Truck -> $wheelsNum ";
    }
}
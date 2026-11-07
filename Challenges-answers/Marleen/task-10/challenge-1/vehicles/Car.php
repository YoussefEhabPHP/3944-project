<?php
declare (strict_types=1);

require_once 'Vehicle.php';


class Car extends Vehicle {
    static function showNumberOfDoors(int $doorsNum): void {
        $doorsNum = 2;
        echo "Vehicles -> Vehicle -> Car -> $doorsNum <br>";

    }
    static function showFuelType(int $fuelType) :void {
        $fuelType = 95;
        echo "Vehicles -> Vehicle -> Car -> $fuelType <br>";

    }
}
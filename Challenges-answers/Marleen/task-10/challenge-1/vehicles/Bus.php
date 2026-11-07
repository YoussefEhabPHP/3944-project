<?php
declare (strict_types=1);
require_once 'Vehicle.php';
class Bus extends Vehicle {
    static function showNumberOfPassengers(float $passengersNum): void { 
        $passengersNum = 30;
        echo "Vehicles -> Vehicle -> Bus -> $passengersNum <br>";

    }
    static function showBusType(string $busType):void {
$busType = 'Chevrolet';
echo "Vehicles -> Vehicle -> Bus -> $busType <br>";        
    }
}
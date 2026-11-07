<?php
declare(strict_types=1);
require_once 'Vehicle.php';

class Truck extends Vehicle {
    static function showLoadCapacity() {
        echo 'Showing load capacity<br>';
    }
    static function showNumberOfWheels() {
        echo 'Showing number of wheels<br>';
    }
}

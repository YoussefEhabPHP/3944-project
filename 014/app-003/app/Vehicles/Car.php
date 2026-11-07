<?php
declare(strict_types=1);
require_once 'Vehicle.php';

class Car extends Vehicle {
    static function showNumberOfDoors() {
        echo 'Showing number of doors<br>';
    }
    static function showFuelType() {
        echo 'Showing fuel type<br>';
    }
}

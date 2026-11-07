<?php
declare(strict_types=1);
require_once 'Vehicle.php';

class Bus extends Vehicle {
    static function showNumberOfPassengers() {
        echo 'Showing number of passengers<br>';
    }
    static function showBusType() {
        echo 'Showing bus type<br>';
    }
}

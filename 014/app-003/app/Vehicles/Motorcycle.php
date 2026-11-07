<?php
declare(strict_types=1);
require_once 'Vehicle.php';

class Motorcycle extends Vehicle {
    static function showEngineCapacity() {
        echo 'Showing engine capacity<br>';
    }
    static function showHasSidecar() {
        echo 'Checking if it has a sidecar<br>';
    }
}

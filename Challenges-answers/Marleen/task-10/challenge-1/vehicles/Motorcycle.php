<?php
declare (strict_types=1);
require_once 'Vehicle.php';

class Motorcycle extends Vehicle {
static function howEngineCapacity(): void {
    echo 'vehicles -> Vehicle -> Motorcycle -> howEngineCapacity <br>';

}
static function showHasSidecar(): void {
echo 'vehicles -> Vehicle -> Motorcycle -> showHasSidecar <br>';
}

}
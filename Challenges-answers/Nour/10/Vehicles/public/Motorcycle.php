<?php
declare(strict_types=1);

require_once 'Vehicle.php';

class Motorcycle extends vehicle{
    static function showEngineCapacity(){
        echo 'showEngineCapacity';
    }
    static function showHasSidecar(){
        echo 'showHasSidecar';
    }
}
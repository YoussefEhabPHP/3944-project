<?php
declare(strict_types=1);

require_once 'Vehicle.php';

class Truck extends vehicle{
    static function showLoadCapacity(){
        echo 'showLoadCapacity';
    }
    static function showNumberOfWheels(){
        echo 'showNumberOfWheels';
    }
}
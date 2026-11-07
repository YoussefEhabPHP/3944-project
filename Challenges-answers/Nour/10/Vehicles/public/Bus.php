<?php
declare(strict_types=1);

require_once 'Vehicle.php';

class Bus extends Vehicle{
    static function showNumberOfPassengers(){
        echo 'showNumberOfPassengers';
    }
    static function showBusType(){
        echo 'showBusType';
    }
}
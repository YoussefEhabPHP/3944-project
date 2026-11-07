<?php
declare(strict_types=1);

require_once 'Vehicle.php';

class Car extends vehicle{
    static function showNumberOfDoors(){
        echo'showNumberOfDoors';
    }
    static function showFuelType(){
        echo'showFuelType';
    }
}
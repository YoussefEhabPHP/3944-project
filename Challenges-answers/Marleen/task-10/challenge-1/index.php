<?php
declare (strict_types=1);
require_once 'Vehicles/Bus.php';
require_once 'Vehicles/Car.php';
require_once 'Vehicles/Motorcycle.php';
require_once 'Vehicles/Truck.php';


Bus:: showName();
Bus:: showPrice();
Bus:: startEngine();
Bus:: stopEngine();

Car:: showPrice();
Car:: showName();
Car:: startEngine();
Car:: stopEngine();


Truck:: showName();
Truck:: showPrice();
Truck:: startEngine();
Truck:: stopEngine();

Motorcycle:: showName();
Motorcycle:: showPrice();
Motorcycle:: startEngine();
Motorcycle:: stopEngine();



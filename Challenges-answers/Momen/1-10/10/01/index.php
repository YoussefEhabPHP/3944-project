<?php

require_once 'vehicle.php';
require_once 'truck.php';
require_once 'motorcycle.php';
require_once 'car.php';
require_once 'Bus.php';

Vehicle::stopEngine();
Car::showFuelType();
Motorcycle::showEngineCapacity();
Bus::showBusType();
Truck::showNumberOfWheels();

<?php
declare(strict_types=1);

require_once 'public/index.php';

Vehicle::showName();
Vehicle::showPrice();
Vehicle::showPaymentPlan();
Vehicle::startEngine();
Vehicle::stopEngine();
Car::showNumberOfDoors();
Car::showFuelType();
Motorcycle::showEngineCapacity();
Motorcycle::showHasSidecar();
Bus::showNumberOfPassengers();
Bus::showBusType();
Truck::showLoadCapacity();
Truck::showNumberOfWheels();
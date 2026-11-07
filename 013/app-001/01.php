<?php

declare(strict_types=1);

$cars = ['Jaguar', 'Ferrari', 'BMW'];

// $car_1 = $cars[0];
// $car_2 = $cars[1];
// $car_3 = $cars[2];

// list($car_1, $car_2, $car_3) = $cars;
// list($car_1, $car_2) = $cars;
list($car_1, $car_2, $car_3, $car_4) = $cars;

// echo "I have 3 cars $car_1, $car_2, and $car_3";
// echo "I have 3 cars $car_1, $car_2, the third one is not your business :)";
echo "I have 3 cars $car_1, $car_2, $car_3, $car_4";

$cars['allowed'];
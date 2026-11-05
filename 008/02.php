<?php
declare(strict_types=1);
// Indexed Arrays
// NOT COMMON

$cars = [
    0 => 'Ferrari',
    1 => 'Jaguar',
    2 => 'BMW'
];

var_dump($cars);

$names = ["Youssef", "Ahmed", "Mariam"];

var_dump(in_array("Ahmed", $names));
// true
echo array_search("Mariam", $names);
// 2

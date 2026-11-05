<?php
declare(strict_types=1);
// Associative Arrays
// COMMON

$products = [
    'Laptop' => '55000',
    'iPhone 18 Pro Max' => '100000',
    'Mouse' => '125',
    'keyboard' => '220'
];

var_dump($products);


$sales = [
    2020 => 1500000,
    2021 => 2500000,
    2022 => 500000,
    2023 => 7500000,
];
var_dump($sales);
print_r(array_keys($sales));
<?php
declare(strict_types=1);

// Clousers and use keyword
// variable by value ($var_name) or by reference (&$var_name)

$vat = 0.14;

$total = 0;

$order_price = fn (float $price , float $discount) : float =>  ($price - $discount) * $vat + ($price - $discount);

echo $order_price(1100, 100);


$sales = function ( float $price ) use (&$total) : void {
    // $total = $total + $price;
    $total += $price;
};


$total = 500;

$sales(1000);

echo "<h5>Total is $total</h5>";

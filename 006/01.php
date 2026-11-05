<?php
declare(strict_types=1);

$vat = 0.14;

// function calc_vat (float $price) : float {
//     global $vat;
//     return $price * $vat;
// }
// $price_1_vat = calc_vat(1000);


// $calc_vat = function (float $price) : float {
//     global $vat;
//     return $price * $vat;
// };

// $price_1_vat = $calc_vat(1000);


$calc_vat = fn ($price) => $price * $vat;

echo $price_1_vat = $calc_vat(1000);

echo "Price 1000 VAT is $price_1_vat";

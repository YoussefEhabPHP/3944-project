<?php

declare(strict_types=1);

namespace App\Payment\Fawry;

class Refund
{
    public static function deduct(float $amount)
    {
        echo '<h3>Payment -> Fawry -> Refund -> deduct</h3>';
    }
}

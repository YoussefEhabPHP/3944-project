<?php

declare(strict_types=1);

require_once 'Fawry.php';


class Refund extends Fawry
{
    static function process(string $orderNumber): void
    {
        echo 'Payment -> Fawry -> Refund -> process<br>';
    }
}

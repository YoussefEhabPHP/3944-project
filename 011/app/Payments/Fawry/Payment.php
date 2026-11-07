<?php

declare(strict_types=1);

require_once 'Fawry.php';

class Payment extends Fawry
{
    static function process(float $amount): void
    {

        $commissionAmount = $amount * self::getCommission();

        $gross = $amount + $commissionAmount;

        echo "Payment -> Fawry -> Payment -> process with amount of $gross<br>";

        // Ways to access parent method
        // self::generateInvoice($gross);
        // Payment::generateInvoice($gross);
        // static::generateInvoice($gross);

        // Fawry::generateInvoice($gross);
        parent::generateInvoice($gross);

        parent::report();
    }

    static function report()
    {
        echo '<h3>-------------------- Payment Report --------------------</h3>';
    }
}

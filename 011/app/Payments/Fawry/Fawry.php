<?php

declare(strict_types=1);

class Fawry
{

    // Constants
    private const MERCHANT_ID = '386798398478397';

    // Properties

    private static $commission = 0.1;

    // Methods
    static function print(string $invoice): void
    {
        echo "Payment -> Fawry -> Fawry -> printing...<br> $invoice";
    }

    static function generateInvoice(float $amount): void
    {
        $timestamp = date('Ymdhis');

        echo 'Payment -> Fawry -> Fawry -> generateInvoice<br>';

        $invoice =  "Time:  -> $timestamp<br> Amount: $amount<br> Merchant ID: " . self::MERCHANT_ID;

        self::print($invoice);
    }

    // getCommission and setCommission are called (Encapsulation)
    static function getCommission(): float
    {
        return self::$commission;
    }

    static function setCommission(float $newCommission): void
    {
        if ($newCommission > 1) throw new ('The new comission amount is not accepted');

        self::$commission = $newCommission;
    }

    static function report () {
        echo '<br>-------------------- Fawry Report --------------------<br>';
    }
}

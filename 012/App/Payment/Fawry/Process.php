<?php

declare(strict_types=1);

namespace App\Payment\Fawry;


class Process
{


    private static $merchatId = '';

    public static function pay()
    {
        echo '<h3>Payment -> Fawry -> Process -> pay</h3>';
    }

    public static function order()
    {
        echo '<h3>Payment -> Fawry -> Process -> order</h3>';
    }


    public static function query()
    {
        echo '<h3>Payment -> Fawry -> Process -> query</h3>';
    }


    public static function print()
    {
        echo '<h3>Payment -> Fawry -> Process -> print</h3>';
    }


    public static function calcInterest()
    {
        echo '<h3>Payment -> Fawry -> Process -> calcInterest</h3>';
    }


    public static function getMerchantId()
    {
        return self::$merchatId;
    }

    public static function setMerchantId(string $newMerchantId)
    {
        return self::$merchatId = $newMerchantId;
    }
}

<?php

declare(strict_types=1);

namespace App\Payment\Aman;


class Process
{


    private static $merchatId = '';

    public static function pay()
    {
        echo '<h3>Payment -> Aman -> Process -> pay</h3>';
    }

    public static function order()
    {
        echo '<h3>Payment -> Aman -> Process -> order</h3>';
    }


    public static function query()
    {
        echo '<h3>Payment -> Aman -> Process -> query</h3>';
    }


    public static function print()
    {
        echo '<h3>Payment -> Aman -> Process -> print</h3>';
    }


    public static function calcInterest()
    {
        echo '<h3>Payment -> Aman -> Process -> calcInterest</h3>';
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

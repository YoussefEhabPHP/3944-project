<?php
declare(strict_types=1);

namespace App\Payment\Aman;

class Refund {
    public static function deduct (float $amount) {
        echo '<h3>Payment -> Aman -> Refund -> deduct</h3>';
    }
}
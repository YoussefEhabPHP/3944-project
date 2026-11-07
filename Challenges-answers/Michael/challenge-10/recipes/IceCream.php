<?php
declare(strict_types=1);
require_once 'Recipy.php';

class IceCream extends Recipy {
    static function showFlavor() {
        echo 'Showing ice cream flavor<br>';
    }
    static function showTopping() {
        echo 'Showing toppings<br>';
    }
}

<?php
declare(strict_types=1);
require_once 'Recipy.php';

class Burger extends Recipy {
    static function showBurgerType() {
        echo 'Showing burger type<br>';
    }
    static function showCheeseOption() {
        echo 'Showing cheese option<br>';
    }
}

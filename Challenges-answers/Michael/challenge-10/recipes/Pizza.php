<?php
declare(strict_types=1);
require_once 'Recipy.php';

class Pizza extends Recipy {
    static function showPizzaSize() {
        echo 'Showing pizza size<br>';
    }
    static function showCrustType() {
        echo 'Showing crust type<br>';
    }
}

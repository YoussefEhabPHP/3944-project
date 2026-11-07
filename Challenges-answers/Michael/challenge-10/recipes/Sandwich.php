<?php
declare(strict_types=1);
require_once 'Recipy.php';

class Sandwich extends Recipy {
    static function showBreadType() {
        echo 'Showing bread type<br>';
    }
    static function showToastedStatus() {
        echo 'Showing toasted status<br>';
    }
}

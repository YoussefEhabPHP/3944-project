<?php  
declare(strict_types=1);

require_once 'Recipy.php';

class Burger extends Recipy{
    static function showBurgerType(){
        echo 'showBurgerType';
    }
    static function showCheeseOption(){
        echo 'showCheeseOption';
    }
}
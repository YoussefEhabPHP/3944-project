<?php  
declare(strict_types=1);

require_once 'Recipy.php';

class Pizza extends Recipy{
    static function showPizzaSize(){
        echo 'showPizzaSize';
    }
    static function showCrustType(){
        echo 'showCrustType';
    }
}
<?php  
declare(strict_types=1);

require_once 'Recipy.php';

class Sandwich extends Recipy{
    static function showBreadType(){
        echo 'showBreadType';
    }
    static function showToastedStatus(){
        echo 'showToastedStatus';
    }
}
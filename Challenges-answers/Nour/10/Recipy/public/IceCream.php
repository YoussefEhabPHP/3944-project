<?php  
declare(strict_types=1);

require_once 'Recipy.php';

class IceCream extends Recipy{
    static function showFlavor(){
        echo 'showFlavor';
    }
    static function showTopping(){
        echo 'showTopping';
    }
}
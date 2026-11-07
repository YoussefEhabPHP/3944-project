<?php
declare(strict_types=1);

require_once '/../helpers/index.php';
class Vehicle {
    static function showName(): void{
echo 'Vehicles -> Vehicle -> showName <br>';
    }
    static  function showPrice(): void{
echo 'Vehicles -> Vehicle -> showPrice <br>';
    } 
    static function showPaymentPlan(): void {
echo 'Vehicles -> Vehicle -> showPaymentPlan <br>';
    }
    static function startEngine(): void {
echo 'Vehicles -> Vehicle -> startEngine <br>';
    }
    static function stopEngine(): void {
echo 'Vehicles -> Vehicle -> stopEngine <br>';
    }
}

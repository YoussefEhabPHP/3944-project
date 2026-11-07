<?php
declare (strict_types=1);
namespace App\Company;
class Store {
    private $name = '';
    private $city = '';
    private $stock = 0;
    private $sales = 0;
    private $refund = 0;

    private static $totalBranches = 0;
    private static $totalStock = 0;
    private static $totalSales=0;
    private static $totalRefund=0;

    const PRICE = 100;
    public function create(string $name, string $city, int $stock): void{
        $this ->name = $name;
        $this -> city = $city;
        $this -> stock = $stock;
        echo "Store $name, devaloped in $city, with stock of $stock ";

    }
    public static function allBranches(string $name, int $stock): void{
        self:: $name = $name;
        self:: $stock = $stock;
        echo "Store $name, stock in all branches equal $stock";
    }

}
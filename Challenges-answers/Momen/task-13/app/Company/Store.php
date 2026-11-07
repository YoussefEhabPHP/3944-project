<?php

declare(strict_types=1);

namespace App\Company;

class Store
{
    private const PRICE = 100;
    private $name = '';
    private $city = '';
    private $stock = 0;
    private $sales = 0;
    private $refund = 0;

    private static $totalBranches = 0;
    private static $totalStock = 0;
    private static $totalSales = 0;
    private static $totalRefunds = 0;

    public function create(string $name, string $city, int $initialStock): void
    {
        $this->name = $name;
        $this->city = $city;
        $this->stock = $initialStock;

        self::$totalBranches++;
        self::$totalStock += $initialStock;
        echo 'successfully created store ' . $this->name . ' in ' . $this->city . '<br>';
    }
    public function sales(int $quantity)
    {
        self::$totalSales += $quantity * self::PRICE;
        $this->sales += $quantity * self::PRICE;
        $this->stock -= $quantity;
        self::$totalStock -= $quantity;
        echo '' . $this->sales . ' sales made in store ' . $this->name . '<br>';
    }
    public function refund(int $quantity)
    {
        self::$totalRefunds += $quantity * self::PRICE;
        $this->sales -= $quantity * self::PRICE;
        $this->refund += $quantity * self::PRICE;
        self::$totalSales -= $quantity * self::PRICE;
        self::$totalStock += $quantity;
        $this->stock += $quantity;
        echo '' . $this->refund . ' refunds processed in store ' . $this->name . '<br>';
    }
    public function report()
    {
        echo '<h4>Store: ' . $this->name . '</h4>';
        echo 'City: ' . $this->city . '<br>';
        echo 'Stock: ' . $this->stock . '<br>';
        echo 'Sales: ' . $this->sales . '<br>';
        echo 'Refunds: ' . $this->refund . '<br>';
    }
    public static function companyReport()
    {
        echo '<h4>Company Report</h4>';
        echo 'Total Branches: ' . self::$totalBranches . '<br>';
        echo 'Total Stock: ' . self::$totalStock . '<br>';
        echo 'Total Sales: ' . self::$totalSales . '<br>';
        echo 'Total Refunds: ' . self::$totalRefunds . '<br>';
    }
}

<?php
declare(strict_types=1);

namespace App\Company;

class Store {
    private string $name;
    private string $city;
    private int $stock = 0;
    private float $sales = 0;
    private float $refund = 0;

    private static int $totalBranches = 0;
    private static int $totalStock = 0;
    private static float $totalSales = 0;
    private static float $totalRefund = 0;

    private const PRICE = 100;

    // Challenge 1
    public function create(string $name, string $city, int $initialStock): void {
        $this->name = $name;
        $this->city = $city;
        $this->stock = $initialStock;

        self::$totalBranches++;
        self::$totalStock += $initialStock;

        echo "✅ Branch Created Successfully: '{$this->name}' in {$this->city}<br>";
    }

    // Challenge 2
    public function sales(int $quantity): void {
        $saleAmount = $quantity * self::PRICE;

        $this->sales += $saleAmount;
        $this->stock -= $quantity;

        self::$totalSales += $saleAmount;
        self::$totalStock -= $quantity;

        echo "Sale Processed: {$quantity} items sold for {$saleAmount} " . " (Branch: {$this->name})<br>";
    }

    // Challenge 3
    public function refund(int $quantity): void {
        $refundAmount = $quantity * self::PRICE;

        $this->sales -= $refundAmount;
        $this->stock += $quantity;
        $this->refund += $refundAmount;

        self::$totalSales -= $refundAmount;
        self::$totalStock += $quantity;
        self::$totalRefund += $refundAmount;

        echo "Refund Processed: {$quantity} items returned for {$refundAmount} " . " (Branch: {$this->name})<br>";
    }

    // Challenge 4
    public function report(): void {
        echo "<h3>=== BRANCH REPORT: {$this->name} ===</h3>";
        echo "City: {$this->city}<br>";
        echo "Current Stock: {$this->stock} units<br>";
        echo "Total Sales: {$this->sales}<br>";
        echo "Total Refunded: {$this->refund}<br>";
        echo "====================================<br>";
    }

    // Challenge 5
    public static function companyReport(): void {
        echo "<h3>     OVERALL COMPANY REPORT (GLOBAL)   </h3>";
        echo "Total Branches Active: " . self::$totalBranches . "<br>";
        echo "Total Global Stock   : " . self::$totalStock . " units<br>";
        echo "Total Global Sales   : " . self::$totalSales . "<br>";
        echo "Total Global Refunds : " . self::$totalRefund . "<br>";
        echo "====================================<br>";
    }
}

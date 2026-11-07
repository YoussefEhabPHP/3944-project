<?php

declare(strict_types=1);

namespace App\Company;

class Store
{

    const PRICE = 100;

    private $sales = 0;
    private $refund = 0;

    public function __construct(private string $name, private string $city, private int $stock)
    {
        $this->name = $name;
        $this->city = $city;
        $this->stock = $stock;
    }

    public function __destruct()
    {
        echo '<h5>........ Object removed from the memory......</h5>';
    }

    public function sales(int $qty): void
    {
        $salesAmount = $qty * self::PRICE;
        $this->sales += $salesAmount;
        $this->stock -= $qty;

        echo "Sales completed with a total of $salesAmount<br>";
    }

    public function refund(int $qty): void
    {
        $refundAmount = $qty * self::PRICE;
        $this->sales -= $refundAmount;
        $this->stock += $qty;
        $this->refund +=  $refundAmount;

        echo "Refund completed with a total of $refundAmount<br>";
    }

    public function report(): void
    {
        $storeName = $this->name;
        $city = $this->city;
        $sales = $this->sales;
        $refund = $this->refund;
        $stock = $this->stock;

        echo "<h4>Sales Report</h4>
        Store Name: $storeName<br>
        City: $city<br>
        Total Sales is: $sales<br>
        Total Refund is: $refund<br>
        Total Stock is: $stock<br>
        <h4>------------</h4>
        ";
    }

    public function updateBranch(string $name) {
        $this->name = $name;
    }
}

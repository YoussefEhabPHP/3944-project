<?php
declare(strict_types=1);

namespace App\company;

  echo "<h2>OOP Challenge: Company Branches Management System </h2>";
            echo "<b>1. Define the Class Properties</b> <br>";
    class Store {
        //constants
        const PRICE = 100;
        //non static properties
        private string $name ="";
        public string $city="";
        public int $stock=0;
        private int $sales=0;
        public int $refaund=0;
        //static properties
        public static int $totalBranches = 0;
        public static int $totalStock = 0;
        public static float $totalSales = 0;
        public static float $totalRefund = 0;

        function Store(string $name, string $city, int $stock, int $sales, int $refaund) {
            $this->name = $name;
            echo "<pre>";
            $this->city = $city;
            echo "<pre>";
            $this->stock = $stock;
            echo "<pre>";
            $this->sales = $sales;
            echo "<pre>";
            $this->refaund = $refaund;
        }
        /*function __construct(string $name, string $city, int $stock, int $sales, int $refaund) {
            $this->name = $name;
            echo "<pre>";
            $this->city = $city;
            echo "<pre>";
            $this->stock = $stock;
            echo "<pre>";
            $this->sales = $sales;
            echo "<pre>";
            $this->refaund = $refaund;
        }*/

        //non static method
        public function totalBranches(): int {
            $total = $this->stock + $this->sales + $this->refaund;
            return $total * self::PRICE;
        }
        //static method
        public static function TotalBranchess(int $stock, int $sales, int $refaund): int {
            //return $stock + $sales + $refaund;

            //total branches two static properties
            return self::$totalBranches += $stock + $sales + $refaund;
        }

        public static function TotalStock(int $stock): int {
            return self::$totalStock += $stock;
        }
        public static function TotalSales(float $sales): float {
            return self::$totalSales += $sales;
        }
        public static function TotalRefund(float $refaund): float {
            return self::$totalRefund += $refaund;
        }
        public function Create(string $name, string $city, int $stock): string
            {
                $this->name = $name;
                $this->city = $city;
                $this->stock = $stock;
                return "Store name: " . $this->name . "<br>". "City: " . $this->city . "<br>". "Initial stock: " . $this->stock . "<br>";
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


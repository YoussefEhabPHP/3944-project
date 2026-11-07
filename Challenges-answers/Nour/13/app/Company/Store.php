<?php
declare(strict_types=1);

namespace App\Company;

class Store{
    const PRICE = 100;

    public $name ='';
    public $city ='';
    public $stock = 0 ;
    public $sales = 0 ;
    public $refund = 0 ;

    private static $totalBranches= 0 ;
    private static $totalStock= 0 ;
    private static $totalSales= 0 ;
    private static $totalRefund= 0 ;

    public function create($storeNAme,$storeCity,$initialStock){
        $this->name=$storeNAme;
        $this->city=$storeCity;
        $this->stock=$initialStock;
        self::$totalBranches+=1;
        self::$totalStock+=$initialStock;
        echo "$storeCity Branch in $storeCity created 👍<br> <br>";
    }
    public function sales($qnt){
        $salesAmount=$qnt*self::PRICE;
        $this->sales+=$salesAmount;
        $this->stock-=$qnt;
        self::$totalSales+=$salesAmount;
        self::$totalStock-=$qnt;
        echo "Done $salesAmount in $this->name <br>";
    }
    public function refund($qnt){
        $refundAmount=$qnt*self::PRICE;
        $this->Sales-=$refundAmount;
        $this->refund+=$refundAmount;
        $this->stock+=$qnt;
        self::$totalSales-=$refundAmount;
        self::$totalStock+=$qnt;
        self::$totalRefund+=$refundAmount;
        echo "Done $refundAmount Refund in $this->name <br>";
    }
    public function report(){
        echo "
        <h3>---------------- Report ----------------------</h3>
        $this->name in $this->city <br>
        Has Stock $this->stock ,Sales $this->sales and Refund $this->refund <br>";
    }
    public static function companyReport(){
        $branches=self::$totalBranches;
        $stock=self::$totalStock;
        $sales=self::$totalSales;
        $refund=self::$totalRefund;
        echo "
        <h3>---------------- CompanyReport ----------------------</h3>
        In All $branches Branches We Have <br>
        Stock: $stock , <br>
        Sales: $sales <br>
        and Refund: $refund <br>";
    }

}
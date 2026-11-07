<?php 
declare(strict_types=1);
require_once 'vendor/autoload.php';

use App\Company\Store;

$store1 = new Store();
$store2 = new Store();
$totalBranches = new Store();
$create = new Store();
/*print_r($store);
print_r($store->city);*/
$store1->Store("Store 1", "City 1", 100, 1000, 100);
print_r($store1);
$store2->Store("Store 2", "City 2", 200, 2000, 200);
print_r($store2);

// non static method call
$totalBranches = $store1->totalBranches();
echo "<br><b>Total Branches 1: </b>".$totalBranches;
echo "<hr>";
$totalBranches = $store2->totalBranches();
echo "<br><b>Total Branches 2: </b>".$totalBranches;
echo "<hr>";

// static method call
//branches static method call
$totalBranches =Store::TotalBranchess(100, 1000, 100);
echo "<br><b>Total Branches static 1: </b>".$totalBranches;
$totalBranches =Store::TotalBranchess(200, 2000, 200);
echo "<br><b>Total Branches static 2: </b>".$totalBranches;

//stock static method call
$totalStock = Store::TotalStock(100);
echo "<br><b>Total Stock static 1: </b>".$totalStock;
$totalStock = Store::TotalStock(200);
echo "<br><b>Total Stock static 2: </b>".$totalStock;

//sales static method call
$totalSales = Store::TotalSales(1000);
echo "<br><b>Total Sales static 1: </b>".$totalSales;
$totalSales = Store::TotalSales(2000);
echo "<br><b>Total Sales static 2: </b>".$totalSales;

//refund static method call
$totalRefund = Store::TotalRefund(100);
echo "<br><b>git diff --name-only --diff-filter=U
Total Refund static 1: </b>".$totalRefund; 
$totalRefund = Store::TotalRefund(200);
echo "<br><b>Total Refund static 2: </b>".$totalRefund;
//sales non static method call
$totalSales = $store1->totalSales(20);
echo "<br><b>Total Sales 1: </b>".$totalSales;
echo "<hr>";

Store::companyReport();

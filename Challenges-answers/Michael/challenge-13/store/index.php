<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Company\Store;

echo "<h3>        STORE MANAGEMENT SYSTEM OPERATIONS       </h3>";
echo "==================================================<br>";

// Challenge 4
$cairoBranch = new Store();
$cairoBranch->create("Cairo Branch", "Cairo", 100);

$alexBranch = new Store();
$alexBranch->create("Alexandria Branch", "Alexandria", 150);

$gizaBranch = new Store();
$gizaBranch->create("Giza Branch", "Giza", 200);

// Challenge 5
// Cairo Branch
$cairoBranch->sales(20);
$cairoBranch->sales(10);
$cairoBranch->refund(5);

// Alexandria Branch
$alexBranch->sales(30);
$alexBranch->refund(10);

// Giza Branch
$gizaBranch->sales(50);
$gizaBranch->sales(25);
$gizaBranch->refund(15);


// Challenge 6
$cairoBranch->report();
$alexBranch->report();
$gizaBranch->report();

Store::companyReport();

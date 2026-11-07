<?php
require_once 'vendor/autoload.php';

use App\Company\Store;

$cairoBranch = new Store();

$cairoBranch->create('Cairo Branch', 'Cairo', 100);
$cairoBranch->sales(20);
$cairoBranch->sales(10);
$cairoBranch->refund(5);

$alexBranch = new Store();
$alexBranch->create('Alex Branch', 'Alexandria', 150);
$alexBranch->sales(30);
$alexBranch->refund(10);

$gizaBranch = new Store();
$gizaBranch->create('Giza Branch', 'Giza', 200);
$gizaBranch->sales(50);
$gizaBranch->sales(25);
$gizaBranch->refund(15);

$cairoBranch->report();
$alexBranch->report();
$gizaBranch->report();
Store::companyReport();
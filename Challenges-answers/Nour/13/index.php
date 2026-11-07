<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Company\Store;

$cairo_Branch =new Store;
$cairo_Branch->create('Cairo Branch','Cairo',100);
$cairo_Branch->sales(20);
$cairo_Branch->sales(10);
$cairo_Branch->refund(5);


$alexandria_Branch =new Store;
$alexandria_Branch->create('Alexandria Branch','Alexandria',150);
$alexandria_Branch->sales(30);
$alexandria_Branch->refund(10);


$giza_Branch =new Store;
$giza_Branch->create('Giza Branch','Giza',200);
$giza_Branch->sales(50);
$giza_Branch->sales(25);
$giza_Branch->refund(15);

$cairo_Branch->report();
$alexandria_Branch->report();
$giza_Branch->report();
Store::companyReport();
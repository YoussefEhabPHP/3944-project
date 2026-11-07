<?php


declare(strict_types=1);

require_once 'vendor/autoload.php';
require_once 'helpers/functions.php';

use App\Company\Store;

// Alexandria Branch
$alexBranch = new Store;

dump($alexBranch);

$alexBranch->create( 'Shop A' , 'Alexandria', 500);
$alexBranch->sales(5);
$alexBranch->report();
$alexBranch->refund(2);
$alexBranch->report();



// Banha Branch
$banhaBranch = new Store;

$banhaBranch->create( 'Shop B' , 'Banha', 1000);
$banhaBranch->sales(10);
$banhaBranch->report();
$banhaBranch->refund(5);
$banhaBranch->report();


$alexBranch->report();
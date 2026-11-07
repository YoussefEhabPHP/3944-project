<?php


declare(strict_types=1);

require_once 'vendor/autoload.php';
require_once 'helpers/functions.php';

use App\Company\Store;

echo '______SHOP Alexandria______<br>';
// Alexandria Branch
$alexBranch = new Store( 'Roushdi Shop' , 'Alexandria', 500);
 
$alexBranch->sales(5);
$alexBranch->report();
// unset($alexBranch);
$alexBranch->refund(2);
$alexBranch->report();

echo '______SHOP Cairo______<br>';

// Banha Branch
$cairobranch = new Store ('Shobra mega Shop', 'Cairo', 1500);

$cairobranch->sales(10);
$cairobranch->report();
$cairobranch->refund(5);
$cairobranch->report();

$alexBranch->updateBranch('Roushdi Mega Branch');

 

$alexBranch->report();


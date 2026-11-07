<?php
declare (strict_types=1);
require_once 'vendor/autoload.php';
use App\Company\Store;
$alexBranch = new Store;
$alexBranch -> create('Fantazy', 'Alexandria', 1000);
<?php

declare(strict_types=1);

require_once 'App/Payment/Aman/Process.php';
require_once 'App/Payment/Fawry/Process.php';
require_once 'App/database/User.php';

// use App\Payment\Aman\Process;
// use App\Payment\Fawry\Process as FawryProcess;

use App\Payment\Aman\ {
    Process,
    Refund
};

use App\Payment\Fawry\ {
    Process as FawryProcess,
    Refund as FawryRefund
};

// App\Payment\Aman\Process::pay();
// App\Payment\Aman\Process::order();
// App\Payment\Aman\Process::query();
// App\Payment\Aman\Process::print();
// App\Payment\Aman\Process::calcInterest();
// App\Payment\Aman\Process::getMerchantId();
// App\Payment\Aman\Process::setMerchantId('xyz123');

// Aman
Process::pay();
Process::order();
Process::query();
Process::print();
Process::calcInterest();
Process::getMerchantId();
Process::setMerchantId('xyz123');

// Fawry

FawryProcess::pay();
FawryProcess::order();
FawryProcess::query();
FawryProcess::print();
FawryProcess::calcInterest();
FawryProcess::getMerchantId();
FawryProcess::setMerchantId('xyz123');



App\Database\User::all();


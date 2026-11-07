<?php
declare(strict_types=1);

require_once 'app/Payments/Fawry/Payment.php';

Payment::process(10000);

echo '<br>';

// echo 'The Merchant ID is: ' . Payment::$merchantID; // Private -> cannot access it!!!

// Fawry::$commission = 0.5; // Protected -> cannot access!!!

echo '<br>----------------------------<br>';

Payment::process(500000);


echo '<br>----------------------------<br>';

echo Fawry::getCommission();

echo '<br>----------------------------<br>';

Fawry::setCommission(0.2);

echo Fawry::getCommission();

echo '<br>----------------------------<br>';

Fawry::setCommission(0.1);

echo Fawry::getCommission();

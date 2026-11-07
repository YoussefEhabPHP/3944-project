<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Restaurant\Food;

App\Database\Staff\Sales::createReport();

Food::eat();
Food::clean();
Food::heat();
Food::prepare();

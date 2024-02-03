<?php

require_once '../vendor/autoload.php';

use Src\Abstracts\Creator;
use Src\App\Truck;
use Src\App\Ships;

function code(Creator $creator){
    return $creator->info();
}

code(new Ships);

<?php

namespace Src\App;

use Src\Abstracts\Creator;
use Src\Contracts\Logistic;

class Truck extends Creator implements Logistic{

    public function factoryMethod(): object
    {
        return new Truck();
    }

    public function By() :string{
        return 'Truck';
    }
}
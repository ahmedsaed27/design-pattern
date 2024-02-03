<?php

namespace Src\App;

use Src\Abstracts\Creator;
use Src\Contracts\Logistic;

class Ships extends Creator implements Logistic{

    public function factoryMethod(): object
    {
        return new Ships();
    }

    public function By() :string{
        return 'Ship';
    }
}
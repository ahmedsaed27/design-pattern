<?php

namespace Src\Abstracts;

abstract class Creator {

    abstract public function factoryMethod(): object;

    public function info(): void
    {
        $logistic = $this->factoryMethod();

        $result = 'These products will be transported to you by ' . $logistic->By();

        echo $result;
    }
}

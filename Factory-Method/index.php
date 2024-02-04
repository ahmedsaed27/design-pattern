<?php

abstract class Creator
{
    abstract public function createTransport(): Logistic;

    public function transportInfo(): string
    {
        $logistic = $this->createTransport();

        return 'These products will be transported to you by ' . $logistic->deliver();
    }
}

interface Logistic
{
    public function deliver(): string;
}

class SeaLogistic extends Creator implements Logistic
{
    public function createTransport(): Logistic
    {
        return new SeaLogistic();
    }

    public function deliver(): string
    {
        return 'Ship';
    }
}

class LandLogistic extends Creator implements Logistic
{
    public function createTransport(): Logistic
    {
        return new LandLogistic();
    }

    public function deliver(): string
    {
        return 'Truck';
    }
}

function runTransport(Creator $creator)
{
    echo $creator->transportInfo();
    echo '<br>';
}

runTransport(new SeaLogistic());
runTransport(new LandLogistic());

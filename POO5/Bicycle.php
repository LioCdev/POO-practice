<?php

require_once 'Vehicle.php';
require_once 'LightableInterface';

class Bicycle extends Vehicle implements LightableInterface
{
    public function swithchOn(): bool
    {
        if ($this->currentSpeed > 10){
            return true;        
        }
    }

    public function swithchOff(): bool
    {
        return false;
    }
}
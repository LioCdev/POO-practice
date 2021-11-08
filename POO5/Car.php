<?php

require_once 'Vehicle.php';
require_once 'LightableInterface';

class Car extends Vehicle implements LightableInterface
{
    protected string $energy;
    protected int $energyLevel;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent:: __construct($color,$nbSeats);
        $this->setEnergy($energy);
    }

    public function swithchOn(): bool
    {
        return true;
    }

    public function swithchOff(): bool
    {
        return false;
    }

    public function setParkBrake(bool $hasParkBrake):void {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string {
        if ($this->hasParkBrake === true){
            throw new Exception("parkBrakeOn");
        }

        $this->currentSpeed = 0;
        return "Let's Go ! ";
    }

    public function forward(): string {
        $sentence = "";
        while ($this->currentSpeed < 10) {
            $this->currentSpeed++;
            $sentence .= "Come On ! ";
        }
        $sentence .= "Slowly Baby ! ";
        return $sentence;
    }

    public function brake():string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped ! ";
        return $sentence;
    }

    public function getEnergy():string {
        return $this->energy;
    }

    public function getEnergyLevel():int {
        return $this->energyLevel;
    }

}
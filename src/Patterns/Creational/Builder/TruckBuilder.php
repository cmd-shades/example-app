<?php

declare(strict_types=1);

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Parts\Door;
use Patterns\Creational\Builder\Parts\Engine;
use Patterns\Creational\Builder\Parts\Wheel;
use Patterns\Creational\Builder\Parts\Truck;
use Patterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function addDoors(): void
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel(): void
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}

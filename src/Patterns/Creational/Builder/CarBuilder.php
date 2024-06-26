<?php

declare(strict_types=1);

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Parts\Door;
use Patterns\Creational\Builder\Parts\Engine;
use Patterns\Creational\Builder\Parts\Wheel;
use Patterns\Creational\Builder\Parts\Car;
use Patterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel(): void
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}

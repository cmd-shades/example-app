<?php

declare(strict_types=1);

namespace Patterns\Creational\Builder\Tests;

use Patterns\Creational\Builder\Parts\Car;
use Patterns\Creational\Builder\Parts\Truck;
use Patterns\Creational\Builder\TruckBuilder;
use Patterns\Creational\Builder\CarBuilder;
use Patterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}

<?php

declare(strict_types=1);

namespace Patterns\Creational\SimpleFactory\Tests;

use Patterns\Creational\SimpleFactory\Bicycle;
use Patterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}

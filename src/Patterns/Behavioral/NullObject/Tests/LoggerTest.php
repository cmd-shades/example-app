<?php

declare(strict_types=1);

namespace Patterns\Behavioral\NullObject\Tests;

use Patterns\Behavioral\NullObject\NullLogger;
use Patterns\Behavioral\NullObject\PrintLogger;
use Patterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}

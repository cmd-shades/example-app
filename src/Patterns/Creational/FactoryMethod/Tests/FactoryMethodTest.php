<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod\Tests;

use Patterns\Creational\FactoryMethod\FileLogger;
use Patterns\Creational\FactoryMethod\FileLoggerFactory;
use Patterns\Creational\FactoryMethod\StdoutLogger;
use Patterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}

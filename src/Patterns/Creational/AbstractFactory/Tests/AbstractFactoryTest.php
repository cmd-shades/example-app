<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Tests;

use Patterns\Creational\AbstractFactory\CsvWriter;
use Patterns\Creational\AbstractFactory\JsonWriter;
use Patterns\Creational\AbstractFactory\UnixWriterFactory;
use Patterns\Creational\AbstractFactory\WinWriterFactory;
use Patterns\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}

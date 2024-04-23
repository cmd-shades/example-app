<?php

namespace Patterns\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}

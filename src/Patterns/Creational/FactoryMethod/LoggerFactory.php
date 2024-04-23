<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}

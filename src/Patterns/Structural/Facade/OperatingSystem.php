<?php

declare(strict_types=1);

namespace Patterns\Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}

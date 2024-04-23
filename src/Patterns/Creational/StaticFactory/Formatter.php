<?php

declare(strict_types=1);

namespace Patterns\Creational\StaticFactory;

interface Formatter
{
    public function format(string $input): string;
}

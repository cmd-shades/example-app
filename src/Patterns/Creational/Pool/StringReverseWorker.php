<?php

declare(strict_types=1);

namespace Patterns\Creational\Pool;

class StringReverseWorker
{
    public function run(string $text): string
    {
        return strrev($text);
    }
}

<?php

declare(strict_types=1);

namespace Patterns\Structural\Bridge;

interface Formatter
{
    public function format(string $text): string;
}

<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Specification;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}

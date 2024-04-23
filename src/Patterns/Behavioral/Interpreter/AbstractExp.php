<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Interpreter;

abstract class AbstractExp
{
    abstract public function interpret(Context $context): bool;
}

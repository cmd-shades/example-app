<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitor $visitor);
}

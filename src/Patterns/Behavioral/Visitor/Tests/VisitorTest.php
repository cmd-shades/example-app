<?php

declare(strict_types=1);

namespace Patterns\Tests\Visitor\Tests;

use Patterns\Behavioral\Visitor\RecordingVisitor;
use Patterns\Behavioral\Visitor\User;
use Patterns\Behavioral\Visitor\Group;
use Patterns\Behavioral\Visitor\Role;
use Patterns\Behavioral\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}

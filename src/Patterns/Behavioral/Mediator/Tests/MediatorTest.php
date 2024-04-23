<?php

declare(strict_types=1);

namespace Patterns\Tests\Mediator\Tests;

use Patterns\Behavioral\Mediator\Ui;
use Patterns\Behavioral\Mediator\UserRepository;
use Patterns\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}

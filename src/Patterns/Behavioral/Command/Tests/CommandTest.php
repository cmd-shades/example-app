<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Command\Tests;

use Patterns\Behavioral\Command\HelloCommand;
use Patterns\Behavioral\Command\Invoker;
use Patterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}

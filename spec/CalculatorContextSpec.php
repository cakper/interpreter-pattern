<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorContextSpec extends ObjectBehavior
{
    function it_returns_added_elements_as_string()
    {
        $this->add('1');
        $this->add('2');
        $this->add('+');

        $this->asString()->shouldReturn('1 2 +');
    }
}

<?php

namespace spec;

use CalculatorContext;
use Expression;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberSpec extends ObjectBehavior
{
    const NUMBER = 4;

    function let()
    {
        $this->beConstructedWith(self::NUMBER);
    }

    function it_is_an_expression()
    {
        $this->shouldBeAnInstanceOf(Expression::class);
    }
    
    function it_returns_bare_number(CalculatorContext $context)
    {
        $context->add(self::NUMBER)->shouldBeCalled();
        $this->interpret($context)->shouldReturn(self::NUMBER);
    }
}

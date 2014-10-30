<?php

namespace spec;

use CalculatorContext;
use Expression;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinusSpec extends ObjectBehavior
{
    function let(Expression $leftExpression, Expression $rightExpression)
    {
        $this->beConstructedWith($leftExpression, $rightExpression);
    }

    function it_is_an_expression()
    {
        $this->shouldBeAnInstanceOf(Expression::class);
    }

    function it_sums_interpreted_expressions(Expression $leftExpression, Expression $rightExpression, CalculatorContext $context)
    {
        $leftExpression->interpret($context)->willReturn(2);
        $rightExpression->interpret($context)->willReturn(1);

        $context->add('-')->shouldBeCalled();

        $this->interpret($context)->shouldReturn(1);
    }
}

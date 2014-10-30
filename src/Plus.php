<?php

class Plus implements Expression
{
    private $rightExpression;

    private $leftExpression;

    public function __construct(Expression $leftExpression, Expression $rightExpression)
    {
        $this->rightExpression = $rightExpression;
        $this->leftExpression = $leftExpression;
    }

    public function interpret(CalculatorContext $context)
    {
        $result = $this->leftExpression->interpret($context) + $this->rightExpression->interpret($context);
        $context->add('+');

        return $result;
    }
}

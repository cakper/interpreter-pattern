<?php

class Calculator
{
    public function execute()
    {
        $context = new CalculatorContext();
        $expression = new Plus(new Plus(new Number(1), new Number(2)), new Minus(new Number(1), new Number(2)));

        $result = $expression->interpret($context);

        echo  $result. ' in RPN ' . $context->asString() . PHP_EOL;
    }
}

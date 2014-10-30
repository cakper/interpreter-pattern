<?php

class Number implements Expression
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function interpret(CalculatorContext $context)
    {
        $context->add($this->number);
        
        return $this->number;
    }
}

<?php

interface Expression
{
    public function interpret(CalculatorContext $context);
}

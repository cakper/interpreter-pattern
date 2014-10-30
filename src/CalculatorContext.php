<?php

class CalculatorContext
{
    private $values = [];

    public function add($value)
    {
        $this->values[] = $value;
    }

    public function asString()
    {
        return implode(' ', $this->values);
    }
}

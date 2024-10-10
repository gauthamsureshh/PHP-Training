<?php

class Calculator {
    private int $number1;
    private int $number2;
    private string $operator;

    public function __construct(string $operator,float $number1,float $number2){
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operator = $operator;
    }

    public function calculate(): float {
        return match($this->operator) {
            '+' => $this->number1 + $this->number2,
            '-' => $this->number1 - $this->number2,
            '*' => $this->number1 * $this->number2,
            '/' => $this->number1 / $this->number2,
            default =>  "Invalid operator",
        };
    }

}
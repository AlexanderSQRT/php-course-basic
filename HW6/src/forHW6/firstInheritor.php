<?php

namespace src\forHW6;

class firstInheritor extends MainClass
{

    // Каждый наследник должен содержать одно свойство

    public $firstInheritorNumber;

    // Каждое свойство должно иметь геттер и сеттер

    function set_firstInheritorNumber($firstInheritorNumber)
    {
        $this->firstInheritorNumber = $firstInheritorNumber;
    }

    function get_firstInheritorProperty()
    {
        return $this->firstInheritorNumber;
    }

    // Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    public function addNumbers() {
        return $this->secondNumber + $this->firstNumber + $this->firstInheritorNumber;
    }

    function exponentiate($anyNumber, $exponent): int
    {
        return pow($anyNumber, $exponent);
    }
}
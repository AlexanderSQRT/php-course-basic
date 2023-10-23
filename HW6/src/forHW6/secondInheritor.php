<?php

namespace src\forHW6;

class secondInheritor extends MainClass
{

    // Каждый наследник должен содержать одно свойство

    public $secondInheritorNumber;

    // Каждое свойство должно иметь геттер и сеттер

    function set_secondInheritorNumber($secondInheritorNumber)
    {
        $this->secondInheritorNumber = $secondInheritorNumber;
    }

    function get_secondInheritorProperty()
    {
        return $this->secondInheritorNumber;
    }

    // Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    public function multiplyNumbers() {
        return $this->secondNumber * $this->firstNumber * $this->secondInheritorNumber;
    }

    function exponentiate($anyNumber, $exponent): int
    {
        return pow($anyNumber, $exponent);
    }
}
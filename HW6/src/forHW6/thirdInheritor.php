<?php

namespace src\forHW6;

final class thirdInheritor extends MainClass
{

    // Каждый наследник должен содержать одно свойство

    public $thirdInheritorNumber;

    // Каждое свойство должно иметь геттер и сеттер

    function set_thirdInheritorNumber($thirdInheritorNumber)
    {
        $this->thirdInheritorNumber = $thirdInheritorNumber;
    }

    function get_thirdInheritorProperty()
    {
        return $this->thirdInheritorNumber;
    }

    // Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    public function substractNumbers() {
        return $this->secondNumber - $this->firstNumber - $this->thirdInheritorNumber;
    }

    function exponentiate($anyNumber, $exponent): int
    {
        return pow($anyNumber, $exponent);
    }
}
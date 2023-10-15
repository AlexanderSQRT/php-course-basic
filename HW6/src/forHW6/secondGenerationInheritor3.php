<?php

namespace src\forHW6;

class secondGenerationInheritor3 extends secondInheritor {
    public $number;

    //Каждое свойство должно иметь геттер и сеттер

    function set_number($number) {
        $this->number = $number;
    }

    function get_number() {
        return $this->number;
    }

    //Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    function substractFromParentNumbers() {
        return $this->number - $this->secondInheritorNumber;
    }
    //И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

    function substractFromMainClassNumbers() {
        return $this->number - $this->firstNumber - $this->secondNumber;
    }
}
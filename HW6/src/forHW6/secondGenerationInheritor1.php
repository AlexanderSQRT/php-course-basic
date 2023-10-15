<?php

namespace src\forHW6;

class secondGenerationInheritor1 extends firstInheritor {
    public $number;

    //Каждое свойство должно иметь геттер и сеттер

    function set_number($number) {
        $this->number = $number;
    }

    function get_number() {
        return $this->number;
    }

    //Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    function addToParentNumbers() {
        return $this->firstInheritorNumber + $this->number;
    }
    //И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

    function addToMainClassNumbers() {
        return $this->number + $this->firstNumber + $this->secondNumber;
    }
}
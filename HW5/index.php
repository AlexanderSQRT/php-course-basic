<?php
// 1) Создать родительский (главный класс)

abstract class MainClass
{

    // Класс должен содержать 2 свойства
    protected $firstNumber;
    protected $secondNumber;

    // Каждое свойство должно иметь геттеры и сеттеры

    function set_firstNumber($firstNumber)
    {
        $this->firstNumber = $firstNumber;
    }

    function set_secondNumber($secondNumber)
    {
        $this->secondNumber = $secondNumber;
    }

    function get_firstNumber()
    {
        return $this->firstNumber;
    }

    function get_secondNumber()
    {
        return $this->secondNumber;
    }

    // должен содержать абстрактную функцию возведения в степень

    abstract public function exponentiate($anyNumber, $exponent): int;
}

/*
2) Создать 3 наследника родительского класса

*/

// FIRST

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


// SECOND

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

// THIRD

// Один наследник не должен быть наследуемым
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


//3) Создать по 2 наследника от наследников первого уровня

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

class secondGenerationInheritor2 extends firstInheritor {
    public $number;

    //Каждое свойство должно иметь геттер и сеттер

    function set_number($number) {
        $this->number = $number;
    }

    function get_number() {
        return $this->number;
    }

    //Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    function multiplyWithParentNumbers() {
        return $this->firstInheritorNumber * $this->number;
    }
    //И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

    function multiplyWithToMainClassNumbers() {
        return $this->number * $this->firstNumber * $this->secondNumber;
    }
}

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

class secondGenerationInheritor4 extends secondInheritor {
    public $number;

    //Каждое свойство должно иметь геттер и сеттер

    function set_number($number) {
        $this->number = $number;
    }

    function get_number() {
        return $this->number;
    }

    //Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

    function divideByParentNumbers() {
        return $this->number / $this->secondInheritorNumber;
    }
    //И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

    function divideByMainClassNumbers() {
        return $this->number / $this->firstNumber / $this->secondNumber;
    }
}
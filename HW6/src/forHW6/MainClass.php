<?php

namespace src\forHW6;
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
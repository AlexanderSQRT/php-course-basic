<?php

/* Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент
номер которого передан параметром во всех вложенных массивах.
*/

$arr = [1, 2, 3, 4, 5, [1, 2, 5], [1, 2, 5, [1, 2, 5]]];

function getSpecifiedElem(array $array, int $number)
{
    $i = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            getSpecifiedElem($value, $number);
        } elseif ($i === $number) {
            echo $array[$number];
            echo "</br>";
        }
        $i += 1;
    }
}

getSpecifiedElem($arr, 2);
echo "</br>";


/* Создать функцию которая считает все буквы b в переданной строке, 
в случае если передается не строка функция должна возвращать false
*/

function countLetterB($value)
{

    if (!is_string($value)) {
        echo "not a string";
        return false;
    }

    $Bcounter = 0;
    for ($i = 0; $i < strlen($value); $i += 1) {
        if ($value[$i] === "b") {
            $Bcounter += 1;
        }
    }
    return $Bcounter;
}

countLetterB([]);
echo "</br>";
echo countLetterB("bfsb4124b");

/* Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
*/

$sum = 0;

function countSum($array)
{
    global $sum;
    foreach ($array as $elem) {
        if (is_array($elem)) {
            countSum($elem);
        } else {
            $sum += $elem;
        }
    }
    return $sum;
}

echo "</br>";
echo countSum([1, 1, [2, 3, [2, 3]]]);


/* Создать функцию которая определит сколько квадратов меньшего размера можно 
вписать в квадрат большего размера размер возвращать в float
*/

function countSquares($biggersideLength, $smallerSideLength): float
{
    $bigSquareArea = $biggersideLength ** 2;
    $smallSquareArea = $smallerSideLength ** 2;
    
    return $bigSquareArea / $smallSquareArea;
}

echo "</br>";
echo countSquares(4, 2);
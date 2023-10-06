<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// порахувати длину масиву

$count = count($arr);
echo "array length: $count <br />";

// перемістити перші 4 элементи масиву до кінця масиву

$removedItems = array_splice($arr, 0, 4);
$arr = array_merge($arr, $removedItems);
echo "<br />";
print_r($arr);

// отримати суму 4,5,6 елемента

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sum = 0;
for ($i = 0; $i < count($arr) + 1; $i += 1) {
    if ($i === 4 || $i === 5 || $i === 6) {
        $sum += $arr[$i];
    }
}
echo "<br />";
echo $sum;

// or

$sum2 = array_sum(array_splice($arr, 4, 3));
echo "<br />";
echo $sum2;

// ===============================================

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];

// знайти усі елементи, які відсутні у першому масиві і присутні у другому

$result = array_diff_assoc($secondArr, $firstArr);
echo "<br />";
print_r($result);

// знайти усі елементи, які відсутні у другому масиві і присутні у першому

$result = array_diff_assoc($firstArr, $secondArr);
echo "<br />";
print_r($result);

// знайти усі елементы значення якіх співпадают

$result = array_intersect($firstArr, $secondArr);
echo "<br />";
print_r($result);

// знайти усі елементы значення якіх  відрізняеться

$result = array_diff($firstArr, $secondArr);
echo "<br />";
print_r($result);

// ===============================================

$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];

// отримати усі другі елементи вложених масивів
echo "<br />";

foreach ($firstArr as $x => $val) {
    if (is_array($val)) {
        $secondElem = array_slice($val, 2, 1);
        if ($secondElem) {
            print_r($secondElem);
            echo "<br />";
        }
    };
}

// отримати загальну кількість елементів у масиві

$result = 0;

foreach ($firstArr as $x => $val) {
    $result+=1;
    if (is_array($val)) {
        foreach($val as $y => $nestedVal) {
            $result+=1;
        }
    }
}

echo $result;
echo "<br />";

// отримати суму усіх значень у масиві

$sum = 0;

foreach ($firstArr as $x => $val) {
    if (is_array($val)) {
        $sum += array_sum(array_values($val));
    } else {
        $sum += $val;
    }
}

echo $sum;
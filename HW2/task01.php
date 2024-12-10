<!-- ##1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return. -->
<?php

function amount($arg1, $arg2) {
    return $arg1 + $arg2;
}

function subtraction($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiplication($arg1, $arg2) {
    return $arg1 * $arg2;
}

function division($arg1, $arg2) {
    if ($arg2 != 0) {
        return $arg1 / $arg2;
    } else {
        return "Error: Division by zero ";
    }
}

echo amount(5, 5);  //10
echo subtraction(8, 3);  //5
echo multiplication(5, 2);  //10
echo division(8, 2);  //4
echo division(10, 0);  //"Error: Division by zero"


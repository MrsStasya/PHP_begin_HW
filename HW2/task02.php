<!-- ##2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). -->

<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'amount':
            return $arg1 + $arg2;
        case 'subtraction':
            return $arg1 - $arg2;
        case 'multiplication':
            return $arg1 * $arg2;
        case 'division':
            if ($arg2 != 0) {
                return $arg1 / $arg2;
            } else {
                return "Error: Division by zero";
            }
        default:
            return "Error: Unknown operation";
    }
}


echo mathOperation(5, 5, 'amount');  // Вывод 10
echo mathOperation(5, 5, 'subtraction');  // Вывод 0
echo mathOperation(2, 5, 'multiplication');  // Вывод 10
echo mathOperation(8, 2, 'division');  // Вывод 4
echo mathOperation(10, 0, 'division');  // Вывод "Error: Division by zero"
echo mathOperation(1, 1, 'power');  // Вывод "Error: Unsupported operation"
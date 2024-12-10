<!-- ##5. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. -->
<?php

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    } elseif ($pow > 0) {
        return $val * power($val, $pow - 1);
    } else {
        return 1 / power($val, -$pow);
    }
}

// Вызов функции. $val – заданное число = 2, $pow – степень = 3.
echo power(2, 3);  // Выведет 8 

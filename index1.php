<?php
// 1. Объявление переменных и констант
$name = "Андрей"; // строка
$age = 25; // целое число
$isStudent = true; // булево значение

// Константа
define("SITE_NAME", "МойСайт.com");

// Вывод значений
echo "Имя: " . $name . "<br>";
echo "Возраст: " . $age . "<br>";
echo "Студент: " . ($isStudent ? 'Да' : 'Нет') . "<br>";
echo "Название сайта: " . SITE_NAME . "<br>";

// 2. Преобразование типов
$numberString = "12345"; // строка
$number = (int)$numberString; // преобразование в число

echo "Преобразованное число: " . $number . "<br>";
echo "Тип переменной: " . gettype($number) . "<br>";

// 3. Арифметические операции
$num1 = 10;
$num2 = 5;

echo "Сложение: " . ($num1 + $num2) . "<br>";
echo "Вычитание: " . ($num1 - $num2) . "<br>";
echo "Умножение: " . ($num1 * $num2) . "<br>";
echo "Деление: " . ($num1 / $num2) . "<br>";

// Сравнение
echo "Сравнение (равно): " . ($num1 == $num2 ? 'Истина' : 'Ложь') . "<br>";
echo "Сравнение (больше): " . ($num1 > $num2 ? 'Истина' : 'Ложь') . "<br>";

// Логическое выражение
$logicalResult = ($num1 > 5 && $num2 < 10) || $isStudent;
echo "Логическое выражение: " . ($logicalResult ? 'Истина' : 'Ложь') . "<br>";

// 4. Использование суперглобальной переменной $_SERVER
echo "Информация о сервере: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "IP-адрес клиента: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Браузер пользователя: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

?>

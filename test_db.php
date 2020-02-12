<?php 
// УСТАНАВЛИВАЕМ ДОСТУПЫ К БАЗЕ ДАННЫХ
$host = "test";
$user = "root";
$password = "";
$db_name = "test";

// СОЕДИНЯЕМСЯ
$link = mysqli_connect($host, $user, $password, $db_name);

// УСТАНАВЛИВАЕМ КОДИРОВКУ
mysqli_query($link, "SET NAMES 'utf8'");

// ТЕСТОВЫЙ ЗАПРОС
$query = "SELECT * FROM workers WHERE id > 0";

// ДЕЛАЕМ ЗАПРОС К БД, РЕЗУЛЬТАТ ЗАПИШЕМ В ПЕРЕМЕННУЮ
$result = mysqli_query($link, $query) or die(mysqli_error($link));
// ПРЕОБРАЗЕУМ ТО, ЧТО ОТДАЛА НАМ БАЗА ДАННЫХ В НОРМАЛЬНЫЙ МАССИВ  РХР $data
for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

var_dump($data);
?>

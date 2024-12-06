<?php
require_once 'student.php';
require_once 'employee.php';

echo "Студент:<br><br>";

$student = new Student("Дуплянская Марина Олеговна", 19, "Девушка", "21ИТ25", 2021, "Студент");

echo $student->getInfo() . "<br>";

$student->changePos("Волонтёр");
$student->changeGr("21ИТ35");

echo $student->getInfo() . "<br><br>";

echo "Сотрудник:<br><br>";

$employee = new Employee("Карина Жидкова Олеговна", 25, "Девушка", "Преподаватель", 2020, 5, 69999);

echo $employee->getInfo() . "<br>";

$employee->changePos("Главный акционер ПКИПТ");
$employee->changeSal(128100);

echo $employee->getInfo() . "<br><br>";
?>
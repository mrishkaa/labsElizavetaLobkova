<?php
require_once 'human.php';

class Employee extends Human
{
	private $position;
	private $hireYear;
	private $teachingExperience;
	private $salary;

	public function __construct($name, $age, $gender, $position, $hireYear, $teachingExperience, $salary)
	{
		parent::__construct($name, $age, $gender);
		$this->position = $position;
		$this->hireYear = $hireYear;
		$this->teachingExperience = $teachingExperience;
		$this->salary = $salary;
	}

	public function getInfo()
	{
		return "Сотрудник: {$this->name}, возраст сотрудника: {$this->age}, пол сотрудника: {$this->gender}, должность сотрудника: {$this->position}, год начала работы: {$this->hireYear}, педагогический стаж: {$this->teachingExperience} лет, зарплата сотрудника: {$this->salary}";
	}
	public function changeSal($newSalary)
	{
		$this->salary = $newSalary;
	}
	public function changePos($newPosition)
	{
		$this->position = $newPosition;
	}


}
?>
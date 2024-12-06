<?php

require_once 'human.php';

class Student extends Human
{
	public $groupNum;
	public $enrollYear;
	public $groupPos;

	public function __construct($name, $age, $gender, $groupNum, $enrollYear, $groupPos)
	{
		parent::__construct($name, $age, $gender);
		$this->groupNum = $groupNum;
		$this->enrollYear = $enrollYear;
		$this->groupPos = $groupPos;
	}
	// Вывод полной информации
	public function getInfo()
	{
		return "Имя студента: {$this->name}, возраст студента: {$this->age}, пол студента: {$this->gender}, группа студента: {$this->groupNum}, год поступления: {$this->enrollYear}, должность в группе: {$this->groupPos}";
	}
	//  Смена позиции в группе
	public function changePos($newGroupPosition)
	{
		$this->groupPos = $newGroupPosition;
	}
	// Смена группы
	public function changeGr($newGroupNumber)
	{
		$this->groupNum = $newGroupNumber;
	}
}


?>
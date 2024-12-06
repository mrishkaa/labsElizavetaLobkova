<?php
$contect = file_get_contents("our.txt");
$array = explode(".", $contect);

$Irina = explode(",", $array[0]);
$Nastya = explode(",", $array[1]);

$file = fopen("result.txt", "r+");

function getAge($array)
{
	return $array[2];
}

$IrinaAge = getAge($Irina);
$NastyaAge = getAge($Nastya);

function getHair($array)
{
	return $array[3];
}

$IrinaHair = getHair($Irina);
$NastyaHair = getHair($Nastya);

function getEye($array)
{
	return $array[4];
}

$IrinaEye = getEye($Irina);
$NastyaEye = getEye($Nastya);

if ($IrinaAge > $NastyaAge) {
	fwrite($file, "Возраст Марины больше, чем у Лены; ");
} else {
	fwrite($file, "Возраст Марины больше, чем у Лены; ");
}

if ($IrinaEye == $NastyaEye) {
	fwrite($file, "У Марины и Лены одинаковый цвет глаз; ");
}

if ($IrinaHair == $NastyaHair) {
	fwrite($file, "У Марины и Лены одинаковый цвет волос; ");
}

$minAge = min($IrinaAge, $NastyaHair);
$maxAge = max($IrinaAge, $NastyaHair);

$YearsNeeds = 0;
for ($i = $minAge; $i < $maxAge; $i++) {
	$YearsNeeds++;
}

fwrite($file, `${YearsNeeds}.`);
fclose($file);

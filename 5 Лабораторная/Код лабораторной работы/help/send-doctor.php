<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=hospital;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$patronymic = $_POST['patronymic'];
		$date = $_POST['date'];
		$document = $_POST['document'];
		$address = $_POST['address'];
		$telephone = $_POST['telephone'];

		$query = $connect->query("INSERT INTO hospital.doctor (name, surname, patronymic, date, document, address, telephone)
		VALUES ('$name', '$surname', '$patronymic', '$date', '$document', '$address', '$telephone')");
	}
	header('Location: ' . "../index.php");
	exit;
}

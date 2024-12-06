<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=hospital;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$description = $_POST['description'];

		$query = $connect->query("INSERT INTO hospital.attach (name, price, date, description)
		VALUES ('$name', '$price', '$date', '$description')");
	}
	header('Location: ' . "../admin/indexadmin.php");
	exit;
}

<?php
session_start();

if ($_SESSION['user']) {
} else {
	header('Location: ../autorize.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
		rel="stylesheet" />
	<title>ГБУЗ / Админ-панель</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="menu">
				<div class="list-menu">
					<a href="../index.php" class="menu-link">Главная</a>
					<a href="../info.php" class="menu-link">Об учреждении</a>
					<a href="../usluga.php" class="menu-link">Платные услуги</a>
					<a href="../vendor/logout.php" class="menu-link-auth">Выйти</a>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="index-form">
			<h3 class="h3-form">
				Добавление новой платной услуги:
			</h3>
			<form action="../help/send-attach.php" class="form-index" id="form" method="post">
				<input class="input-form" type="text" name="name" placeholder="Название услуги" />
				<input class="input-form" type="text" name="price" placeholder="Стоимость услуги" />
				<input class="input-form" type="text" name="date" placeholder="Дата добавления" />
				<textarea class="textarea-form" rows="3" name="description" placeholder="Описание услуги"></textarea>
				<button class="button-form" name="send" type="submit">
					Отправить
				</button>
			</form>
		</div>
		<div class="tables">
			<h3 class="h3-form">
				Поданные обращения в больницу:
			</h3>
			<?php
			$conn = new mysqli("localhost", "root", "", "hospital");

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id, name, surname, patronymic, date, document, address, telephone FROM hospital.doctor";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo '<table class="table">';
				echo '<thead class="table-users__thead"><tr><th>id</th><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Дата рождения</th><th>Номер СНИЛСа</th><th>Адрес проживания</th><th>Номер телефона</th><th>Действие</th></thead>';
				echo '<tbody>';

				while ($row = $result->fetch_assoc()) {
					echo '<tr>';
					echo '<td>' . $row['id'] . '</td>';
					echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . $row['surname'] . '</td>';
					echo '<td>' . $row['patronymic'] . '</td>';
					echo '<td>' . $row['date'] . '</td>';
					echo '<td>' . $row['document'] . '</td>';
					echo '<td>' . $row['address'] . '</td>';
					echo '<td>' . $row['telephone'] . '</td>';
					echo '<td>' . "<form class='form-delete' action='../help/delete.php' method='post'>
						<input type='hidden' name='id' value='" . $row["id"] . "' />
						<input class='input-delete' type='submit' value='Удалить'>
				</form>" . '</td>';
					echo '</tr>';
				}
				echo '</tbody></table>';
			} else {
				echo "0 результатов";
			}
			$conn->close();
			?>
		</div>
	</div>
</body>

</html>
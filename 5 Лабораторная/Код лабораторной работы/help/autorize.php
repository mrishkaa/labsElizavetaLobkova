<?php
session_start();
$user;
if ($_SESSION['user']) {
	header('Location: ../admin/indexadmin.php');
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
	<title>ГБУЗ / Об учреждении</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="menu">
				<div class="list-menu">
					<a href="../index.php" class="menu-link">Главная</a>
					<a href="../info.php" class="menu-link">Об учреждении</a>
					<a href="../usluga.php" class="menu-link">Платные услуги</a>
					<a href="./help/autorize.php" class="menu-link-auth">Авторизация</a>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="form-auth">
			<form class="form-signin" action="../vendor/signin.php" method="post">
				<h2 class="form-signin-heading">Страница авторизации</h2>
				<input type="text" class="form-control" name="login" placeholder="Введите Логин" required="" autofocus="" />
				<input type="password" class="form-control" name="password" placeholder="Введите Пароль" required="" />
				<button class="button-form" type="submit">Войти</button>
				<!-- <?php
				if ($_SESSION['message']) {
					echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']);
				?> -->
			</form>
		</div>
	</div>
</body>

</html>
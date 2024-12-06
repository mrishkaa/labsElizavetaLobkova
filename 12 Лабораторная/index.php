<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
		rel="stylesheet" />
	<title>ГБУЗ / Главная</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="menu">
				<div class="list-menu">
					<a href="index.php" class="menu-link">Главная</a>
					<a href="info.php" class="menu-link">Об учреждении</a>
					<a href="usluga.php" class="menu-link">Платные услуги</a>
					<a href="./help/autorize.php" class="menu-link-auth">Авторизация</a>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="main-block">
			<h3 class="h3-glav h3-align">
				ГБУЗ «Городская поликлиника» — одно из старейших
				лечебно-профилактических учреждений города, оказывающее
				лечебно-диагностическую, профилактическую и консультативную помощь
				жителям г. Пензы. Прием пациентов ведется по более чем 20
				специальностям.
			</h3>
			<img src="./images/1.jpg" class="img-glav" />
		</div>
		<div class="block-glav">
			<h4 class="h4-glav h4-struct">Структура больницы:</h4>
			<div class="block-glav-right">
				<p>Дневной стационар — 465 коек</p>
				<p>Стационар на дому — 35 коек</p>
				<p>13 поликлиник</p>
				<p>24 амбулатории врача общей практики</p>
				<p>2 филиала («Консультативно — диагностическая поликлиника»)</p>
			</div>
			<div class="block-p">
				<h4 class="p-glav">
					С целью обеспечения доступности медицинской помощи лицам с
					ограниченными возможностями все корпуса больницы оборудованы
					пандусами, при этажности зданий выше 2-х есть возможность подняться
					на любой этаж на лифте.
				</h4>
				<h4 class="p-glav">
					Грамотный, работоспособный коллектив имеет в своем составе трех
					заслуженных врачей РФ, двух кандидатов наук, восемь отличников
					здравоохранения.
				</h4>
			</div>
		</div>
		<div class="block-vrach">
			<h4 class="p-glav-vrach">Главный врач</h4>
			<p class="p-vrach">Марков Владимир Валентинович</p>
			<img src="./images/2.jpg" class="img-vrach" />
			<p class="p-vrach">Врач высшей категории Кандидат медицинских наук</p>
		</div>
		<div class="index-form">
			<h3 class="h3-form">
				Заинтересовались нашей больницей? Запишитесь к нам на приём
			</h3>
			<form action="./help/send-doctor.php" class="form-index" id="form" method="post">
				<input class="input-form" type="text" name="name" placeholder="Имя" />
				<div class="error-message">Заполните поле</div>
				<input class="input-form" type="text" name="surname" placeholder="Фамилия" />
				<div class="error-message">Заполните поле</div>
				<input class="input-form" type="text" name="patronymic" placeholder="Отчество" />
				<div class="error-message">Заполните поле</div>
				<input class="input-form" type="text" name="date" placeholder="Дата рождения" />
				<div class="error-message">Заполните поле</div>
				<input class="input-form" type="text" name="document" placeholder="Номер СНИЛСа" />
				<div class="error-message">Заполните поле</div>
				<input class="input-form" type="text" name="address" placeholder="Место проживания" />
				<div class="error-message">Заполните поле</div>
				<input class="input-form" type="tel" name="telephone" placeholder="Номер телефона" />
				<div class="error-message">Заполните поле</div>
				<button class="button-form" name="send" type="submit">
					Отправить
				</button>
			</form>
		</div>
	</div>
	<script src="main.js"></script>
</body>

</html>
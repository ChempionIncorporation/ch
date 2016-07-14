<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
 <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css-styles/champ.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css-styles/body.css">
	<script src="../../assets/js/menu.js"></script>
    <title>РА Чемпион</title>
   <!-- <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="img/favicon.ico">-->
</head>
<body>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/pages/services/header.php");
$category = "portfolio";
//mysql_query("INSERT INTO reviews_U_1254(name,reviews,date) VALUES('coc','coc',now())") or die(mysql_error());
?>
<div id="content">
<h1>Вакансии</h1>
	<div id="vocation">
		<div class="one-vac d-1">
			<h4>Дизайнер</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

		<div class="one-vac d-2">
			<h4>Менеджер</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

		<div class="one-vac d-3">
			<h4>Супервайзер</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

		<div class="one-vac d-4">
			<h4>Промоутер</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

		<div class="one-vac d-5">
			<h4>Расклейщик</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

		<div class="one-vac d-6">
			<h4>Монтажник</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

		<div class="one-vac d-7">
			<h4>Программист</h4>
			<h5>Требования</h5>
			<div class="desc-voc">
				
			</div>
			<div class="form-voc">
				<form action="" method="post">
					<input name="" class="inpt-voc" placeholder="Имя" required="true">
					<input name="" class="inpt-voc" placeholder="Номер телефона" required="true">
					<input name="" class="inpt-voc" placeholder="Почта" required="true">
					<textarea placeholder="О себе" required="true"></textarea>
					<input type="submit" value="Оставить заявку">
				</form>
			</div>
		</div>

	</div>
</div>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
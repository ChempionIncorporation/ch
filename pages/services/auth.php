<?session_start();?>
	<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
		<link rel="shortcut icon" href="/img/favicon.png" type="image/png">

		<title>АВТОРИЗАЦИЯ</title>
	</head>
	<body>

	<?
	include('header.php');
	$_SESSION['login'] = $_SESSION['name'] = $_SESSION['password'] = $_SESSION['key'] = null;
	?>
	<script type="text/javascript">
		var reformalOptions = {
			project_id: 973649,
			project_host: "champion.reformal.ru",
			tab_orientation: "none",
			tab_border_width: 0
		};
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.async = true;
		document.getElementsByTagName('body')[0].appendChild(script);
		script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'media.reformal.ru/widgets/v3/reformal.js';
	</script>
	<?
	if (!empty($_POST['login']) && isset($_POST['psw'])) {
		require_once("/profile/modules/functions.php");
		print "<meta http-equiv='refresh' content='0; url=" . $_SERVER['document_root'] . "/pages/services/profile/index.php?id=" . getAccount($_POST['login'], $_POST['psw']) . "'>";
		//print "<script> alert('".$_SESSION['gleb'].$_SESSION['login']."');</script>";

	}
	?>
	<form action="/pages/services/profile/authme.php" method="get">
		<div class="container" style="margin-top: 0px;">
			<div class="row center-xs" style="margin:8%">
				<div class="span12">
					<h1>Вход в систему</h1>
					<div class="row">
						<div class="span6" style="border-right: 1px solid silver">
							<h2>Авторизация</h2>
							<div class="row center-xs" style="margin-top:50px;">
								<div class="col-xs-12">
									<br/>
									<br/>
									<br/>
									<input type="text" name="ent_login" style="height:30px;width:300px"
										   placeholder="Логин" required>
									<hr style="border-radius: 110px; width: 400px">
									<input type="password" name="ent_pass" style="height:30px;width:300px"
										   placeholder="Пароль" required>
									<br/>
									<button class="btn btn-large btn-primary" type="submit" style="margin-top:10px">
										Авторизоваться
									</button>
								</div>
							</div> <!--!, $, #, %-->
						</div>

						<script type="text/javascript">
							var prov = null;
							function validateLogin(input) {
								if (input.value.length < 5) {
									input.setCustomValidity("Логин должен быть больше 5 символов.");
								}
								else if (input.value.indexOf('.') != -1 || input.value.indexOf('!') != -1 || input.value.indexOf('@') != -1 || input.value.indexOf('#') != -1 || input.value.indexOf('$') != -1 || input.value.indexOf('^') != -1 || input.value.indexOf('&') != -1 || input.value.indexOf('?') != -1 || input.value.indexOf('-') != -1 || input.value.indexOf('+') != -1 || input.value.indexOf('=') != -1 || input.value.indexOf(';') != -1 || input.value.indexOf(':') != -1 || input.value.indexOf('.') != -1 || input.value.indexOf(', ') != -1 || input.value.indexOf('|') != -1 || input.value.indexOf('~') != -1 || input.value.indexOf('`') != -1 || input.value.indexOf('<') != -1 || input.value.indexOf('>') != -1 || input.value.indexOf('\'') != -1 || input.value.indexOf('\"') != -1 || input.value.indexOf(' ') != -1 || input.value.indexOf(')') != -1 || input.value.indexOf('(') != -1) {
									input.setCustomValidity("Пароль не может содержать специальные символы !@#$^&.");
								}
								else {
									input.setCustomValidity("");
								}
							}
							function validatePassword1(input) {
								prov = input.value;
								if (input.value.length < 5) {
									input.setCustomValidity("Пароль должен быть больше 5 символов.");
								}
								else
									input.setCustomValidity("");
							}
							function validatePassword2(input) {
								if (input.value.length < 5) {
									input.setCustomValidity("Пароль должен быть больше 5 символов.");
								}
								else if (input.value != prov) {
									input.setCustomValidity("Парололи не совпадают!");
								}
								else
									input.setCustomValidity("");
							}
						</script>
	</form>
	<form action="/pages/services/profile/authme.php" id="regForm" method="get">
		<div class="span2">
			<h2>Регистрация</h2>
			<div class="row center-xs" style="width:400px;margin-top:50px; ">
				<div class="col-xs">
					Введите свой логин:
					<a href="#" data-toggle="tooltip" data-placement="right" title="Латинские буквы и цифры">
						<input type="text" name="reg_login" oninput="validateLogin(this)"
							   style="height:30px;width:250px" placeholder="Логин" required>
					</a><br/>
					Введите свой пароль:
					<a href="#" data-toggle="tooltip" data-placement="right" title="Должен быть больше 5 символов">
						<input type="password" name="reg_pass" oninput="validatePassword1(this)"
							   style="height:30px;width:250px" placeholder="Пароль" required>
					</a><br/>
					Подтвердите свой пароль:
					<a href="#" data-toggle="tooltip" data-placement="right" title="Пароли должны совпадать">
						<input type="password" name="ins_pass" oninput="validatePassword2(this)"
							   style="height:30px;width:250px" placeholder="Подтверждение пароля" required>
					</a><br/>
					Введите номер телефона:
					<br/>
					+38<input type="text" id="phone" name="reg_phone" oninput="validatePhone(this)"
							  style="height:30px;width:150px" placeholder="xxx-хх-хх-ххх" maxlength="10" required>
					<br/>
					Введите свою почту:
					<a href="#" data-toggle="tooltip" data-placement="right" title="Латинские буквы и цифры">
						<input type="text" name="reg_email" style="height:30px;width:250px" placeholder="Почта"
							   required>
					</a><br/>
					Введите ФИО:<br>
					<a href="#" data-toggle="tooltip" data-placement="right" title="Русские буквы">
						<input type="text" name="reg_fio" style="height:30px;width:300px" placeholder="ФИО"
							   required>
					</a><br/>
					<script>
						$(document).ready(function () {
							$('[data-toggle="tooltip"]').tooltip();
						});
					</script>
					<br/>
					<button type="submit" class="btn btn-large btn-primary" style="margin-top:10px">Зарегестрироваться
					</button>
				</div>
			</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</form>
	</body>
<?php 
//require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");maxlength="10"
?>
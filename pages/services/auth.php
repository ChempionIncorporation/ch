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
							function validatePhone(input) {
								var mas = "abcdefghigklmnopqrstuvwxyz/.\\|'\"!@#$%^&*()_+-=?:;~`";
								var c = 0;
								for (var i = 0; i < input.value.length; i++) {
									for (var j = 0; j < mas.length; j++) {
										if (mas[j] == input.value[i])
											c++;//asdasdasdasd
									}
								}
								if (input.value.length < 10) {
									input.setCustomValidity("Номер должен состоять из 10 цифр.");
								}
								else if (c > 0) {
									input.setCustomValidity("Номер должен состоять из цифр.");
								}
								else
									input.setCustomValidity("");
							}
							function validateMail(input) {
								var mas = "/.\\|'\"!@#$% ^&*()_+-=?:;~`";
								var c = 0;
								var sb = 0;
								var tb = 0;
								var sp = 0;
								var tp = 0;
								var temp = 0;
								var len = input.value.length;
								for (var i = 0; i < mas.length; i++)
									if (mas[i] == input.value[0] || mas[i] == input.value[len - 1])
										c++;
								for (var i = 0; i < input.value.length; i++) {
									if (input.value[i] == '@')
										sb++;
									if (input.value[i] == '.')
										tb++;
								}
								for (var i = 0; i < len; i++) {
									if (input.value.indexOf('@') != -1) {
										temp = input.value.indexOf('@');
										if (input.value[temp + 1] == '.' || input.value[temp - 1] == '.')
											tp++;
									}
								}
								if (tp > 1)
									input.setCustomValidity("Сразу после '@' или '.' не может стоять ещё '@' или '.'");
								else if (sb > 1 || tb > 1 || sb == 0 || tb == 0)
									input.setCustomValidity("E-mail должен содержать только один символ '@' и '.'");
								else if (c > 0)
									input.setCustomValidity("E-mail не может начинатся или заканчиваться специальным символом .!@#$^&,");
								else
									input.setCustomValidity("");
							}
							function validateFIO(input) {
								var mas = "abcdefghigklmnopqrstuvwxyz/.\\|'\"!@#$%^&*()_+-=?:;~`1234567890";
								var c = 0;
								var k = 0;
								for (var i = 0; i < input.value.length; i++) {
									for (var j = 0; j < mas.length; j++) {
										if (mas[j] == input.value[i])
											c++;
									}
								}
								for (var i = 0; i < input.value.length; i++) {
									if (input.value[i] == ' ')
										k++;
								}
								input.setCustomValidity(k);
								if (c > 0) {
									input.setCustomValidity("ФИО не может содержать цифры, спец. символы и буквы латинского алфавита.");
								}
								else if (k != 2) {
									input.setCustomValidity("Это поле должно содержать Фамилию, Имя и Отчество.");
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
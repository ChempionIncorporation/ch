<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
 <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css-styles/champ.css" />
	<script src="../../js/menu.js"></script>
    <title>РА Чемпион</title>
   <!-- <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="img/favicon.ico">-->
</head>
<body><?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/menu_top.php");
$category = "portfolio";
?>
<div id="content">
<h1>Контакты</h1>
<div class="contactForm">
	<h2>ООО "ЧЕМПИОН-ГРУПП"</h2>
	<table style="width: 100%">
		<tr><td colspan="2"><img src="../../img/contacts/point.png" /><b>г. Одесса, ул. Новосельского, 5/3</b></td></tr>
		<tr><td><img src="../../img/contacts/phone.png"><b>Телефоны: </b></td><td>(048) 795-68-03<br />(048) 736-26-49<br />(093) 946-14-95<br />(095) 862-61-64<br />(096) 321-58-11</td></tr>
		<tr><td colspan="2"><img src="../../img/contacts/clock.png"><b>Время работы: </b>с 10:00 до 18:00</td></tr>
		<tr><td colspan="2"><img src="../../img/contacts/mail.png"><b>E-mail: </b>7362649@ukr.net</td></tr>
		<tr><td colspan="2"><input type="button" value="ОБРАТНАЯ СВЯЗЬ"></td></tr>
	</table>
</div>
<div class="wrap">
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
</div>
</div>
<div style="width: 100%;height: 100%;background: black;position: absolute;left:0;top: 0;z-index: -1">
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=4d-nAg-2k7shCQKw5WJZ2ihMmZ-Nejlm&width=100%&height=".height.""></script>
</div>
<script type="text/javascript">
	var height=document.body.clientHeight;
	$(document).ready(function(){
        $(".contactForm").animate({opacity: '1'});
	});
	</script>

</div>

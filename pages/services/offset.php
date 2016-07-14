<?session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css-styles/champ.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../../css-styles/champ.css" /> !-->
	<link rel="stylesheet" type="text/css" href="/assets/css-styles/body.css">
	<!-- <link rel="stylesheet" type="text/css" href="../../css-styles/body.css"> -->
	<link rel="stylesheet" type="text/css" href="/assets/css-styles/css-1.css">
	<!-- <link rel="stylesheet" type="text/css" href="../../css-styles/css-1.css"> -->
	<!-- <script src="../../js/menu.js"></script> -->
	<script src="/assets/js/menu.js"></script>
	<title>
		<?php echo $text_object->title ?>
	</title>
	<meta name="keywords" content="<?php echo $text_object->keywords ?>">
	<meta name="description" content="<?php echo $text_object->description ?>">
	<link rel="icon" type="image/ico" href="/img/favicon.ico">
</head>

<body>
	<?php
require_once($_SERVER['DOCUMENT_ROOT']."/pages/services/header.php");
	?>
	<div id="content" style="margin-top:100px;" >
		<?
print "<h1 style='background: none; color:#88212A;font-weight: 900'><center><span>ПРАЙС ОФСЕТНОЙ ПЕЧАТИ</span></center></h1>";
		?>
		<div id="list-menu">
			<?php
echo "
	<a href='/polygraphy' title='Полиграфия'><span class='list-top-menu-icon poligraf-top ".$btn_1."'>Полиграфия</span></a>
	<a href='/suveniry' title='Сувениры'><span class='list-top-menu-icon suvenir-top ".$btn_2."'>Сувениры</span></a>
	<a href='/sayty' title='WEB - дизайн'><span class='list-top-menu-icon web-top ".$btn_3."'>Веб-Дизайн</span></a>
	<a href='/naruzhnaya_reklama' title='Наружная реклама'><span class='list-top-menu-icon naruz-top ".$btn_4."'>Наружная реклама</span></a>
	<a href='/promo_aktsii' title='Промо акции'><span class='list-top-menu-icon promo-top ".$btn_5."'>Промо акции</span></a>
	<a href='/transport' title='Реклама на транспорте'><span class='list-top-menu-icon transport-top ".$btn_6."'>Реклама на транспорте</span></a>
	<a href='/media_reklama' title='Медиа реклама'><span class='list-top-menu-icon media-top ".$btn_7."'>Медиа реклама</span></a>
	<a href='/dizayn' title='Дизайн'><span class='list-top-menu-icon design-top ".$btn_8."'>Дизайн</span></a>
	<a href='/nestandartnaya_reklama' title='Нестандартная реклама'><span class='list-top-menu-icon not-top ".$btn_9."'>Нестандартная реклама</span></a>
";
			?>
		</div>
		<?
			include('offset/index.php');
		?>
	</div>

</body>

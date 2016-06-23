<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
 <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css-styles/champ.css" />
	<link rel="stylesheet" type="text/css" href="../../css-styles/body.css">
	<script src="../../js/menu.js"></script>
    <title>РА Чемпион</title>
   <!-- <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="img/favicon.ico">-->
</head>
<body>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/modules/menu_top.php");
$category = "portfolio";
//mysql_query("INSERT INTO reviews_U_1254(name,reviews,date) VALUES('coc','coc',now())") or die(mysql_error());
?>
<div id="content">
<h1>Отзывы</h1>

	<div class="reviews" style='height:700px;'>
		<iframe style="width: 100%; height: 100%; border: 0;" frameborder="0" src="http://reformal.ru/widget/973649"></iframe>
	</div>
</div>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
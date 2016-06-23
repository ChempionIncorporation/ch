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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="/img/favicon.ico">
</head>
<body>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/modules/menu_top.php");
$category = "portfolio";
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
/*mysql_query("INSERT INTO clients_U_1257(src,alt,title) VALUES('1.jpg','Обжора','Обжора')");
mysql_query("INSERT INTO clients_U_1257(src,alt,title) VALUES('2.jpg','Метро','Метро')");
mysql_query("INSERT INTO clients_U_1257(src,alt,title) VALUES('3.jpg','Сильпо','Сильпо')");
mysql_query("INSERT INTO clients_U_1257(src,alt,title) VALUES('4.jpg','Comfy','Comfy')");
mysql_query("INSERT INTO clients_U_1257(src,alt,title) VALUES('5.jpg','Торговый дом Копейка','Торговый дом Копейка')");*/
?>
<div id="content">
	<div id="content-left_menu-clie" class="center">
		<?php
			$per=0;
			$sql = mysql_query("SELECT * FROM clients");
			while($cool = mysql_fetch_array($sql)) {
				echo "
							<img src='/img/clients/logotype/" . $cool['src'] . "' alt='" . $cool->alt . "' title='" . $cool->title . "' >
							";
			}
		?>

	</div>
</div>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
</body>
</html>
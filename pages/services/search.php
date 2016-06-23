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
<h1>Результаты поиска</h1>
	<div id="search-div">
	<?php
	if($_GET['url']==''){
	?>
	<h2><i>Вот, что мне удалось найти по запросу "<?php echo "<b>".$_POST['search']."</b>" ?>"</i></h2>
	<form action="/search" method="post">
		&emsp;<input name="search">
		<input type="submit" value="Найти">
	</form>

		<?php
		require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
			mysql_query("SET NAMES utf8");
			$sql = mysql_query("SELECT * FROM text_U_1253 WHERE text LIKE \"%".$_POST['search']."%\"") or die(mysql_error());
			$i=1;
			while($obj = mysql_fetch_object($sql)){
				echo "&emsp;".$i.". <a href=\"/search/".$obj->url."\">".$obj->title."</a><br />";
				$i++;
			}
		}else{
			mysql_query("SET NAMES utf8");
			
			$sql = mysql_query("SELECT * FROM text_U_1253 WHERE url='".$_GET['url']."'");
			$obj = mysql_fetch_object($sql);
			echo "<div id=\"left_menu\"><form action=\"/search\" method=\"post\">
		<input name=\"search\">
		<input type=\"submit\" value=\"Найти\">
	</form></div>";
			echo "<div id=\"content-left_menu\">".$obj->text."</div>";
		}
		?>
	</div>
</div>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
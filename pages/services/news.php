<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/modules/menu_top.php");
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
if(isset($_GET['link'])){
$link = $_GET['link'];
mysql_query("SET NAMES utf8");
$sql = mysql_query("SELECT * FROM news_U_1255 WHERE url='".$link."'") or die(mysql_error());
$arr = mysql_fetch_object($sql);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
 <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css-styles/champ.css" />
	<script src="/js/menu.js"></script>
    <title>Новости</title>
   <!-- <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="img/favicon.ico">-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css-styles/champ.css" />
	<link rel="stylesheet" type="text/css" href="/css-styles/body.css">
	<link rel="stylesheet" type="text/css" href="/css-styles/css-1.css">
	<script src="/js/menu.js"></script>
</head>
<body>

<div id="content">
<?php if(isset($_GET['link'])){?>
<h1><?php echo $arr->title; ?></h1>
	<div class="news-con">
	<?php
	echo $arr->text;
	?>
	</div></div>

<?php }else{ ?>
<h1>Новости</h1>
	<div class="news-con">
	<?php
		mysql_query("SET NAMES utf8");
		$sql = mysql_query("SELECT * FROM news_U_1255") or die(mysql_error());
		while($arr = mysql_fetch_object($sql)){
			echo "<div class='news-one-m'><span class='nom-1'>".$arr->title."</span><br /><span class='nom-2'>".$arr->desc."<br /><a class='nom-3-a' href='".$arr->link."'>Подробнее</a></span></div>";
		}
	?>
	</div>
	</div>
	</body>
<?php } ?>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
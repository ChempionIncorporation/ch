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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="/img/favicon.ico">
</head>
<body>
<?php
$url_get = $_GET['url'];

function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

$a = getUrl();
$a = str_replace("http://", "", $a);
$a_n = strpos($a,"/");

$a_fin = substr($a,$a_n);
echo $a_fin;


require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/modules/menu_top.php");
//echo $_GET['url'];
//mysql_query("INSERT INTO portfolio_U_1256(razdel,podrazdel,name,img) VALUES('polygraphy','vizitki','РА Chempion','1.jpg,1.jpg') ") or die(mysql_error());
?>
<div id="content">
<h1>Портфолио</h1>
<?php 

?>
<div id="left_menu">
<h3>ПОДРАЗДЕЛЫ</h3>
<ul>
<?php
if(!empty($_GET['idp'])){
	$sql_con = mysql_query("SELECT * FROM portfolio_U_1256 WHERE id=".$_GET['idp']."") or die(mysql_error());
	$obj_d = mysql_fetch_object($sql_con);

	$url_get = $obj_d->razdel;
}

if($url_get=='polygraphy'){
echo "
<li><a href='/portfolio/polygraphy/vizitka'>Визитки</a></li>
<li><a href='/portfolio/polygraphy/flaer'>Флаера</a></li>
<li><a href='/portfolio/polygraphy/listovki'>Листовки</a></li>
<li><a href='/portfolio/polygraphy/buklety'>Буклеты</a></li>
<li><a href='/portfolio/polygraphy/flaer'>Плакаты</a></li>
<li><a href='/portfolio/polygraphy/plakaty'>Проспекты</a></li>
<li><a href='/portfolio/polygraphy/zhurnaly'>Журналы</a></li>
<li><a href='/portfolio/polygraphy/khengery'>Хенгеры</a></li>
<li><a href='/portfolio/polygraphy/kalendari'>Календари</a></li>
<li><a href='/portfolio/polygraphy/'>Каталоги</a></li>
<li><a href='/portfolio/polygraphy/katalogi'>Наклейки</a></li>
<li><a href='/portfolio/polygraphy/blanki'>Бланки</a></li>
<li><a href='/portfolio/polygraphy/bloknoty'>Блокноты</a></li>
<li><a href='/portfolio/polygraphy/diplomy_i_gramoty'>Дипломы, грамоты</a></li>
<li><a href='/portfolio/polygraphy/broshyury'>Брошюры</a></li>
<li><a href='/portfolio/polygraphy/papki'>Папки</a></li>";
}
elseif($url_get=='suveniry'){
	echo " 
 <li><a href=''>На футболках</a></li>
 <li><a href=''>На шарфах</a></li>
 <li><a href=''>На шапках</a></li>
 <li><a href=''>На чашках (кружках)</a></li>
 <li><a href=''>На часах</a></li>
 <li><a href=''>На флагах</a></li>
 <li><a href=''>На флажках</a></li>
 <li><a href=''>На банданах</a></li>
 <li><a href=''>На зажигалках</a></li>
 <li><a href=''>На ароматизаторах</a></li>
 <li><a href=''>На бейджиках</a></li>
 <li><a href=''>На пакетах</a></li>
 <li><a href=''>На бирках</a></li>
 <li><a href=''>На брелках</a></li>
 <li><a href=''>На браслетах</a></li>
 <li><a href=''>На воздушных шариках</a></li>
 <li><a href=''>На вымпелах</a></li>
 <li><a href=''>На дисках</a></li>
 <li><a href=''>На зонтиках</a></li>
 <li><a href=''>На атласных лентах</a></li>";
}
?>
</ul>
</div>
<div id="content-left_menu" class="center">
<h3>Полиграфия</h3>
<?php
if(!empty($_GET['idp'])){

	$sql_con = mysql_query("SELECT * FROM portfolio_U_1256 WHERE id=".$_GET['idp']."") or die(mysql_error());
	$obj_d = mysql_fetch_object($sql_con);
	$img = explode(",", $obj_d->img);
	echo "<div class='show_img_port'>";
	echo "<h2>".$obj_d->name."</h2>";
	foreach ($img as $value) {
		echo "<img src='/img/portfolio/".$obj_d->razdel."/".$value."'>";
	}
	echo "</div>";

}
if($_GET['pod']=='vizitka'){
$sql_con = mysql_query("SELECT * FROM portfolio_U_1256 WHERE razdel='".$url_get."'") or die(mysql_error());
while($obj = mysql_fetch_object($sql_con)){
	$img_arr = explode(",",$obj->img);
	echo "
	<div class='portfolioOne'>
<img src='../../img/portfolio/polygraphy/".$img_arr[0]."' />
<span>
	<h2>".$obj->name."</h2>
	<a href='/portfolio/details/".$obj->id."'>Подробнее</a>
</span>
</div>";echo "
	<div class='portfolioOne'>
<img src='../../img/portfolio/polygraphy/".$img_arr[0]."' />
<span>
	<h2>".$obj->name."</h2>
	<a href=''>Подробнее</a>
</span>
</div>";
}
}
?>
</div>
</div>
</div>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
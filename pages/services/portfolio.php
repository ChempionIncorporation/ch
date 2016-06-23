<!DOCTYPE html>
<head>
    <meta charset="utf-8">
 <!--    <meta name="viewport" content="width=device-width, initial-scale=3.0, maximum-scale=3.0, user-scalable=no"> -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.33.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css-styles/champ.css" />
	<link rel="stylesheet" type="text/css" href="../../css-styles/body.css">
	<script src="../../js/menu.js"></script>
    <title>РА Чемпион</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="/img/favicon.ico">
</head>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/modules/menu_top.php");
$category = "portfolio";
?>
<div id="content">


	<div id="left_menu">
<h3>Разделы</h3>
		<div id="wrapper">
			<ul class="accordion">

<?php
$result = mysql_query("SELECT * FROM p_images");
$myrow = mysql_fetch_array($result);
do
{
	$i= 0;
	print 	"<li class='mail'>
				<a href='#' class=''>".$myrow['section']."</a>
				<ul class='sub-menu' style='display: none; '>
			";
					$r = mysql_query("SELECT * FROM p_images where id=".$myrow['id']);
					$m3= mysql_fetch_array($r);
					do{
						$i++;
						print "<li class=''><a href='#'><em>".$i.") </em>".$m3['sub-section']."</a></li>";
					}while ($m3= mysql_fetch_array($r));

	print 	"	</ul>
			</li>";
}while ($myrow = mysql_fetch_array ($result));
?>

			</ul>
		</div>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var accordion_head = $('.accordion > li > a'),
						accordion_body = $('.accordion li > .sub-menu');
				accordion_head.first().addClass('active').next().slideDown('normal');
				accordion_head.on('click', function(event) {
					event.preventDefault();
					if ($(this).attr('class') != 'active'){
						accordion_body.slideUp('normal');
						$(this).next().stop(true,true).slideToggle('normal');
						accordion_head.removeClass('active');
						$(this).addClass('active');
					}
				});
			});
		</script>




		<ul>
<!--
	<li><a href='/portfolio/polygraphy/'>Полиграфия</a></li>
	<li><a href='/portfolio/suveniry/'>Сувениры</a></li>
	<li><a href='/portfolio/sayty/'>WEB студия</a></li>
	<li><a href='/portfolio/naruzhnaya_reklama/'>Наружная реклама</a></li>
	<li><a href='/portfolio/promo_aktsii/'>Промо - акции</a></li>
	<li><a href='/portfolio/transport/'>Транспорт</a></li>
	<li><a href='/portfolio/media_reklama/'>Медиа реклама</a></li>
	<li><a href='/portfolio/dizayn/'>Дизайн</a></li>
	<li><a href='/portfolio/nestandartnaya_reklama/'>Нестандартная реклама</a></li>
!-->
</div>
<div id="content-left_menu" class="center">
<h3>Портфолио</h3>
<?
$rez = mysql_query("SELECT * FROM p_images");
while($r = mysql_fetch_array($rez)){
	//print "<script> alert('".$r['id']."');</script>";
$i++;
	print 	"<div class='portfolioOne'>";

				echo "<img style='border-radius: ".rand(0, 60)."% ".rand(0, 60)."px ".rand(0, 60)."% ".rand(0, 60)."px;' height='150px' width='250px' src='".$_SERVER['document_root']."/img/portfolio/".$r['id'].".jpg' />
				</div>
			";
}
?>
</div>
</div>
</div>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>
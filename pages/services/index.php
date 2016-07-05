<?session_start();?>
<!DOCTYPE html>
<? include("header.php"); ?>
<?php
$url = $_GET['url'];
//echo "<span style='color: #ffffff;font-size: 2rem'>".$url."</span>";
//echo "<span style='color: #ffffff'>".$_GET['under']."</span>";
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
$textLong = '
<span class="coc"><img src="../../img/viz.jpg"></span><span class="coc"><img src="../../img/viz.jpg"></span>
<p>Рекламное агентство «Чемпион» предлагает печать визиток в Одессе. Старая поговорка о том, что по одежке встречают, подтверждена не одним поколением. Впечатление о любом человеке начинает складываться с первых мгновений знакомства. Костюм, рукопожатие, первая фраза. И визитка. Конечно она! Сегодня многим необходима печать визиток в Одессе. Ведь без них сегодня не может обойтись ни одно мероприятие, ни одна деловая встреча.</p>

<p>Печать визиток в Одессе у рекламного агентства «Чемпион» позволит вам сэкономить и время и деньги. Если у вас нет макета или вы хотите его изменить – наши дизайнеры с удовольствием вам помогут! Макет визитки будет разработан по всем вашим требованиям и пожеланиям. Что поможет вам добиться уникальности и подчеркнуть ваш стиль.</p>

<p>Для многих визитка является не только показателем индивидуальности и стиля, но и способом рекламы. В таких случаях мы готовы организовать распространение ваших визиток, будь то раздача прохожим, водителям, размещение под дворники прочее.</p>

<p>Визитки, как и любая типография рекламного агентства «Чемпион» может быть доставлена непосредственно вам в офис, что позволит вам еще больше сэкономить время, которого, зачастую, и так не хватает.</p>

<p>Чтобы заказать печать визиток в Одессе, достаточно просто позвонить.</p>
<div id="buttons_content">
<!---<span class="button"><img src="../../img/price.jpg"></span>
<span class="button"><img src="../../img/portfolio.jpg"></span>-->
<span><a href="/">СКАЧАТЬ ПРАЙС<img src="../../img/pdf.png" /></a></span>
<span><a href="/">ПОРТФОЛИО<img src="../../img/pdf.png" /></a></span>
</div>
';
//mysql_query("INSERT INTO text_U_1253(category,description,keywords,text,title,url) VALUES('polygraphy','Полиграфия туда сюда','полиграфия,визитки,туда сюда','".$textLong."','Полиграфия','polygraphy')");
mysql_query("SET NAMES utf8");
if(isset($_GET['url'])) {
	$text = mysql_query("SELECT * FROM text_U_1253 WHERE url='".$url."'");
}
else
	$text = mysql_query("SELECT * FROM text_U_1253");

$text_object = mysql_fetch_object($text);
$category = $text_object->category;

$title_1 = "orange-c";


switch($text_object->category){
	case'polygraphy': // 1
		$id = 0;
		$btn_1	=	'ggty1';
		$title_1 = 'poligraf-f';
		$b[0] = "#046836";
		break;
	case'suveniry': // 2
		$id = 1;
		$btn_2='ggty2';
		$title_2 = 'suvenirs-f';
		$b[1]= "#ded905";
		break;
	case'sayty': // 3
		$id = 2;
		$btn_3='ggty3';
		$title_3 = 'web-top-f';
		$b[2]= "#136b98";
		break;
	case'naruzhnaya_reklama': // 4
		$id = 3;
		$btn_4='ggty4';
		$title_4 = 'naruz-top-f';
		$b[3]= "#53105D";
		break;
	case'promo_aktsii': // 5
		$id = 4;
		$btn_5='ggty5';
		$title_5 = 'promo-top-f';
		$b[4]= "#F69059";
		break;
	case'transport': // 1
		$id = 5;
		$btn_6='ggty6';
		$title_6 = 'transport-top-f';
		$b[5]= "#005c26";
		break;
	case'media_reklama': // 1
		$id = 6;
		$btn_7='ggty7';
		$title_7 = 'media-top-f';
		$b[6]= "#126A98";
		break;
	case'dizayn': // 1
		$id = 7;
		$btn_8='ggty8';
		$title_8 = 'design-top-f';
		$b[7]= "#D6659D";
		break;
	case'nestandartnaya_reklama': // 1
		$id = 8;
		$btn_9='ggty9';
		$title_9 = 'not-top-f';
		$b[8]= "#33CC33";
		break;
}

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
//echo $a_fin;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css-styles/champ.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../../css-styles/champ.css" /> !-->
	<link rel="stylesheet" type="text/css" href="/css-styles/body.css">
	<!-- <link rel="stylesheet" type="text/css" href="../../css-styles/body.css"> -->

	<link rel="stylesheet" type="text/css" href="/css-styles/css-1.css">
	<!-- <link rel="stylesheet" type="text/css" href="../../css-styles/css-1.css"> -->
	<!-- <script src="../../js/menu.js"></script> -->
	<script src="/js/menu.js"></script>
	<title>
		<?php echo $text_object->title ?>
	</title>
	<meta name="keywords" content="<?php echo $text_object->keywords ?>">
	<meta name="description" content="<?php echo $text_object->description ?>">
	<link rel="icon" type="image/ico" href="/img/favicon.ico">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../assets/css/flexboxgrid.css"> <!-- Blocks !-->
	<link rel="stylesheet" href="../../assets/css/bootstrap-theme.min.css"><!-- Fraem !-->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css"><!-- Fraem !-->
	<link rel="stylesheet" href="../../assets/css/ekko-lightbox.min.css"><!-- Library !-->

	<link rel='stylesheet' href="../../assets/css/ChempStyle.css">
	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/jquery.mosaicflow.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
</head>

<body style="background: #eee">

<div id="list-menu" style="margin-top:0px">
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
	<?php
	if( ( $_GET['under']!=$_GET['url'] OR $_GET['under']==$_GET['url'] ) && $_GET['under']!='' && $_GET['url']!='') {
		echo "<div id=\"list-menu-under\" style='background-color: ".$b[$id].";'>";
		$sql_under_menu = mysql_query("SELECT * FROM menu WHERE category='".$_GET['cat']."' AND under_category=''");
		while ($obj_under_menu = mysql_fetch_object($sql_under_menu)) {
			if($_SERVER["REQUEST_URI"]==$obj_under_menu->link)
				echo "<a href=\"".$obj_under_menu->link."\" class=\"active-under-menu\">".$obj_under_menu->name."</a>";
			else
				echo "<a href=\"".$obj_under_menu->link."\" class=\"noactive-under-menu\">".$obj_under_menu->name."</a>";
		}
		echo "</div>";
	}
	?>
	<?php
	include_once '../../modules/menu_left.php';
	if(empty($_SESSION['i'])){
		$i = $_SESSION['i'] = 0;
		$_SESSION['uri'] = "";
	}
//	Счетчик
	$i = $_SESSION['i'];
	$i++;
	$_SESSION['i'] = $i;
//
	$_SESSION['uri'] = $_SESSION['uri']."|".$_SERVER[REQUEST_URI];
	$u = explode("|", $_SESSION['uri']);
	foreach($u as $value=>$key):
	//	print "<script>alert('".$u.") ".$key."[".$_SESSION['uri']."]')</script>";
	endforeach;
	?>


	<div id="content-left_menu">

		<?if($_GET['url'] == "ofsetnayaitsifrovayapechat")
			print "<a class='back-fu'  href='/pages/services/offset.php'>Прайс</a>";

?>
		<div id="crumbs">

		<div class="row" style=" margin-left: 0px;">
			<div class="col-xs" >
				<a href="/">Главная</a>
				<?php
			$uri = explode("/", $_SERVER[REQUEST_URI]);
			$i = 0;
			foreach ($uri as $v):
				$r = mysql_query("select title from text_U_1253 where url='".$v."'");
				$o = mysql_fetch_array($r);
				if(!empty($o['title'])) {
//					print "<script>alert('".$uri[$i]."[".$o['title']."]| ".$v."');</script>";
					$string = $string."/".$uri[$i];
					if(!empty($uri[$i++]))
						print " - <a href='". $string . "'>" . $o['title'] . "</a>";
					else
						print " - " . $o['title'];

					if($v == "polygraphy"){
						$ot = 1;
					}
				}
				$i++;
			endforeach;
			?>
		</div>
			<?if($ot == 1)
			{?>
				<div class="col-xs-0">
					<div class="box">
						<a href="offset/?view=90x50&n=0">
							<button style="margin-bottom: 10px;">Прайс</button>
						</a>
					</div>
				</div>
			<?}?>
	</div>
		</div>
	</div>


		<div id="content-left_menu">

<div style='
    position: relative;
    height: auto;
    margin: 0px 0%;
'><? print $text_object->text?></div>

			<?php
			if($url=='vizitka'){
				?>
				<table class="tbl-post">
					<tr>
						<th>Закругление</th>
						<td>30 грн за 1000 шт</td>
					</tr>
					<tr>
						<th>Биговка</th>
						<td>1 биг - 50 грн за 1000 шт</td>
					</tr>
					<tr>
						<th>Фальцовка</th>
						<td>20 грн - 1000 шт</td>
					</tr>
					<tr>
						<th>Перфорация</th>
						<td>1 подход - 50 грн за 1000 шт</td>
					</tr>
					<tr>
						<th>Дополнительный рез</th>
						<td>1 рез - 3 грн за 1000 шт</td>
					</tr>
					<tr>
						<th>Сверление</th>
						<td>1 дырка - 50 грн</td>
					</tr>
				</table>
				<?php
			}
			?>
		</div>
	</div>
</div>
</div>




</body>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/modules/footer.php");
?>

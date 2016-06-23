<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/flexboxgrid.css"> <!-- Blocks !-->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"><!-- Fraem !-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"><!-- Fraem !-->
	<link rel="stylesheet" href="assets/css/ekko-lightbox.min.css"><!-- Library !-->
	<link rel="stylesheet" href="assets/css/ChempStyle.css"><!-- MyStyle !-->

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mosaicflow.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#88212a;color:white">
	<div class="container" style="color: white">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse">
		<a class="navbar-brand" href="#" style="margin-top:-10px">
			<img class="logo" src="assets/img/logo-head.png" alt="CHAMPION LOGO">
		</a>
			<div class="row center-xs">
				<div class="col-xs-8" >
					<div class="box">
						<ul class="nav navbar-nav" style="padding: 0px 40px;">
							<li>
							</li>
							<li class="active"><a href="/">Главная</a></li>
							<li><a href="/portfolio/">Портфолио</a></li>
							<li><a onclick="Reformal.widgetOpen();return false;" href="http://champion.reformal.ru">
								Отзывы
								</a>
							</li>
							<li><a href="/contacts/">Контакты</a></li>
							<li><a href="/auth/">Вход</a></li>
						<!--<li>
								<div class="row">
									<div class="col-xs"  style="background: cadetblue">
										<form action="/search" method="post">
											<input size="10" class="search" name="search">
											<input class="bnt_search" type="submit" value="🔍">
										</form>
									</div>
								</div>
							</li>!-->
							<form action="/search" method="post" >
							<li>
								<div class="row">
										<div class="col-xs" style="padding-top:10px">
											<div class="input-group">
												<input type="text" class="form-control" size="150px">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button">
														<span class="glyphicon glyphicon-search"></span>
													</button>
												</span>
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
								</div><!-- /.row -->

							</li>
							</form>
						</ul>
					</div>
				</div>
			</div>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container" style="width: 100%;">
	<div class="row" >
		<div class="col-xs-0">
			<div class="box">
				<img src="assets/img/head.png" name="slide_show" width=100%>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row center-md">
		<div class="col-xs-9">
			<div class="box" >
				<a href="#" >
					<img src="assets/img/button/stand/1.png" width="19%" height="20%"
						 id="1" style="padding-top: 5px"
						 onMouseUp="document.getElementById(1).src = 'assets/img/button/hover/1.png'"
						 onMouseDown="document.getElementById(1).src = 'assets/img/button/click/1.png'"
						 onMouseOver="document.getElementById(1).src = 'assets/img/button/hover/1.png'"
						 onMouseOut="document.getElementById(1).src = 'assets/img/button/stand/1.png'"
					>
				</a>
				<a href="/polygraphy" >
					<img src="assets/img/button/stand/3.png" width="19%" height="20%"
						 id="3" style="padding-top: 5px"
						 onMouseUp="document.getElementById(3).src = 'assets/img/button/hover/3.png'"
						 onMouseDown="document.getElementById(3).src = 'assets/img/button/click/3.png'"
						 onMouseOver="document.getElementById(3).src = 'assets/img/button/hover/3.png'"
						 onMouseOut="document.getElementById(3).src = 'assets/img/button/stand/3.png'"
					>
				</a>
				<a href="/suveniry" >
					<img src="assets/img/button/stand/4.png" width="19%" height="20%"
						 id="4" style="padding-top: 5px"
						 onMouseUp="document.getElementById(4).src = 'assets/img/button/hover/4.png'"
						 onMouseDown="document.getElementById(4).src = 'assets/img/button/click/4.png'"
						 onMouseOver="document.getElementById(4).src = 'assets/img/button/hover/4.png'"
						 onMouseOut="document.getElementById(4).src = 'assets/img/button/stand/4.png'"
					>
				</a>
				<a href="/sayty" >
					<img src="assets/img/button/stand/2.png" width="19%" height="20%"
						 id="2" style="padding-top: 5px"
						 onMouseUp="document.getElementById(2).src = 'assets/img/button/hover/2.png'"
						 onMouseDown="document.getElementById(2).src = 'assets/img/button/click/2.png'"
						 onMouseOver="document.getElementById(2).src = 'assets/img/button/hover/2.png'"
						 onMouseOut="document.getElementById(2).src = 'assets/img/button/stand/2.png'"
					>
				</a>
				<a href="/naruzhnaya_reklama" >
					<img src="assets/img/button/stand/5.png" width="19%" height="20%"
						 id="5" style="padding-top: 5px"
						 onMouseUp="document.getElementById(5).src = 'assets/img/button/hover/5.png'"
						 onMouseDown="document.getElementById(5).src = 'assets/img/button/click/5.png'"
						 onMouseOver="document.getElementById(5).src = 'assets/img/button/hover/5.png'"
						 onMouseOut="document.getElementById(5).src = 'assets/img/button/stand/5.png'"
					>
				</a>
				<a href="/promo_aktsii" >
					<img src="assets/img/button/stand/6.png" width="19%" height="20%"
						 id="6" style="padding-top: 5px"
						 onMouseUp="document.getElementById(6).src = 'assets/img/button/hover/6.png'"
						 onMouseDown="document.getElementById(6).src = 'assets/img/button/click/6.png'"
						 onMouseOver="document.getElementById(6).src = 'assets/img/button/hover/6.png'"
						 onMouseOut="document.getElementById(6).src = 'assets/img/button/stand/6.png'"
					>
				</a>
				<a href="/transport" >
					<img src="assets/img/button/stand/7.png" width="19%" height="20%"
						 id="7" style="padding-top: 5px"
						 onMouseUp="document.getElementById(7).src = 'assets/img/button/hover/7.png'"
						 onMouseDown="document.getElementById(7).src = 'assets/img/button/click/7.png'"
						 onMouseOver="document.getElementById(7).src = 'assets/img/button/hover/7.png'"
						 onMouseOut="document.getElementById(7).src = 'assets/img/button/stand/7.png'"
					>
				</a>
				<a href="/media_reklama" >
					<img src="assets/img/button/stand/8.png" width="19%" height="20%"
						 id="8" style="padding-top: 5px"
						 onMouseUp="document.getElementById(8).src = 'assets/img/button/hover/8.png'"
						 onMouseDown="document.getElementById(8).src = 'assets/img/button/click/8.png'"
						 onMouseOver="document.getElementById(8).src = 'assets/img/button/hover/8.png'"
						 onMouseOut="document.getElementById(8).src = 'assets/img/button/stand/8.png'"
					>
				</a>
				<a href="/dizayn" >
					<img src="assets/img/button/stand/9.png" width="19%" height="20%"
						 id="9" style="padding-top: 5px"
						 onMouseUp="document.getElementById(9).src = 'assets/img/button/hover/9.png'"
						 onMouseDown="document.getElementById(9).src = 'assets/img/button/click/9.png'"
						 onMouseOver="document.getElementById(9).src = 'assets/img/button/hover/9.png'"
						 onMouseOut="document.getElementById(9).src = 'assets/img/button/stand/9.png'"
					>
				</a>
				<a href="/nestandartnaya_reklama" >
					<img src="assets/img/button/stand/10.png" width="19%" height="20%"
						 id="10" style="padding-top: 5px"
						 onMouseUp="document.getElementById(10).src = 'assets/img/button/hover/10.png'"
						 onMouseDown="document.getElementById(10).src = 'assets/img/button/click/10.png'"
						 onMouseOver="document.getElementById(10).src = 'assets/img/button/hover/10.png'"
						 onMouseOut="document.getElementById(10).src = 'assets/img/button/stand/10.png'"
					>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row center-xs">
		<div class="col-xs-4" style="background: #fff;border: 2px solid #eee;margin:10px;">
			<div class="col-xs-0">
				<div class="box" style="text-align: center;padding:10px; font-size: 20pt;background:#88212A;color: #fff;font-weight:900">
					Почему именно мы
				</div>

				<div class="row middle-xs" style="padding:20px;font-size:12pt;text-align:left;">
					<span class="glyphicon glyphicon-user" style="font-size:30pt;"></span>
					<div class="col-xs-10">
						<div class="box">
							Мы профессионалы своего дела
						</div>
					</div>
				</div>
				<div class="row middle-xs" style="padding:20px;font-size:12pt;text-align:left;">
					<span class="glyphicon glyphicon-list-alt" style="font-size:30pt;"></span>
					<div class="col-xs-10">
						<div class="box">
							Мы несем ответственность за работу
						</div>
					</div>
				</div>
				<div class="row middle-xs" style="padding:20px;font-size:12pt;text-align:left;">
					<span class="glyphicon glyphicon-heart" style="font-size:30pt;"></span>
					<div class="col-xs-10">
						<div class="box">
							Мы дорожим каждым клиентом
						</div>
					</div>
				</div>
				<div class="row middle-xs" style="padding:20px;font-size:12pt;text-align:left;">
					<span class="glyphicon glyphicon-ok-circle" style="font-size:30pt;"></span>
					<div class="col-xs-10">
						<div class="box">
							У нас всегда есть свежие идеи
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-4"style="margin: 10px;background: #fff;border: 2px solid #eee;">
			<div class="col-xs">
				<div class="box" style="text-align: center;font-size: 20pt;background: #88212A;color: #FFF;font-weight:900;">
					Новостная лента
				</div>
				<div class="news">
					<div class="row">
						<div class="col-xs">
							<div class="box" style="background: #88212A;color: white;height:20px;">
									<h5 style="padding-top:10px">
										Тема 
										<sup>24-15-2016</sup>
									</h5>
							</div>
						</div> 
					</div>
					<div class="row start-xs" style="background: #88212A;color: white;padding:10px;">
						<div class="col-xs" style="padding:10pt;">
							<div class="box" style="font-size:10pt;">
								Описание полное
								Описание полное
								Описание полное
								Описание полное
								Описание полное
								Описание полное
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row start-md">
		<div class="col-xs" style="background: white; font-size:30pt;border: 2px solid #eee;">
			<div class="box"  style="height:100%; background: #88212a; width: 350px; padding-left: 20px;color: white;z-index:1">Галерея работ</div>
		</div>
	</div>
	<div class="row" >
		<div class="col-xs" style="font-size: 14pt;font-family: 'Times New Roman'; background: #fff;border: 2px solid #eee;border-top:2px solid #fff;margin:-2px 20px;z-index:111;margin-bottom:20px;">
			<div class="clearfix mosaicflow">
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-10-21_5D_3422_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-20_5D_1165_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-20_5D_1287_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-24_5D_2066_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-24_5D_2066_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-10-21_5D_3422_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-20_5D_1165_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-20_5D_1287_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-24_5D_2066_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-24_5D_2066_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-10-21_5D_3422_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-20_5D_1165_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-20_5D_1287_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
				<div class="mosaicflow__item">
					<img src="
					http://sapegin.github.io/jquery.mosaicflow/img/2012-08-24_5D_2066_Artem_Sapegin.jpg
					" alt="">
					<p> Hello World</p>
					<div class="info-p">
						Описание
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs" style="background: white; font-size:30pt;border: 2px solid #eee;margin-top:10px;">
			<div class="box" style="height:100%; background: #88212a; width: 350px; padding-left: 20px;color: white;z-index:1">
				О нас
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="col-xs" style="font-size: 14pt;font-family: 'Times New Roman'; background: #fff;border: 2px solid #eee;border-top:2px solid #fff;margin:-2px 20px;z-index:111;margin-bottom:20px;">
			<div style="padding:5px">
				<center><h1>Рекламное агентство «Чемпион» в Украине.</h1></center>
				<p>Уважаемые клиенты, посетив наш сайт Вы можете ознакомится с реальными возможностями нашей компании. В каждом разделе Вы получите детальную информации об услугах, которые предлагает РА «Чемпион» в Украине.</p>
				<p>В первую очередь это разработка концепции Вашей рекламной кампании. Это является самым главным фактором в продвижении Ваших товаров и услуг или закреплении на рынке.</p>
				<p>Ваше рекламное объявление должно обязательно привлечь внимание потребителя. И не обязательно это должны быть яркие цвета и громкие звук. Для привлечения внимания важно иметь индивидуальные отличия – цвет, фон, звук и т.д, Мода в рекламе абсолютно неприемлема. Если Вы ей последуете, Ваша рекламная кампания затеряется среди сотен похожих. Таким образом, Вы не достигните поставленных целей и инвестиции превратятся в затраты.</p>
				<p>Внимательно изучите, как делают рекламу конкуренты, сделайте не так как  у них и Вам гарантирован успех.</p>
				<p>Правильно поставленная цель рекламной кампании и качественное воплощение - залог успеха.</p>
				<p>Понимая Ваши задачи, наши специалисты помогут Вам правильно подобрать необходимые технические решения для реализации Ваших проектов, таких как:<br />
				   <li style="position:relative; left: 30px;"> Вид печать – офсетная или цифровая, сам продукт (визитки, листовки, флайера, брошюры;</li>
				   <li style="position:relative; left: 30px;"> рекламоноситель – сайт, газета, журнал, транспорт, радио, телевидение, борды, ситилайты, раздача печатной продукции, промо-акции;</li>
				   <li style="position:relative; left: 30px;"> оптимально рассчитать место и время проведения рекламных и промо акций;</li>
				   <li style="position:relative; left: 30px;"> учитывая Ваши возможности, мы определим необходимые рекламные технологии для сбалансирования рекламного бюджета.<br />Это касается как малого, так и крупного бизнеса.</li>
				Главная задача специалистов РА «Чемпион» - это сделать рекламу своих клиентов максимально эффективной и качественной. Поэтому мы с большой ответственностью относимся ко всем стадиям рекламной кампании – разработка концепции, определение времени проведения рекламной кампании, охват целевой аудитории, наиболее эффективные рекламоносители, оптимизация рекламного бюджета и многое другое.</p>
				Обращайтесь в РА «Чемпион» и мы поможем грамотно и эффективно организовать и провести необходимую рекламную кампанию или акцию, которая принесет несомненный успех в продвижении Вашего товара или услуги на рынке Украины.</p>
			</div>
				</span>
		</div>
	</div>
</div>
<div class="container" style="width: 100%">
	<div class="row" style="background: #88212a;color: white; height: 100px;">
		<div class="col-xs" >
			<div class="row">
				<div class="col-xs">
					<div class="box" style="padding:5px">
						&copy;&nbspРекламное агенство "Чемпион"<br />г. Одесса, ул. Княжеская, 3/5
					</div>
				</div>
				<div class="col-xs">
					<div class="box" style="font-size:10pt;">
						<span class="glyphicon glyphicon-earphone"></span>
						Позвонить нам<br />
						(048) 795-68-03 / (048) 736-26-49<br />
						</span>
						(093) 946-14-95 / (095) 862-61-64 <br />
						(096) 321-58-11<br />
						<span class="glyphicon glyphicon-envelope"></span>
							7362649@ukr.net
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs">
			<div class="box">
				<img src="assets/img/footer-logo.png" style="padding:5px;">
				<img src="assets/img/social/1/vk.png"
					 id="123"  style="padding-bottom:20px;"
					 onMouseUp="document.getElementById(123).src = 'assets/img/social/2/vk.png'"
					 onMouseOver="document.getElementById(123).src = 'assets/img/social/2/vk.png'"
					 onMouseOut="document.getElementById(123).src = 'assets/img/social/1/vk.png'"
				>
				<img src="assets/img/social/1/tw.png"
					 id="124"  style="padding-bottom:20px;"
					 onMouseUp="document.getElementById(124).src = 'assets/img/social/2/tw.png'"
					 onMouseOver="document.getElementById(124).src = 'assets/img/social/2/tw.png'"
					 onMouseOut="document.getElementById(124).src = 'assets/img/social/1/tw.png'"
				>
				<img src="assets/img/social/1/fb.png"
					 id="125"  style="padding-bottom:20px;"
					 onMouseUp="document.getElementById(125).src = 'assets/img/social/2/fb.png'"
					 onMouseOver="document.getElementById(125).src = 'assets/img/social/2/fb.png'"
					 onMouseOut="document.getElementById(125).src = 'assets/img/social/1/fb.png'"
				>
				<img src="assets/img/social/1/gp.png"
					 id="126"  style="padding-bottom:20px;"
					 onMouseUp="document.getElementById(126).src = 'assets/img/social/2/gp.png'"
					 onMouseOver="document.getElementById(126).src = 'assets/img/social/2/gp.png'"
					 onMouseOut="document.getElementById(126).src = 'assets/img/social/1/gp.png'"
				>
			</div>
		</div>
	</div>
</div>
</body>

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

</html>
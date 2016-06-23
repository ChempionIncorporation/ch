
<head>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/flexboxgrid.css"> <!-- Blocks !-->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css"><!-- Fraem !-->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css"><!-- Fraem !-->
	<link rel="stylesheet" href="../assets/css/ekko-lightbox.min.css"><!-- Library !-->
	<link rel="stylesheet" href="../assets/css/ChempStyle.css"><!-- MyStyle !-->

	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.mosaicflow.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
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
				<img class="logo" src="../assets/img/logo-head.png" alt="CHAMPION">
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
<!--
<div id="topMenuVertBackground">
	<div class="width-1024">
				<div class="regLog">
					<ul>
						<li>
							<a href="/"><img class="logo" width="100px" src="/img/logo-head.png" alt="CHAMPION LOGO" /></a>
						</li>
						<?
/*
						if($_SESSION['gleb'] != "" || $_SESSION['login'] != "g")
							print "<li>
								<a target='_blank' href='".$_SERVER['document_root']."/pages/services/profile/?id=".$_SESSION['gleb']."&i=".$_SESSION['login']."'>".$_SESSION['login']."</a>
							</li>";
*/
						?>
						<li>
						<li><a href="/">Главная</a></li>
						<li><a href="/portfolio/">Портфолио</a></li>
						<li><a href="/clients">Клиенты</a></li>
						<li><a href="/help">Помощь</a>
						</li>
						<li><a href="/contacts/">Контакты</a></li>
						<li>

							<div class="search">
								<form action="/search" method="post">
									<input size="10" class="search" name="search">
									<input class="bnt_search" type="submit" value="🔍">
								</form>
							</div>
						</li>
					</ul>

				</div>
	</div>
</div>
!-->





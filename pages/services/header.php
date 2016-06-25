<? session_start(); ?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/flexboxgrid.css"> <!-- Blocks !-->
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css"><!-- Fraem !-->
    <link rel="stylesheet" href="/assets/css/ChempStyle.css"><!-- MyStyle !-->
    <link rel="stylesheet" href="/assets/css/font-awesome.css"><!-- MyStyle !-->
    <link rel="stylesheet" href="/assets/css/style.css"><!-- MyStyle !-->
    <script type="text/javascript" src="/assets/js/sprinkle.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"><!-- Fraem !-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/pages/services/shop/modules/prod/List_prod.js"></script>

</head>
<body  style="background: #e8e8e8">
<div class="navbar navbar-inverse navbar-default" role="navigation" id="menu"
     style="border-radius:0px;border: 0px;background:#88212a;color:white">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <div class="row">
                <div class="col-xs">
                    <div class="box">
                        <a class="navbar-brand" href="#" style="margin-top:-10px">
                            <img class="logo" src="../../../assets/img/logo-head.png" alt="CHAMPION LOGO" style=" ">
                        </a>
                    </div>
                </div>
                <div class="col-xs-9">
                    <div class="box">
                        <ul class="nav navbar-nav"">
                            <li><a href="/" style="color: white">Главная</a></li>
                        <!--                            <li><a href="/portfolio/" style="color: white">Портфолио</a></li>-->
                            <li>
                                <a style="color: white" onclick="Reformal.widgetOpen();return false;" href="http://champion.reformal.ru">
                                    Отзывы
                                </a>
                            </li>
                        <li><a style="color: white" href="/contacts/">Контакты</a></li>

                        <? if (!empty($_SESSION['password'])) { ?>
                            <li class="dropdown">
                                <? print "<a style='color: white;' class='dropdown-toggle' data-toggle='dropdown' href='#'>"; ?>
                                <? print $_SESSION['i'] . " " . $_SESSION['o'] ?>
                                <span class="caret"></span>
                                <ul class="dropdown-menu" style="background-color: rgba(255, 255, 255, 0.95)">
                                    <? print"<li><a href='/id" . $_SESSION['id'] . "'>Профиль</a></li>"; ?>
                                    <? print"<li><a href='/id" . $_SESSION['id'] . "/list'>Список заказов</a></li>"; ?>
                                </ul>
                            </li>
                        <? } else { ?>
                            <li>
                                <a style="color: white" href="/auth/">
                                    Вход
                                </a>
                            </li>
                        <? } ?>
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

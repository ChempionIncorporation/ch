
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/flexboxgrid.css"> <!-- Blocks !-->
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css"><!-- Fraem !-->
    <link rel="stylesheet" href="/assets/css/ChempStyle.css"><!-- MyStyle !-->
    <link rel="stylesheet" href="/assets/css/font-awesome.css"><!-- MyStyle !-->
    <link rel="stylesheet" href="/assets/css/style.css"><!-- MyStyle !-->
<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->

<!--    <script src="/assets/js/jquery.min.js"></script>-->
<!--    <script src="/assets/js/bootstrap.js"></script>-->
<!--    <script src="/assets/js/bootstrap.min.js"></script>-->
<!--    <script src="/assets/js/jquery.mosaicflow.min.js"></script>-->
<!--    <script type="text/javascript" src="/assets/js/jquery-1.2.6.min.js"></script>-->
<!--    <script type="text/javascript" src="/assets/js/jquery-ui-personalized-1.5.2.packed.js"></script>-->
    <script type="text/javascript" src="/assets/js/sprinkle.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"><!-- Fraem !-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/pages/services/shop/modules/prod/List_prod.js"></script>
<!--    <script src="../../js/jquery.fancy-textbox.js" type="text/javascript"></script>-->
<!--    <link href="../../css-styles/bootstrap.min.css" rel="stylesheet" type="text/css" />-->

</head>
<body  style="background: #e8e8e8">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#88212a;color:white">
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
            <a class="navbar-brand" href="#" style="margin-top:-10px">
                <img class="logo" src="../../../assets/img/logo-head.png" alt="CHAMPION LOGO" style="margin-left:80px;">
            </a>
            <div class="row center-xs">
                <div class="col-xs-7">
                    <div class="box">
                        <ul class="nav navbar-nav"">
                            <li><a href="/" style="color: white">Главная</a></li>
                            <li><a href="/portfolio/" style="color: white">Портфолио</a></li>
                            <li>
                                <a style="color: white" onclick="Reformal.widgetOpen();return false;" href="http://champion.reformal.ru">
                                    Отзывы
                                </a>
                            </li>
                            <li><a style="color: white" href="/contacts/">Контакты</a></li>
                            <?
                            if(!empty($_SESSION['id'])){?>
                                    <li><a href="/id<?print $_SESSION['id']?>?quit=1" style="color: white">Выход</a></li>
                                <?}else{?>
                                    <li><a href="/id<?print $_SESSION['id']?>" style="color: white"><?print $_SESSION['name']?></a></li>
                                <?}?>
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

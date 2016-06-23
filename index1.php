<?session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css-styles/champ.css" />
    <script src="js/menu.js"></script>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <title>РА Чемпион</title>
</head>

<body>
<?php include("modules/menu_top.php"); ?>

<img src="img/head.png" style="position: relative; bottom: 80px;width: 100%;">

<div class="sub-head">
    <div class="menu">
        <style>
            a{
                text-decoration: none;
            }
        </style>

        <a href="#" >
            <img src="/img/stand/1.png" width="19%" height="55%"
                 id="1" style="padding:5px"
                 onMouseUp="document.getElementById(1).src = '/img/hover/1.png'"
                 onMouseDown="document.getElementById(1).src = '/img/click/1.png'"
                 onMouseOver="document.getElementById(1).src = '/img/hover/1.png'"
                 onMouseOut="document.getElementById(1).src = '/img/stand/1.png'"
            >
        </a>
        <a href="/polygraphy" >
            <img src="/img/stand/3.png" width="19%" height="55%"
                 id="3" style="padding:5px"
                 onMouseUp="document.getElementById(3).src = '/img/hover/3.png'"
                 onMouseDown="document.getElementById(3).src = '/img/click/3.png'"
                 onMouseOver="document.getElementById(3).src = '/img/hover/3.png'"
                 onMouseOut="document.getElementById(3).src = '/img/stand/3.png'"
            >
        </a>
        <a href="/suveniry" >
            <img src="/img/stand/4.png" width="19%" height="55%"
                 id="4" style="padding:5px"
                 onMouseUp="document.getElementById(4).src = '/img/hover/4.png'"
                 onMouseDown="document.getElementById(4).src = '/img/click/4.png'"
                 onMouseOver="document.getElementById(4).src = '/img/hover/4.png'"
                 onMouseOut="document.getElementById(4).src = '/img/stand/4.png'"
            >
        </a>
        <a href="/sayty" >
            <img src="/img/stand/2.png" width="19%" height="55%"
                 id="2" style="padding:5px"
                 onMouseUp="document.getElementById(2).src = '/img/hover/2.png'"
                 onMouseDown="document.getElementById(2).src = '/img/click/2.png'"
                 onMouseOver="document.getElementById(2).src = '/img/hover/2.png'"
                 onMouseOut="document.getElementById(2).src = '/img/stand/2.png'"
            >
        </a>
        <a href="/naruzhnaya_reklama" >
            <img src="/img/stand/5.png" width="19%" height="55%"
                 id="5" style="padding:5px"
                 onMouseUp="document.getElementById(5).src = '/img/hover/5.png'"
                 onMouseDown="document.getElementById(5).src = '/img/click/5.png'"
                 onMouseOver="document.getElementById(5).src = '/img/hover/5.png'"
                 onMouseOut="document.getElementById(5).src = '/img/stand/5.png'"
            >
        </a>
        <a href="/promo_aktsii" >
            <img src="/img/stand/6.png" width="19%" height="55%"
                 id="6" style="padding:5px"
                 onMouseUp="document.getElementById(6).src = '/img/hover/6.png'"
                 onMouseDown="document.getElementById(6).src = '/img/click/6.png'"
                 onMouseOver="document.getElementById(6).src = '/img/hover/6.png'"
                 onMouseOut="document.getElementById(6).src = '/img/stand/6.png'"
            >
        </a>
        <a href="/transport" >
            <img src="/img/stand/7.png" width="19%" height="55%"
                 id="7" style="padding:5px"
                 onMouseUp="document.getElementById(7).src = '/img/hover/7.png'"
                 onMouseDown="document.getElementById(7).src = '/img/click/7.png'"
                 onMouseOver="document.getElementById(7).src = '/img/hover/7.png'"
                 onMouseOut="document.getElementById(7).src = '/img/stand/7.png'"
            >
        </a>
        <a href="/media_reklama" >
            <img src="/img/stand/8.png" width="19%" height="55%"
                 id="8" style="padding:5px"
                 onMouseUp="document.getElementById(8).src = '/img/hover/8.png'"
                 onMouseDown="document.getElementById(8).src = '/img/click/8.png'"
                 onMouseOver="document.getElementById(8).src = '/img/hover/8.png'"
                 onMouseOut="document.getElementById(8).src = '/img/stand/8.png'"
            >
        </a>
        <a href="/dizayn" >
            <img src="/img/stand/9.png" width="19%" height="55%"
                 id="9" style="padding:5px"
                 onMouseUp="document.getElementById(9).src = '/img/hover/9.png'"
                 onMouseDown="document.getElementById(9).src = '/img/click/9.png'"
                 onMouseOver="document.getElementById(9).src = '/img/hover/9.png'"
                 onMouseOut="document.getElementById(9).src = '/img/stand/9.png'"
            >
        </a>
        <a href="/nestandartnaya_reklama" >
            <img src="/img/stand/10.png" width="19%" height="55%"
                 id="10" style="padding:5px"
                 onMouseUp="document.getElementById(10).src = '/img/hover/10.png'"
                 onMouseDown="document.getElementById(10).src = '/img/click/10.png'"
                 onMouseOver="document.getElementById(10).src = '/img/hover/10.png'"
                 onMouseOut="document.getElementById(10).src = '/img/stand/10.png'"
            >
        </a>

    </div>
</div>
<div id="contentHome">
    <div class="aboutUsHome">
        <h2>ПОЧЕМУ ИМЕННО МЫ ?</h2>
        <p>
        <ul>
            <li><img src="/img/home/01-05.png" /><span>Мы профессионалы своего дела</span></li>
            <li><img src="/img/home/01-02.png" /><span>Мы дорожим каждым клиентом</span></li>
            <li><img src="/img/home/01-04.png" /><span>Мы качественно и быстро выполняем свою работу</span></li>
            <li><img src="/img/home/01-03.png" /><span>Мы несем ответственность за свою работу</span></li>
            <li><img src="/img/home/01-01.png" /><span>У нас всегда есть свежие идеи для вашего бизнеса</span></li>
        </ul>
        </p>
    </div>
    <div class="newsHome">
        <h2>НОВОСТИ</h2>
        <?php
        $i = 1;// Счетчик. Не больше ТРЕХ!
        require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
        mysql_query("SET NAMES utf8");
        $news = mysql_query("SELECT * FROM news_U_1255");
        if(!empty($news))
            while($news_object = mysql_fetch_object($news)){
                if($i <= 3)
                    $i++;
                else
                    break;
                echo "  <span style='position:relative;\".$r.\"'>
                            <h3><a class='nh-b' href='".$news_object->link."'>".$news_object->title."</a></h3>
                            <h3>".$news_object->date."</h3>
                        </span>";
            }
        ?>
    </div>
    <link rel="stylesheet" type="text/css" href="css-styles/component.css" />
    <div class="container">
        <section class="color-2">
            <a href="/news"><button class="btn btn-1 btn-1e">Подробнее</button></a>
        </section>
    </div>
</div><br>

<div id="portfolioHome">
    <div class="hr-port">
        НАШИ РАБОТЫ
    </div>
    <div class="supmain">
        <img width="338" height="188" src="/img/home/portfolio01.jpg" />
        <img width="338" height="188" src="/img/home/portfolio02.jpg" />
        <img width="338" height="188" src="/img/home/portfolio04.jpg" />
        <img width="338" height="188" src="/img/home/portfolio06.jpg" />
        <img width="338" height="188" src="/img/home/portfolio05.jpg" />
        <img width="338" height="188" src="/img/home/portfolio03.jpg" />
    </div>
</div>
<div id="portfolioHome">
    <div class="hr-port2">
        О НАС
    </div><?//mail("web_champ@ukr.net", "My Subject", "Line 1\nLine 2\nLine 3");
    ?>
    <div class="supmain">
        <p style="font-size: 20px; font-weight: 800; text-align: center;">Рекламное агентство «Чемпион» в Украине.</p>
        <span style="text-align: left; line-height: 20px ">
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
        </span>
    </div>
</div>

</div><br>
<?php require_once("modules/footer.php"); ?>
</body>
</html>

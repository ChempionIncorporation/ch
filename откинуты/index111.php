<!DOCTYPE html>
<?php echo $_GET['url'] ?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css-styles/champ.css" />
	<script src="js/menu.js"></script>
    <script type="text/javascript">
        <!--
        location.replace("/champ/"); // текущая страница будет заменена в history на новую — важно в плане юзабилити
        //-->
    </script>
    <meta http-equiv="refresh" content="0;/champ/">

    <title>РА Чемпион</title>
</head>
<body>
<script>
    function ch1(id, n) {
        if (n == 1) {
            if (document.getElementById(id).src.indexOf("/img/stand/1.png") > 0) {
                document.getElementById(id).src = "/img/stand/1.png";
            } else {
                document.getElementById(id).src = "/img/click/1.png";
            }
        } else if (n == 2){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 3){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 4){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 5){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 6){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 7){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 8){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 9){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        } else if (n == 10){
            if (document.getElementById(id).src.indexOf("/img/stand/2.png") > 0) {
                document.getElementById(id).src = "/img/stand/"+n+".png";
            } else {
                document.getElementById(id).src = "/img/click/"+n+".png";
            }
        }
    }
    function nimg(id, n){
        if(n == 1) {
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==2){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==3){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==4){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==5){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==6){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==7){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==8){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==9){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }else if(n ==10){
            document.getElementById(id).src = "/img/stand/"+n+".png";
        }
    }
    function oimg(id, n){
        if(n == 1) {
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==2){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==3){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==4){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==5){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==6){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==7){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==8){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==9){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }else if(n ==10){
            document.getElementById(id).src = "/img/hover/"+n+".png";
        }
    }
</script>
<?php require_once("modules/menu_top.php"); ?>
<img src="img/head.png" style="position: relative; bottom: 80px;width: 100%;">
<div class="sub-head">
    <div class="menu">
        <img src="/img/stand/1.png" width="19%" height="150px" id="img_1" onClick="ch1('img_1', 1)" onmouseover="oimg('img_1', 1)" onmouseout="nimg('img_1', 1)">
        <a href="/polygraphy" >
            <img src="img/stand/2.png" width="19%" height="150px" id="img_2" onClick="ch1('img_2',2)" onmouseover="oimg('img_2', 2)" onmouseout="nimg('img_2', 2)">
        </a>
        <a href="/suveniry" >
        <img src="img/stand/3.png" width="19%" height="150px" id="img_3" onClick="ch1('img_3',3)" onmouseover="oimg('img_3', 3)" onmouseout="nimg('img_3', 3)">
        </a>
        <a href="/sayty" >
        <img src="/img/stand/4.png" width="19%" height="150px" id="img_4" onClick="ch1('img_4',4)" onmouseover="oimg('img_4', 4)" onmouseout="nimg('img_4', 4)">
        </a>
        <a href="/naruzhnaya_reklama" >
        <img src="/img/stand/5.png" width="19%" height="150px" id="img_5" onClick="ch1('img_5',5)" onmouseover="oimg('img_5', 5)" onmouseout="nimg('img_5', 5)">
        </a>
        <a href="/promo_aktsii" >
        <img src="/img/stand/6.png" width="19%" height="150px" id="img_6" onClick="ch1('img_6',6)" onmouseover="oimg('img_6', 6)" onmouseout="nimg('img_6', 6)">
        </a>
        <a href="/transport" >
        <img src="/img/stand/7.png" width="19%" height="150px" id="img_7" onClick="ch1('img_7',7)" onmouseover="oimg('img_7', 7)" onmouseout="nimg('img_7', 7)">
        </a>
        <a href="/media_reklama" >
        <img src="/img/stand/8.png" width="19%" height="150px" id="img_8" onClick="ch1('img_8',8)" onmouseover="oimg('img_8', 8)" onmouseout="nimg('img_8', 8)">
        </a>
        <a href="/dizayn" >
        <img src="/img/stand/9.png" width="19%" height="150px" id="img_9" onClick="ch1('img_9',9)" onmouseover="oimg('img_9', 9)" onmouseout="nimg('img_9', 9)">
        </a>
        <a href="/nestandartnaya_reklama" >
        <img src="/img/stand/10.png" width="19%" height="150px" id="img_10" onClick="ch1('img_10',10)" onmouseover="oimg('img_10', 10)" onmouseout="nimg('img_10', 10)">
        </a>

        <!--<a href="/polygraphy" >
            <img class="a2" id="a2" width="150px" height="150px">
        <a href="/suveniry">
            <img class="a3"  width="150px" height="150px">
        </a>
        <a href="/sayty">
            <img class="a4" width="150" height="150">
        </a>
        <a href="/naruzhnaya_reklama">
            <img class="a5" width="150" height="150">
        </a>

        <a href="/promo_aktsii">
            <img class="a6" width="150" height="150">
        </a>
        <a href="/transport">
            <img class="a7" width="150" height="150">
        </a>
        <a href="/media_reklama">
            <img class="a8" width="150" height="150">
        </a>
        <a href="/dizayn">
            <img class="a9" width="150" height="150">
        </a>
        <a href="/nestandartnaya_reklama">
            <img class="a10" width="150" height="150">
        </a>
        !-->
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
        НАШИ РОБОТЫ
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
        <span style="text-align: left; line-height: 20px; font-family: Tahoma">
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

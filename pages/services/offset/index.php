<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link href="./style/css.css" rel="stylesheet" type="text/css">
    <script async="" src="./style/analytics.js"></script>
    <script type="text/javascript" src="./style/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="./style/jquery.form.js"></script>
    <script type="text/javascript" src="./style/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="./style/jquery.easing-1.3.pack.js"></script>
    <link rel="stylesheet" href="./style/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="./style/ddsmoothmenu.css">
    <script type="text/javascript" src="./style/ddsmoothmenu.js"></script>
    <link href="./style/ui.datepicker.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./style/ui.datepicker.js"></script>
    <script type="text/javascript" src="./style/jquery.tablesorter.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style/jquery.tablesorter.css">
<body>
<style>
    thead tr{
        background: rgba(189, 15, 26, 0.2);
    }
    table[class="newprice"]{
        background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;
    }
    h3{
        text-align: center;
    }
    h3[class="newo"]{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d1630 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d800 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
     #d900 h3{
         margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
     }
    #d1150 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d1300 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d1500 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d1700 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d2500 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d3000 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d3500 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d35024 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d3508 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d3507 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d3509 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }
    #d35010 h3{
        margin-bottom:0; border:solid 1px #666; border-bottom:0; background:#88212A;color:#fff;font-weight:900;padding:10px;
    }

</style>
<div class="main">
    <style type="text/css">
        td {
            padding: 5px 10px !important;
        }
        .tabs2 {
            line-height: 34px;
            list-style: none;
            border-bottom: 1px solid #DDD;
            background: #FFF;
        }
        .tabs2 li {
            float: left;
            display: inline;
            margin: 0 1px -1px 0;
            padding: 10px;
            color: #777;
            cursor: pointer;
            background: #F9F9F9;
            border: 1px solid #E4E4E4;
            border-bottom: 1px solid #F9F9F9;
            position: relative;
            font-size: 18px;
            font-weight: 700;
        }
        .tabs2 li:hover, .vertical .tabs li:hover {
            color: #88212a;
            background: #fff;
        }
        .tabs2 li.current {
            color: #88212a;
            background: #fff;
            padding: 13px 13px 14px 13px;
            border: 1px solid #D4D4D4;
            border-bottom: 1px solid #fff;
        }
    </style>
    <style type="text/css">
        .t_razmer {
            border-color: #fff;
            border-style: solid;
            border-width: 1px;
            color: #333
            list-style: outside none none;
            margin-bottom: 0;
            padding: 10px 30px;
        }


        .t_razmer:focus, .tactive {
            color:#000;
            padding: 10px;
            padding-right: 29px;
            margin-bottom: 0px;
            cursor: pointer;
            background-color: #88212a;
        }

        .t_razmer > li {
            display: inline-block;
        }

        .t_colonka a{
            text-decoration: none;
            color: #333;
        }

        .t_colonka a:hover {
            color: #88212a;
        }

        .t_colonka td { padding:3px 3px 3px 0  !important;}

        .t_row {
            margin-right: -5px;
            margin-left: -3px;
        }
        .t_colonka {
            float: left;
            min-height: 1px;
            padding: 6px;
            position: relative;
            width: 24%;
        }
        .t_greyblock li {
            cursor: pointer;
            display: inline-block;
            height: 21px;
            border: 1px solid #f2f2f2;
            /*padding: 7px 0px 7px 0px;*/
            margin-right: 7px;
            background: #fff;
            vertical-align: middle;
            font-size: 11px;
            text-align: center;
            display: table-cell;
            width:1%;
            -webkit-transition: all .6s ease;
        }
        .t_greyblock > li > a {
            text-decoration: none;
            color: #333;
        }
        .t_greyblock li:hover, .t_greyblock li.selected {
            background: #f2f2f2;
            color: #88212a;
            border: 1px solid #ccc;
            text-decoration: none;
        }
        .t_greyblock > li > a:hover {
            color: #C5181E;
        }
        #t_plot {
            padding: 7px 0px 7px 0px;
            cursor: pointer;
        }
        .t_switchable input {
            display:none;
        }
        .t_switchable input:checked+#t_plot {
            color:white;
            font-weight: bold;
            padding: 7px 0px 7px 0px;
            background-color: #88212a;
            cursor: pointer;
        }
        .t_black {

            text-align: center;
            display: table-cell;
            width: 80px;
            background-color: transparent;
            filter: grayscale(100%);
            -webkit-filter: grayscale(100%);
            filter: gray;
            opacity: 0.5;
            -webkit-transition: all .6s ease;
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
        }
        .t_black:hover
        {
            text-align: center;
            background-color: transparent;
            opacity: 1;
            filter: grayscale(0%);
            -webkit-filter: grayscale(0%);
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
        }
        .t_helper{
            width:1000px; height: 500px;
            padding: 5px;
            overflow-x: hidden;
        }
        strong{
            font-size:9px;
        }
        #d1630{
            background: white;
        }
        .gleb:hover{
            background: rgba(189, 15, 26, 0.1);
        }
        .t_razmer{background: white;}
        p{visibility: hidden}
    </style>
<script type="text/javascript">
$(document).ready(function(){
	$('ul.tabs,ul.tabs2').each(function() {
		$(this).find('li').each(function(i) {
			$(this).click(function(){
				$(this).addClass('current').siblings().removeClass('current')
					.parents('div.section').find('div.box').eq(i).fadeIn(150).siblings('div.box').hide();
			});
		});
	});
	var tabIndex = window.location.hash.replace('#tab','')-1;
	if (tabIndex != -1) $('ul.tabs li').eq(tabIndex).click();
	$('a[href*=#tab]').click(function() {
		var tabIndex = $(this).attr('href').replace(/(.*)#tab/, '')-1;
		$('ul.tabs li').eq(tabIndex).click();
	});
});
</script>
<div class="section" style="margin-top:20px;">
    <div class="t_row">
        <div class="t_colonka">
            <?
            if(!isset($_GET['n']))
                $_GET['n'] = 0;
            $act[$_GET['n']] = 'tactive';
                $view = "
                    <a href='?view=90x50&n=0'>
                    <ul style='background: white' class='t_razmer  ".$act[0]."'>
                        <li style='width:80px;'><b>90 × 50</b></li>
                        <span >Визитка</span>
                    </ul>
                    </a>
                    <a href='?view=50x180&n=1'>
                    <ul class='t_razmer  ".$act[1]."'>
                    <li style='width:80px;'><b>50 × 180</b></li><span >Двойная визитка</span></ul>
                    </a>
                    <a href='?view=90x100&n=2'>
                    <ul class='t_razmer ".$act[2]."'>
                    <li style='width:80px;'><b>90 × 100</b></li><span>Двойная визитка</span></ul>
                    </a>
                    <a href='?view=45x50&n=3'>
                    <ul class='t_razmer ".$act[3]."'>
                    <li style='width:80px;'><b>45 × 50</b></li><span>Полвизитки</span></ul>
                    </a>
                    </div><div class='t_colonka'>
                    <a href='?view=55x85&n=4'>
                    <ul class='t_razmer ".$act[4]."'>
                    <li style='width:80px;'><b>55 × 85</b></li><span>Евровизитка</span></ul>
                    </a>
                    <a href='?view=55x170&n=5'>
                    <ul class='t_razmer ".$act[5]."'>
                    <li style='width:80px;'><b>55 × 170</b></li><span>Двойная евровизитка</span></ul>
                    </a>
                    <a href='?view=85x110&n=6'>
                    <ul class='t_razmer ".$act[6]."'>
                    <li style='width:80px;'><b>85 × 110</b></li><span>Двойная евровизитка</span></ul>
                    </a>
                    <a href='?view=30x50&n=7'>
                    <ul class='t_razmer ".$act[7]."'>
                    <li style='width:80px;'><b>30 × 50</b></li><span>Евробирка</span></ul>
                    </a>
                    </div><div class='t_colonka'><a href='?view=100x70&n=8'>
                    <ul class='t_razmer ".$act[8]."'>
                    <li style='width:80px;'><b>100 × 70</b></li><span>Календарь</span></ul>
                    </a>
                    <a href='?view=70x200&n=9'>
                    <ul class='t_razmer ".$act[9]."'>
                    <li style='width:80px;'><b>70 × 200</b></li><span>Двойной календарь</span></ul>
                    </a>
                    <a href='?view=100x140&n=10'>
                    <ul class='t_razmer ".$act[10]."'>
                    <li style='width:80px;'><b>100 × 140</b></li><span>Двойной календарь</span></ul>
                    </a>
                    <a href='?view=50x70&n=11'>
                    <ul class='t_razmer ".$act[11]."'>
                    <li style='width:80px;'><b>50 × 70</b></li><span>Полкалендаря</span></ul>
                    </a>
                    </div><div class='t_colonka'><a href='?view=40x70&n=12'>
                    <ul class='t_razmer ".$act[12]."'>
                    <li style='width:80px;'><b>40 × 70</b></li><span>Минивизитка</span></ul>
                    </a>
                    <a href='?view=90x150&n=13'>
                    <ul class='t_razmer ".$act[13]."'>
                    <li style='width:80px;'><b>90 × 150</b></li><span>Минифлаер</span></ul>
                    </a>
                    <a href='?view=420x596&n=14'>
                    <ul class='t_razmer ".$act[14]."'>
                    <li style='width:80px;'><b>420 × 596</b></li><span>А2</span></ul>
                    </a>
                    <a href='?view=596x840&n=15'>
                    <ul class='t_razmer ".$act[15]."'>
                    <li style='width:80px;'><b>596 × 840</b></li><span>А1</span></ul>
                    </a>
                    </div><div class='t_colonka'>
                    <a href='?view=99x210&n=16'>
                    <ul class='t_razmer ".$act[16]."'>
                    <li style='width:80px;'><b>99 × 210</b></li><span>Еврофлаер</span></ul>
                    </a>
                    <a href='?view=198x210&n=17'>
                    <ul class='t_razmer ".$act[17]."'>
                    <li style='width:80px;'><b>198 × 210</b></li><span>Двойной еврофлаер</span></ul>
                    </a>
                    <a href='?view=90x90&n=18'>
                    <ul class='t_razmer ".$act[18]."'>
                    <li style='width:80px;'><b>90 × 90</b></li><span>Кубарик</span></ul>
                    </a>
                    <a href='?view=99x99&n=33'>
                    <ul class='t_razmer ".$act[33]."'>
                    <li style='width:80px;'><b>99 × 99</b></li><span>Полфлаера</span></ul>
                    </a>
                    </div><div class='t_colonka'><a href='?view=105x148&n=19'>
                    <ul class='t_razmer ".$act[19]."'>
                    <li style='width:80px;'><b>105 × 148</b></li><span>А6</span></ul>
                    </a>
                    <a href='?view=148x210&n=20'>
                    <ul class='t_razmer ".$act[20]."'>
                    <li style='width:80px;'><b>148 × 210</b></li><span>А5</span></ul>
                    </a>
                    <a href='?view=210x297&n=21'>
                    <ul class='t_razmer ".$act[21]."'>
                    <li style='width:80px;'><b>210 × 297</b></li><span>А4</span></ul>
                    </a>
                    <a href='?view=297x420&n=22'>
                    <ul class='t_razmer ".$act[22]."'>
                    <li style='width:80px;'><b>297 × 420</b></li><span>А3</span></ul>
                    </a>
                    </div><div class='t_colonka'><a href='?view=50x145&n=23'>
                    <ul class='t_razmer ".$act[23]."'>
                    <li style='width:80px;'><b>50 × 145</b></li><span>А7 dl</span></ul>
                    </a>
                    <a href='?view=105x297&n=24'>
                    <ul class='t_razmer ".$act[24]."'>
                    <li style='width:80px;'><b>105 × 297</b></li><span>А5 dl</span></ul>
                    </a>
                    <a href='?view=420x148&n=25'>
                    <ul class='t_razmer ".$act[25]."'>
                    <li style='width:80px;'><b>420 × 148</b></li><span>А4 dl</span></ul>
                    </a>
                    <a href='?view=594x210&n=26'>
                    <ul class='t_razmer ".$act[26]."'>
                    <li style='width:80px;'><b>594 × 210</b></li><span>А3 dl</span></ul>
                    </a>
                ";
            print $view;
            ?>
            </div>
            <div class="t_colonka" style="margin-bottom: 20px;">
        </div>
    </div>
    <br style="clear:both;"><a name="price"></a><br>
<!--//// !-->
    <?
    if(isset($_GET['view']) || !empty($_GET['view']))
        include("/".$_GET['view']."/index.php");
    else
        include("/90x50/index.php");
    ?>
<!-- //// !-->


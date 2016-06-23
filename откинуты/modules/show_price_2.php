<html>
<head>
	<title></title>
	<style type="text/css">
	body{font-family: Arial;}
	table td{padding: 5px;text-align: center;font-size: 0.9rem;border-bottom: 1px solid black;border-left: 1px solid black;}
	table tr:first-child td{border-top: 1px solid black;}
	table td:last-child{border-right: 1px solid black;}
	table tr:nth-child(1) td:nth-child(2){text-align: center;}
	table tr:nth-child(2) td:nth-child(2){text-align: center;}
	table td:nth-child(2){text-align: left}
	table{border-spacing: 0px;width: 900px;cursor: default;margin: 0 auto}
	table tr:nth-child(2) td:nth-child(1){background: none}
	table tr:nth-child(2) td{background: #E52B50;color: #ffffff}
	table tr:nth-child(1){background: #E5AA70;color: #ffffff}
	table tr:nth-child(1):hover{background: #E5AA70}
	table tr:nth-child(2):hover{background: #ffffff}
	table tr:hover{background: #f2f2f2}
	a{text-decoration: none;color: #000000;}
	a:hover{text-decoration: underline;}
	</style>
</head>
<body>
<?php
$name = array('Баннер Frontlit ламинированный','Баннер Frontlit литой 450','Сетка баннерная','Баннер Backlit литой','Баннер Blockaut двухстор. печать','Бумага Сити','Бумага Backlight','Бумага Blue Back','Пленка самоклеющаяся (белая глянц.)','Пленка самоклеющаяся (прозрачная, мат.)','Пленка самоклеющаяся КИТАЙ *','Пленка One Way Vision (перфорированная)','Холст натуральный');
// $size = array('3,20','3,20','3,20','3,20','1,60','1,25','1,60','1,60','1,52','1,52','1,52');
// $vis_1 = array('2,7','3,7','3,7','7,5','-','1,75','-','-','-','-','-','-','-');
// $vis_2 = array('3','4','4','8','10','2','2,2','1,25','3,3','4','2,5','6,5','8');
// $vis_3 = array('4','4,5','-','9,5','14','3','3,2','-','4','5','4','-','10');
$size = array(3.20,3.20,3.20,3.20,1.60,1.25,1.60,1.25,1.60,1.60,1.52,1.52,1.52);
$vis_1 = array(2.7,3.7,3.7,7.5,'-',1.75,'-','-','-','-','-','-','-');
$vis_2 = array(3,4,4,8,10,2,2.2,1.25,3.3,4,2.5,6.5,8);
$vis_3 = array(4,4.5,'-',9.5,14,3,3.2,'-',4,5,4,'-',10);
?>
<table>
	<tr><td colspan="3"></td><td>Toucan NX 1014 / Osprey<br />3.2 м 720 dpi</td><td colspan="2" align="center">Mimaki JV-5 1.6 м<br />1440 dpi</td></tr>
	<tr><td colspan="2"></td><td>мм</td><td>Высокое</td><td>Среднее</td><td>Высокое</td></tr>
	<?php
		for($i=0;$i<13;$i++){
			if($vis_1[$i]!='-') $aa = "<a href='/modules/zakaz.php?num=".$i."&price=".(int)($vis_1[$i]*24.4)."&col=1'>".(int)($vis_1[$i]*24.4)."</a>";
			else $aa = '-';
			if($vis_2[$i]!='-') $bb = "<a href='/modules/zakaz.php?num=".$i."&price=".(int)($vis_2[$i]*24.4)."&col=2'>".(int)($vis_2[$i]*24.4)."</a>";
			else $bb = '-';
			if($vis_3[$i]!='-') $cc = "<a href='/modules/zakaz.php?num=".$i."&price=".(int)($vis_3[$i]*24.4)."&col=3'>".(int)($vis_3[$i]*24.4)."</a>";
			else $cc = '-';
			echo "<tr><td>".($i+1)."</td><td>".$name[$i]."</td><td>".$size[$i]*1000.0."</td><td>".$aa."</td><td>".$bb."</td><td>".$cc."</td></tr>";
		}
	?>
</table>
</body>
</html>
<style type="text/css">
	table{width: 1000px;font-family: Roboto;margin: 0 auto;margin-bottom: 20px}
	table tr:first-child th{text-align: left;background-color: #f42121;color: #ffffff;}
	a{text-decoration: none;color: #000000}
	th,td{padding: 5px;text-align: center;cursor: default;}
	td{text-align: center;}
	td:not(:nth-child(1)):hover{text-decoration: underline;cursor: pointer;}
</style>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
require_once($_SERVER['DOCUMENT_ROOT']."/modules/function.php");

$PERSENT = 1.4;

$sql_l = mysql_query("SELECT * FROM price_U_1252");

while($sql = mysql_fetch_object($sql_l)){
	$id_paper = $sql->id_price_U_1;
	$tirazh_array = explode(",",$sql->tirazh_U_3);
	$days_array = explode(",",$sql->days_U_4);
	$price_array = explode(",",$sql->price_U_5);
	$number_var = $sql->number_U_7;
	$type_var = $sql->type_U_6;

	if(viz_01(0,0,$number_var)){

	echo "<table>";

	$size = array(persent0,persent1,persent2);

	$count_array = count($tirazh_array);
	echo "<tr><th colspan='".($count_array+1)."'>".$type_var."</th></tr><tr><th></th>";
	foreach ($tirazh_array as $value) {
		echo "<th>".number_format($value, 0, ',', ' ')." шт.</th>";
	}
	echo "</tr>";

	for($i=0;$i<3;$i++){
		if(viz_01($i,0,$sql->number_U_7)!=0){
			if($days_array[$i]==3){
				echo "<tr><td> печать за ".$days_array[$i]." дня</td>";
			}else {echo "<tr><td> печать за ".$days_array[$i]." дней</td>";}
		for($count_co = 0;$count_co<$count_array;$count_co++){	
			$price_co = round($price_array[$i]*viz_01($i,$count_co,$sql->number_U_7)*$PERSENT);
			echo "<td><a href='/modules/eq.php?tirazh=".$tirazh_array[$count_co]."&day=".$days_array[$i]."&id_paper=".$id_paper."&price=".$price_co."'>".number_format($price_co, 0, ',', ' ')."</a></td>";
		}}
		echo "</tr>";
	}
	echo "</table>";
	}
}
?>
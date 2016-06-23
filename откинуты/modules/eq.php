<style type="text/css">
	body{font-family: Roboto}
	table td{padding: 5px}
	input[type="button"]{padding: 8px 10px;background-color: #f42121;border: 0px solid lightgrey;font-family: Roboto;color: #ffffff;border-radius: 3px;text-transform: uppercase;}
	.ccc{background-color: #f42121;padding: 5px;color: #ffffff;margin-top: 25px;display: block}
	#sum_span{font-size: 1.6rem}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
var val_big = 0;
var val_falc = 0;
var val_zakr=0;
var val_perf=0;
var val_doprez=0;
var val_sverl=0;
var summ = 0;
var in_sum = 0;
var val_ol_big = 1;

$(document).ready(function(){
in_sum = $("#price_hidden").val();
in_tirazh = $("#tirazh_hidden").val();
in_post_big = $("#post_big_hidden").val();

$("#all_summ").html(in_sum);

$("input").click(fuck);
$("select").change(function(){
	name_select = $(this).attr("id");

	if(name_select=='select_big'){
		val_big = $(this).val();
		val_ol_big = $(this).val()/in_tirazh/in_post_big;
		val_falc = 20.0*val_ol_big;
		show();
	}
	if(name_select=='select_perf'){
		val_perf = $(this).val();
		show();
	}
	if(name_select=='select_doprez'){
		val_doprez = $(this).val();
		show();
	}
	if(name_select=='select_sverl'){
		val_sverl = $(this).val();
		show();
	}
});


function fuck(){

		name = $(this).attr("name");

		if(name=='zakr'){
			
			if($("#zakr").prop("checked")) {val_zakr = $(this).val();show();}
			else {val_zakr = 0;show();}
		}
		if(name=='big'){
			
			if(document.getElementById('falc').disabled){
				document.getElementById('falc').disabled = false;
				document.getElementById('select_big').disabled = false;
				show();
			}
			else{ 
				document.getElementById('falc').disabled = true;
				document.getElementById('select_big').disabled = true;
				$('#falc').attr('checked', false);
				val_falc = 0;
				show();
			}
			if(!$("#falc").prop("checked")) {
				val_big = $("#select_big").val();
				val_falc = 0;
				show();
			}

			if($("#big").prop("checked")) {val_big = $("#select_big").val();show();}
			else {val_big = 0;show();}

		}
		if(name=='falc'){
			if($("#falc").prop("checked")) {val_falc = 20.0*val_ol_big;}
			else val_falc = 0;
			show();
		}
		if(name=='perf'){
			if($("#perf").prop("checked")){
				val_perf = $("#select_perf").val();
				document.getElementById('select_perf').disabled = false;
				show();
			}else{
				val_perf = 0;
				document.getElementById('select_perf').disabled = true;
				show();
			}
		}
		if(name=='doprez'){
			if($("#doprez").prop("checked")){
				val_doprez = $("#select_doprez").val();
				document.getElementById('select_doprez').disabled = false;
				show();
			}else{
				val_doprez = 0;
				document.getElementById('select_doprez').disabled = true;
				show();
			}
		}
		if(name=='sverl'){
			
			if($("#sverl").prop("checked")){
				val_sverl = $("#select_sverl").val();
				document.getElementById('select_sverl').disabled = false;
				show();
			}else{
				val_sverl = 0;
				document.getElementById('select_sverl').disabled = true;
				show();
			}
		}
	}	
});
function show(){
	summ = parseInt(val_big)+parseInt(val_sverl)+parseInt(val_zakr)+parseInt(val_falc)+parseInt(val_doprez)+parseInt(val_perf);
	$("#sum_span").html(summ);
	//alert(in_sum);
	$("#all_summ").html(parseInt(in_sum)+summ);
}
</script>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
$post_zakr = 30/1000;
$post_big = 50/1000;
$post_big_falc = 20/1000;
$post_perf = 50/1000;
$post_dop = 3/1000;
$post_sverl = 50/1000;



$tirazh = $_GET['tirazh'];
$day = $_GET['day'];
$paper = $_GET['id_paper'];
$price = $_GET['price'];

if($day==3) $day_name = "дня";
else $day_name = "дней";

$sql = mysql_query("SELECT * FROM price_U_1252 WHERE id_price_U_1=".$paper) or die(mysql_error());
$sql_object = mysql_fetch_object($sql);
echo "<input type='hidden' id='price_hidden' value='".$price."' />";
echo "<input type='hidden' id='tirazh_hidden' value='".$tirazh."' />";
echo "<input type='hidden' id='post_big_hidden' value='".$post_big."' />";
echo "Тип бумаги: <b>".$sql_object->type_U_6."</b><br/ > Печать за <b>".$day."</b> ".$day_name."<br/ > Тираж: <b>".$tirazh."</b> шт.<br/ > Цена: <b>".$price."</b> грн.<br />";
echo "<br />Послепечатная обработка<br /><br />";
//echo "Закругление углов: <b>".$tirazh*$post_zakr."</b> грн.<br />Биговка: <b>".$tirazh*$post_big."</b> грн. Фальцовка: <b>".$tirazh*$post_big_falc."</b> грн.<br />Перфорация: <b>".$tirazh*$post_perf."</b> грн.<br />Дополнительный рез: <b>".$tirazh*$post_dop."</b> грн.<br />Сверление (6мм): <b>".$tirazh*$post_sverl."</b> грн.<br />";

//$post = $post_zakr*$tirazh+$post_big*$tirazh+$post_big_falc*$tirazh+$post_perf*$tirazh+$post_dop*$tirazh+$post_sverl*$tirazh;
$summ = $price;

echo "<table>";
echo "<tr><td><input type='checkbox' id='zakr' value='".$tirazh*$post_zakr."' name='zakr'><label for='zakr'>Закругление углов</label></td><td></td><td>[ 30 грн за 1000 шт]</td></tr>";
echo "<tr><td><input type='checkbox' id='big' value='".$tirazh*$post_big."' name='big'><label for='big'>Биговка</label></td><td>
<select id='select_big' disabled>
<option value='".$tirazh*$post_big*1.0."'>1 биг - ".$tirazh*$post_big*1.0." грн.</option>
<option value='".$tirazh*$post_big*2.0."'>2 бига - ".$tirazh*$post_big*2.0." грн.</option>
<option value='".$tirazh*$post_big*3.0."'>3 бига - ".$tirazh*$post_big*3.0." грн.</option>
<option value='".$tirazh*$post_big*4.0."'>4 бига - ".$tirazh*$post_big*4.0." грн.</option>
<option value='".$tirazh*$post_big*5.0."'>5 бигов - ".$tirazh*$post_big*5.0." грн.</option>
<option value='".$tirazh*$post_big*6.0."'>6 бигов - ".$tirazh*$post_big*6.0." грн.</option>
<option value='".$tirazh*$post_big*7.0."'>7 бигов - ".$tirazh*$post_big*7.0." грн.</option>
<option value='".$tirazh*$post_big*8.0."'>8 бигов - ".$tirazh*$post_big*8.0." грн.</option>
<option value='".$tirazh*$post_big*9.0."'>9 бигов - ".$tirazh*$post_big*9.0." грн.</option>
</select>
</td><td>[ 50 грн за 1000 шт]</td></tr>";
echo "<tr><td><input type='checkbox' id='falc' value='".$tirazh*$post_big_falc."' name='falc' disabled><label for='falc'>Фальцовка</label></td><td></td><td>[ 20 грн за 1000 шт]</td></tr>";
echo "<tr><td><input type='checkbox' id='perf' name='perf'><label for='perf'>Перфорация</label></td><td>
<select id='select_perf' disabled>
<option value='".$tirazh*$post_perf*1.0."'>1 проход - ".$tirazh*$post_perf*1.0." грн.</option>
<option value='".$tirazh*$post_perf*2.0."'>2 прохода - ".$tirazh*$post_perf*2.0." грн.</option>
<option value='".$tirazh*$post_perf*3.0."'>3 прохода - ".$tirazh*$post_perf*3.0." грн.</option>
<option value='".$tirazh*$post_perf*4.0."'>4 прохода - ".$tirazh*$post_perf*4.0." грн.</option>
<option value='".$tirazh*$post_perf*5.0."'>5 прохода - ".$tirazh*$post_perf*5.0." грн.</option>
<option value='".$tirazh*$post_perf*6.0."'>6 проходов - ".$tirazh*$post_perf*6.0." грн.</option>
<option value='".$tirazh*$post_perf*7.0."'>7 проходов - ".$tirazh*$post_perf*7.0." грн.</option>
<option value='".$tirazh*$post_perf*8.0."'>8 проходов - ".$tirazh*$post_perf*8.0." грн.</option>
<option value='".$tirazh*$post_perf*9.0."'>9 проходов - ".$tirazh*$post_perf*9.0." грн.</option>
</select>
</td><td>[ 1 проход - 50 грн за 1000 шт]</td></tr>";
echo "<tr><td><input type='checkbox' id='doprez' value='".$tirazh*$post_dop."' name='doprez'><label for='doprez'>Дополнительный рез</label></td><td>
<select id='select_doprez' disabled>
<option value='".$tirazh*$post_dop*1.0."'>1 рез - ".$tirazh*$post_dop*1.0." грн</option>
<option value='".$tirazh*$post_dop*2.0."'>2 реза - ".$tirazh*$post_dop*2.0." грн</option>
</select>
</td><td>[ 3 грн за 1000 шт]</td></tr>";
echo "<tr><td><input type='checkbox' id='sverl' value='".$tirazh*$post_sverl."' name='sverl'><label for='sverl'>Сверление</label></td><td>
<select id='select_sverl' disabled>
<option value='".$tirazh*0.05."'>1 дырка - ".$tirazh*0.05." грн</option>
<option value='".$tirazh*0.1."'>2 дырки - ".$tirazh*0.1." грн</option>
</select>
</td><td>[ 50 грн за 1000 шт]</td></tr>";
echo "</table>";
echo "<br />Печать: ".$price." грн.";
echo "<br /><span class='ccc'>Пост. обработка: <span id='sum_span'>0</span> грн.</span>";
//number_format($value, 0, ',', ' ')
echo "<br /><br />Всего: <span id='all_summ'>0</span> грн.";
?>
<br /><br />
<input type="hidden" id="lol" value="0" />
<!--<input type="button" onclick="show();" value="Послепечатные работы" />-->
<div id="coco"></div>
<input type="file">

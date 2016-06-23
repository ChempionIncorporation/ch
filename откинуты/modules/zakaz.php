<link rel="icon" type="image/png" href="/img/ico.png">
<title>Новый заказ Широкоформатная печать</title>
<style type="text/css">
	body{font-family: Arial}
	table td{font-size: 0.9rem}
	#desc_option{
		width: 500px;
		height: 169px;
		/*background: orange;*/
		display: none;
	}
	#desc_option table{
		width: 100%;
		height: 100%;
		border-spacing: 0px;
		
	}
	#desc_option table td:nth-child(1){
		background-color: #E32636;
		width: 190px;
		color: #ffffff;
		padding-left: 10px;
	}
	#desc_option table td:nth-child(2){
		text-align: center;
	}
	.show_img_b{
		width: 300px;
		height: 169px;
		background: orange;
		display: none;
	}
	label[for="attachment"]{
		background: #E32636;
		width: 140px;
		height: 20px;
		display: block;
		padding: 15px 19px; 
		text-align: center;
		color: #ffffff;
		cursor: pointer;
		border-radius: 7px;
	}
	label[for="attachment"]:hover{
		background: #E64350;
	}
</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php
include_once("meta/JPEG.php");
include_once("meta/JFIF.php");

$dir = '';
$tmpName = '';
$saveFileType = '';
$width = '';
$height = '';

$aa = 0;
$width_a = 0;
$height_a = 0;
$gg = '';
$bb = 0;
/*
function thumbGenerator($dir,$tmpName,$fileType,$size){
    $saveFileType = "jpg";
  //  echo $dir.$tmpName.".".$fileType;;
    $imagePath = $dir.$tmpName.".".$fileType;
    $image = new Imagick();
    $image->readimage($imagePath);
    if($fileType == "psd"){
        $image->setIteratorIndex(0);
    }
    $dimensions = $image->getImageGeometry();
    $width = $dimensions['width'];
    $height = $dimensions['height'];
    if($size == "large"){
        $maxWidth = 720;
        $maxHeight = 720;
    }
    if($size == "small"){
        $maxWidth = 250;
        $maxHeight = 250;
    }
    if($height > $width){
        //Portrait
        if($height > $maxHeight)
            $image->thumbnailImage(0, $maxHeight);
            $dimensions = $image->getImageGeometry();
            if($dimensions['width'] > $maxWidth){
                $image->thumbnailImage($maxWidth, 0);
            }
    }elseif($height < $width){
        //Landscape
        $image->thumbnailImage($maxWidth, 0);
    }else{
        //square
        $image->thumbnailImage($maxWidth, 0);
    }
    if($size == "large"){
        $image->writeImage($dir . $tmpName."-lg.".$saveFileType);
        //echo Imagick::getImageCompressionQuality("1.jpg");
        $image_header = get_jpeg_header_data($dir . $tmpName."-lg.".$saveFileType);
		$image_info = get_JFIF($image_header);
		echo $width_a;
		$width_a = (int)(round($width/11.811));
		//echo $width_a;
		$height_a = (int)(round($height/11.811023));
		$aa = getimagesize($dir . $tmpName."-lg.".$saveFileType);
		if($aa['channels']==3) $gg = "RGB<br />";
		if($aa['channels']==4) $gg = "CMYK<br />";
        $bb = $image_info['XDensity'];
        echo "<input type='hidden' name='denisty' value='".$bb."'>";
        echo "<input type='hidden' name='w' value='".$width_a."'>";
        echo "<input type='hidden' name='h' value='".$height_a."'>";
        //echo "<input type='hidden' name='s' value='".$aa."'>";
        echo "<input type='hidden' name='g' value='".$gg."'>";
    }
    if($size == "small"){
        $image->writeImage($dir . $tmpName."-sm.".$saveFileType);

    }

   // echo "<img src=\"".$dir . $tmpName."-lg.".$saveFileType."\" width=\"".$width."\" height=\"".$height."\">";
    echo "<img src=\"".$tmpName."-lg.".$saveFileType."\" width='300' height='169' style='position: relative'>";
    //echo $width;
}*/
/*
$exif = exif_read_data ('1.jpg','IFD0');
echo $exif===false ? "No header data found.<br>\n" : "Image contains headers<br>";
$exif = exif_read_data ('1.jpg',0,true);
echo "1.jpg:<br>\n";
foreach($exif as $key=>$section) {
foreach($section as $name=>$val) {
 echo "$key.$name: $val<br>\n";
}
}*/

?>
<div class="show_img_b">
<div id='postRslt'></div>
<div style="z-index: 100;width: 292px;height: 160.5px;position: relative;margin-top: -165.75px;margin-left: 3.25px;border: 1px solid red"></div>
<div style="z-index: 110;width: 274px;height: 143px;position: relative;margin-top: -153.5px;margin-left: 11.75px;border: 1px solid green"></div>
</div>

<script type="text/javascript">
function sub(a){
		var text = document.getElementById('attachment').value;
		//alert(text.indexOf('.'));
		var ssr = text.substring(text.indexOf('.')+1,text.length);
		if(ssr == 'jpg' || ssr == 'jpeg' || ssr == 'psd' || ssr == 'bmp' || ssr == 'cdr' || ssr == 'gif' || ssr == 'png' || ssr == 'tif' || ssr == 'tiff'){
			setTimeout(function(){
			document.getElementById('cooo').click();
		},1000);
		} else alert("Недопустимый формат макета!");
		/*alert($("#attachment").val());/*
		setTimeout(function(){
			document.getElementById('cooo').click();
		},1000);*/
		
	}
$(document).ready(function() {


	

	//alert();
		$('#formMessage').submit(function() {
        //Обработчик события "Документ загружен"
        $('#upframe').load(function() {
            //Вытаскиваем из фрейма ответ сервера
            var rslt = $(this).contents().find('body').html();
            //Выдаем этот ответ, как результат загрузки с формы

            $('#postRslt').html(rslt);
            $('.show_img_b').show();
            $('.show_img_b').css("display","inline-block");
        });
        setTimeout(function(){
        	setTimeout(function(){
        		$('#desc_option').show();
        		$('#desc_option').css("display","inline-block");
        	},500);
        	
        	//alert($('.denisty').val());
        	if($('.denisty_1').val()>=300){
        		$('#desc_option table tr:nth-child(1) td:nth-child(1)').css("background-color", "#8DB600");
        	} else $('#desc_option table tr:nth-child(1) td:nth-child(1)').css("background-color", "#E32636");
        	if($('.width_1').val()==92 & $('.height_1').val()==52){
        		$('#desc_option table tr:nth-child(2) td:nth-child(1)').css("background-color", "#8DB600");
        	} else $('#desc_option table tr:nth-child(2) td:nth-child(1)').css("background-color", "#E32636");
        	if($('.rgb_1').val()=='CMYK'){
        		$('#desc_option table tr:nth-child(3) td:nth-child(1)').css("background-color", "#8DB600");
        	} else $('#desc_option table tr:nth-child(3) td:nth-child(1)').css("background-color", "#E32636");
        	if($('.size_1').val()/1048576 <= 2000){
        		$('#desc_option table tr:nth-child(4) td:nth-child(1)').css("background-color", "#8DB600");
        	} else $('#desc_option table tr:nth-child(4) td:nth-child(1)').css("background-color", "#E32636");

        	$('.denisty_var').html($('.denisty_1').val());
        	$('.width_var').html($('.width_1').val());
        	$('.height_var').html($('.height_1').val());
        	$('.rgb_var').html($('.rgb_1').val());
        	$('.size_var').html(($('.size_1').val()/1048576).toFixed(2));
        },1500);
        
  	});

      square = (width*height/1000000).toFixed(2);
      sum = (square*count*price).toFixed(2);
      if(sum<10) sum=(100.0*0.1).toFixed(1);
      $(".square").html(square);
      $(".coin").html(sum);


    $("#width_z").focusout(function(){

      width = $(this).val();
      count = $("#count_z").val();
      square = (width*height/1000000).toFixed(2);
      sum = (square*count*price).toFixed(2);
      if(sum<10) sum=(100.0*0.1).toFixed(1);
      $(".square").html(square);
      $(".coin").html(sum);
      pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();

      calc_min(1,$(".s_obr").val());
      calc_min(3,$(".s_shag").val());
      calc_min(2,$(".s_luv").val());
      calc_min(5,$(".s_kar").val());
      calc_min(6,$(".s_spa").val());
    });
    $("#height_z").focusout(function(){
      height = $(this).val();
      count = $("#count_z").val();
      square = (width*height/1000000).toFixed(2);
      sum = (square*count*price).toFixed(2);
      if(sum<10) sum=(100.0*0.1).toFixed(1);
      $(".square").html(square);
      $(".coin").html(sum);
      pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();

      calc_min(1,$(".s_obr").val());
      calc_min(3,$(".s_shag").val());
      calc_min(2,$(".s_luv").val());
      calc_min(5,$(".s_kar").val());
      calc_min(6,$(".s_spa").val());
    });
    $("#count_z").focusout(function(){
     count = $("#count_z").val();
      square = (width*height/1000000).toFixed(2);
      sum = (square*count*price).toFixed(2);
      if(sum<10) sum=(100.0*0.1).toFixed(1);
      $(".square").html(square);
      $(".coin").html(sum);
      pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();

      calc_min(1,$(".s_obr").val());
      calc_min(3,$(".s_shag").val());
      calc_min(2,$(".s_luv").val());
      calc_min(5,$(".s_kar").val());
      calc_min(6,$(".s_spa").val());
    });

    $("#lyv").change(function(){
    	$("#shag").removeAttr('disabled');

      calc_min(1,$(".s_obr").val());
	  calc_min(3,$(".s_shag").val());
	  calc_min(2,$(".s_luv").val());
	  calc_min(5,$(".s_kar").val());
	  calc_min(6,$(".s_spa").val());
    });
	/*$("#img_check").submit(function(){
		alert($(this));
	});*/
	/*$("#lolol").change(function(){
		var form = $("#img_check");
		var data = form.serialize();

		$.ajax({

		  url: 'check_img.php',
		  data: data,
		  success: function(data) {
		    $('#ee').html(data);
		    //alert(data);
		  }
		});
	});*//*
		//document.getElementById("img_check").submit();
		var msg   = $('#img_check').serialize();
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("ee").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","check_img.php?id="+msg,true);
		xmlhttp.send();*/


		//var form = $("#img_check").val();
		//alert(form);
		//var data = form.serialize();

		/*$.ajax({

		  url: 'check_img.php',
		  data: data,
		  success: function(data) {
		    $('#ee').html(data);
		    //alert(data);
		  }
		});*/
$( "#form" ).on( "submit", function( event ) {
  event.preventDefault();
  console.log( $( this ).serialize() );
});

$("#img_check").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
		var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
		var error = false; // прeдвaритeльнo oшибoк нeт
		/*form.find('input, textarea').each( function(){ // прoбeжим пo кaждoму пoлю в фoрмe
			if ($(this).val() == '') { // eсли нaхoдим пустoe
				alert('Зaпoлнитe пoлe "'+$(this).attr('placeholder')+'"!'); // гoвoрим зaпoлняй!
				error = true; // oшибкa
			}
		});*/
		if (!error) { // eсли oшибки нeт
			var data = form.serialize(); // пoдгoтaвливaeм дaнныe
			$.ajax({ // инициaлизируeм ajax зaпрoс
			   type: 'POST', // oтпрaвляeм в POST фoрмaтe, мoжнo GET
			   url: 'check_img.php', // путь дo oбрaбoтчикa, у нaс oн лeжит в тoй жe пaпкe
			   //dataType: 'json', // oтвeт ждeм в json фoрмaтe
			   data: data, // дaнныe для oтпрaвки
		      /* beforeSend: function(data) { // сoбытиe дo oтпрaвки
		            form.find('input[type="submit"]').attr('disabled', 'disabled'); // нaпримeр, oтключим кнoпку, чтoбы нe жaли пo 100 рaз
		          },
		       success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
		       		if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
		       			alert(data['error']); // пoкaжeм eё тeкст
		       		} else { // eсли всe прoшлo oк
		       			alert('Письмo oтврaвлeнo! Чeкaйтe пoчту! =)'); // пишeм чтo всe oк
		       		}
		         },
		       error: function (xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
		            alert(xhr.status); // пoкaжeм oтвeт сeрвeрa
		            alert(thrownError); // и тeкст oшибки
		         },
		       complete: function(data) { // сoбытиe пoслe любoгo исхoдa
		            form.find('input[type="submit"]').prop('disabled', false); // в любoм случae включим кнoпку oбрaтнo
		         }*/
		         success: function(data) {
				 $('#ee').html(data);
				    //alert(data);
				 }
		                  
			     });
		}
		return false; // вырубaeм стaндaртную oтпрaвку фoрмы
	});
document.querySelector('#lolol').onchange = function(e){

    files = this.files;
	for(var a=0;a<files.length;a++)
	//alert(files[a].name);
	alert(files[a].tmp);
}
});


</script>
<div id="desc_option">
<table>
	<tr><td>Разрешение, пикс/дюйм:</td><td><span class="denisty_var"></span></td><td>Минимум 300 dpi</td></tr>
	<tr><td>Размер, мм:</td><td><span class="width_var"></span> x <span class="height_var"></span></td><td>Желательно 92х52 мм</td></tr>
	<tr><td>Цветовая модель:</td><td><span class="rgb_var"></span></td><td>CMYK</td></tr>
	<tr><td>Размер, мб:</td><td><span class="size_var"></span></td><td>до 2000 мб</td></tr>
</table>
</div><br /><br />
<form id='formMessage' method='POST' target='uptarget' enctype='multipart/form-data' action='handler.php'>
    <input type='file' name='attachment' id="attachment" style="display: none" onchange="sub();"><label for="attachment">Загрузить макет</label><br>
    <input type='submit' value='Отправить' id="cooo" style="display: none">
</form>
<!-- <form id="form">
	<input type="file" name="lol" enctype="multipart/form-data">
	<input type="submit">
</form>
<div id="ee">
	
</div>
<form action="" method="post" id="img_check" enctype="multipart/form-data">
<input type="file"  name="good" id="lolol">
<input type="submit">
</form> -->
<?php

//echo "<br /><hr>".$width_a."<br />".$height_a."<br />".$aa."<br />";
/*$a = getimagesize ("1.psd");
echo $a['channels'];
$im = new Imagick($_SERVER['DOCUMENT_ROOT'] . '/modules/test.psd');
$im->writeImage();
$im->setImageFormat('png');
$im->writeImage('test.png');

$ol = new Imagick($_SERVER['DOCUMENT_ROOT'].'/modules/1.jpg');
$im->setImageFormat('png');
//echo $ol->writeImage();
$ol->writeImage();
*/
$name = array('Баннер Frontlit ламинированный','Баннер Frontlit литой 450','Сетка баннерная','Баннер Backlit литой','Баннер Blockaut двухстор. печать','Бумага Сити','Бумага Backlight','Бумага Blue Back','Пленка самоклеющаяся (белая глянц.)','Пленка самоклеющаяся (прозрачная, мат.)','Пленка самоклеющаяся КИТАЙ *','Пленка One Way Vision (перфорированная)','Холст натуральный');
// $size = array('3,20','3,20','3,20','3,20','1,60','1,25','1,60','1,60','1,52','1,52','1,52');
// $vis_1 = array('2,7','3,7','3,7','7,5','-','1,75','-','-','-','-','-','-','-');
// $vis_2 = array('3','4','4','8','10','2','2,2','1,25','3,3','4','2,5','6,5','8');
// $vis_3 = array('4','4,5','-','9,5','14','3','3,2','-','4','5','4','-','10');
$size = array(3.20,3.20,3.20,3.20,1.60,1.25,1.60,1.25,1.60,1.60,1.52,1.52,1.52);
$vis_1 = array(2.7,3.7,3.7,7.5,'-',1.75,'-','-','-','-','-','-','-');
$vis_2 = array(3,4,4,8,10,2,2.2,1.25,3.3,4,2.5,6.5,8);
$vis_3 = array(4,4.5,'-',9.5,14,3,3.2,'-',4,5,4,'-',10);

$first = "Toucan NX 1014 / Osprey
3.2 м 720 dpi";
$second = "Mimaki JV-5 1.6 м
1440 dpi";
$low = "Среднее";
$hight = "Высокое";
/*
echo $_GET['num']."<br>";
echo $_GET['price']."<br>";
echo $_GET['col']."<br>";
*/

echo "Другая бумага : <br /><p>";
if($vis_1[$_GET['num']]!='-'){
	if($_GET['col']==1) echo "<input type='radio' name='type_paper' id='' checked> <b>".(int)($vis_1[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$first."<br />";
	else echo "<input type='radio' name='type_paper' id=''> <b>".(int)($vis_1[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$first."<br />";
}
if($vis_2[$_GET['num']]!='-'){
	if($_GET['col']==2) echo "<input type='radio' name='type_paper' id='' checked> <b>".(int)($vis_2[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$second."<br />";
	else echo "<input type='radio' name='type_paper' id=''> <b>".(int)($vis_2[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$second."<br />";
}
if($vis_3[$_GET['num']]!='-'){
	if($_GET['col']==3) echo "<input type='radio' name='type_paper' id='' checked> <b>".(int)($vis_3[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$second."<br />";
	else echo "<input type='radio' name='type_paper' id=''> <b>".(int)($vis_3[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$second."<br />";
}
echo "</p>";
//echo "<b>".(int)($vis_1[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$first."<br /><b>".(int)($vis_2[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$second."<br /><b>".(int)($vis_3[$_GET['num']]*24.4)." грн/м<sup>2</sup> - </b>".$second."</p>";
echo "Тип банера : ".$name[$_GET['num']]."<br />";
echo "Цена : ".$_GET['price']." грн<br />";
if($_GET['col']==1){
	echo "Производитель : ".$first."<br />";
	echo "Качество : ".$hight."<br />";
}
if($_GET['col']==2){
	echo "Производитель : ".$second."<br />";
	echo "Качество : ".$low."<br />";
}
if($_GET['col']==3){
	echo "Производитель : ".$second."<br />";
	echo "Качество : ".$hight."<br />";
}
?>
<input type="hidden" name="price" id="price_z" value="<?php echo $_GET['price']?>">
<br>
<table>
	<tr><td>Ширина , мм</td><td><input type="input" name="width" id="width_z" onchange="change_calc(1)" placeholder="Width" value="1000"></td></tr>
	<tr><td>Высота , мм</td><td><input type="input" name="height" id="height_z" onchange="change_calc(2)" placeholder="Height" value="1000"></td></tr>
	<tr><td>Количество , шт.</td><td><input type="input" name="count" id="count_z" onchange="change_calc(3)" placeholder="Count" value="1"></td></tr>
	<tr><td>Стоимость: </td><td><span class="coin">0.00</span> грн</td></tr>
	<tr><td>Площадь: </td><td><span class="square">0.00</span> м<sup>2</sup></td></tr>
</table><br>
<table>
	
		<tr><td>Обрезка: </td><td><select name="s_obr" class="s_obr" onchange="calc_min(1,this.value)"><option value="1">Без обрезки</option><option value="2">Обрезать в размер</option></select> 3 грн/м погонный</td></tr>
		<tr><td>Люверсы: </td><td><select name="s_luv" class="s_luv" onchange="calc_min(2,this.value)" id="lyv"><option value="1">Нет</option><option value="2">По углам</option><option value="3">По периметру</option></select>  Шаг: <select name="s_shag" class="s_shag" onchange="calc_min(3,this.value)" disabled id="shag"><option value="15">150 мм</option><option value="20">200 мм</option><option value="25">250 мм</option><option value="30">300 мм (стандарт)</option></select> 1 грн/шт.  Подворот: <select name="s_podv" class="s_podv" onchange="calc_min(4,this.value)" disabled><option value="1">Нет</option><option value="2">Есть</option></select></td></tr>
		<tr><td>Карман под трубу (100мм): </td><td><select name="s_kar" class="s_kar" onchange="calc_min(5,this.value)"><option value="0">Нет</option><option value="1">Только сверху</option><option value="2">Только снизу</option><option value="3">Только слева</option><option value="4">Только справа</option><option value="6">Сверху и снизу</option><option value="7">Слева и справа</option><option value="5">По периметру</option></select> 15 грн/м погонный</td></tr>
		<tr><td>Спайка: </td><td><select name="s_spa" class="s_spa" onchange="calc_min(6,this.value)"><option value="0">Нет</option><option value="1">По вертикали</option><option value="2">По горизонтали</option></select> 15 грн/м погонный</td></tr>
		<tr><td>Стоимость: </td><td><span class="coin_post">0.00</span> грн</td></tr>
	
</table>
<!-- <input type="button" onclick="lol()"> -->
<script type="text/javascript">


	var width = 1000;
	var height = 1000;
	var count = 1;
	var sum = 0;
	var post = 0;
	var price = document.getElementById("price_z").value;
	var square = 0;
	var pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();
	var shag = 15;
	var karman = 0;
	var adhesion = 0;

	var obr = 0;
	var lyv = 0;
	$(document).ready(function(){
// 		alert();
// 		/*$('#formMessage').submit(function() {
//         //Обработчик события "Документ загружен"
//         $('#upframe').load(function() {
//             //Вытаскиваем из фрейма ответ сервера
//             var rslt = $(this).contents().find('body').html();
//             //Выдаем этот ответ, как результат загрузки с формы

//             $('#postRslt').html(rslt);
//             $('.show_img_b').show();
//             //alert($('.denisty').val());
//         });
//   	});
// */
//       square = (width*height/1000000).toFixed(2);
//       sum = (square*count*price).toFixed(2);
//       if(sum<10) sum=(100.0*0.1).toFixed(1);
//       $(".square").html(square);
//       $(".coin").html(sum);


//     $("#width_z").focusout(function(){
//       width = $(this).val();
//       count = $("#count_z").val();
//       square = (width*height/1000000).toFixed(2);
//       sum = (square*count*price).toFixed(2);
//       if(sum<10) sum=(100.0*0.1).toFixed(1);
//       $(".square").html(square);
//       $(".coin").html(sum);
//       pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();
//     });
//     $("#height_z").focusout(function(){
//       height = $(this).val();
//       count = $("#count_z").val();
//       square = (width*height/1000000).toFixed(2);
//       sum = (square*count*price).toFixed(2);
//       if(sum<10) sum=(100.0*0.1).toFixed(1);
//       $(".square").html(square);
//       $(".coin").html(sum);
//       pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();
//     });
//     $("#count_z").focusout(function(){
//      count = $("#count_z").val();
//       square = (width*height/1000000).toFixed(2);
//       sum = (square*count*price).toFixed(2);
//       if(sum<10) sum=(100.0*0.1).toFixed(1);
//       $(".square").html(square);
//       $(".coin").html(sum);
//       pi = ( ($('#width_z').val()*2 + $('#height_z').val()*2 ) ).toFixed();
//     });

//     $("#lyv").change(function(){
//     	$("#shag").removeAttr('disabled');
//     });

	});
	function calc_min(a,b){


		if(a==1){
			if(b==1) {obr=(0).toFixed(1);$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));}
			else {obr = (((width*2)+(height*2))*3/1000).toFixed(1); $(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));}
		}
		if(a==2){
			if(b==1) {lyv=(0).toFixed(1);$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));}
			if(b==3) {


				lyv = (pi/shag/10*count).toFixed(1);
				$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));

			}
			if(b==2) {lyv=(4*count).toFixed(1);$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));}
		}
		if(a==3){
			shag = b;
			if($(".s_luv").val()==3){
				lyv = (pi/shag/10*count).toFixed(1);
				$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));
			}
		}
		if(a==5){
			if(b>0){
				if(b==1 || b==2) {
					karman = 15*width/1000*count;
				}
				if(b==3 || b==4) {
					karman = 15*height/1000*count;
				}
				if(b==5) {
					karman = (width/1000+height/1000)*15*2*count;
				}
				if(b==6) {
					karman = 15*width/1000*count*2;
				}
				if(b==7) {
					karman = 15*height/1000*count*2;
				}
			}else{
				karman=0;
			}

			$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));
		}
		
		if(a==6){
				if (b==1) {
				adhesion = height/1000*15*count;
				}else if(b==2) {
					adhesion = width/1000*15*count;
				}else{
					adhesion=0;
				}
				$(".coin_post").html((parseFloat(obr)+parseFloat(lyv)+parseFloat(karman)+parseFloat(adhesion)).toFixed(1));
		}

	}

	function lol(){
		alert(obr+' '+lyv+' '+karman+' '+adhesion+' ');
	}

</script>
<iframe name="uptarget" id="upframe" style="width:0px; height:0px; position:absolute; top:-9999px;"></iframe>
<?php 
//echo strpos("2.psd", ".psd");
$text = "asd0as8-saf.psd";
//echo substr($text, 0,strpos($text, ".psd"));
 ?>
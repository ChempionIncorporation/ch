
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Индивидуальный заказ на цифровую печать</title>
    <link href="favicon.ico" rel="shortcut icon"/>
    <link href="css.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.form.js"></script> -->
    <!--<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.easing-1.3.pack.js"></script>
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/ddsmoothmenu.css"/>
    <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <link href="../js/ui.datepicker.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="js/jquery.tablesorter.css"/>-->
</head>
<body>
<script type="text/javascript">
$(document).ready(function(){
	//if ($.browser.opera||$.browser.msie){ 
	if ($.browser.msie){ 
    	alert("Уважаемый клиент, к сожалению, бесперебойная работа с нашим сервисом на 100% гарантируется только с браузерами Mozilla Firefox, Google Chrome и Apple Safari. Возможно с Opera. Перейдите в наш сервис с использованием одного из этих браузеров. Приносим свои извинения."); 
 };
});
</script>
<div class="header_client">
<a href="http://sborka.ua/"><img src="js/blank.gif" alt="Сборка" width="300" height="99" style="float:left;" /></a>
<div class="userblocks">
       <ul>
  	<li class="unew" id="neworder">
        <ul>
        <li><a title="Нажимайте сразу сюда, или подождите выпадающее меню" href="index.php?id=2" class="bl"><span>Оформить заказ</span></a>
            <ul id="newordermenu">
                <li><a href="?id=2">Продукты</a></li>
                <li><a href="?id=6">Офсетная печать. СБОРНЫЕ ТИРАЖИ.</a></li>
                <li><a href="?id=30">Офсетная печать: нестандартный заказ</a></li>
                <li><a href="?id=71">Цифровая печать</a></li>
                <li><a href="?id=106">Цифровая печать: индивидуальный заказ</a></li>
                <li><a href="?id=78">Пластиковые карты</a></li>
                <li><a href="?id=100">Широкоформатная печать</a></li>
                            </ul>
         </li>
        </ul>
    </li>
  	<li class="uorders"><a title="Список ваших заказов с важной информацией" href="index.php?id=80" class="bl"><span>Заказы</span></a>
    	<span class="numbers">2208.48</span></li>
   	<li class="umes"><a title="Ценная информация, с которой целесообразно ознакомиться" href="index.php?id=37" class="bl"><span>Сообщения</span></a>
    	<span class="numbers" id="unreadmes">2733</span></li>
    <li class="ufin"><a title="Здесь можно оплатить ваш заказ, посмотреть историю платежей и прислать уведомление об оплате" href="index.php?id=12" class="bl"><span>Финансы</span></a>
    	<span class="numbers red">-1 868,28</span></li>
    <li class="uprofile"><a title="Редактирование профиля, Доставка, Уведомления" href="index.php?id=1" class="bl"><span>Профиль</span></a>
      	<span class="numbers">№ 5793</span></li>
            <li class="uprice"><a title="" href="inc/price.php" class="bl"><span>Прайс</span></a><span class="numbers"><a href="#margin" class="window" style="background:none; border:none; color:#f2f2f2; text-decoration:none;">+ %</a></span></li>  
    <li class="uhelp"><a title="Прежде чем звонить в колл-центр, поищите здесь ответ.. он на 100% здесь есть)" href="index.php?id=42" class="bl"><span>Помощь</span></a>
    	</li>
    <li class="ulogout"><a title="Выйти, чтобы темные силы не порылись в личных данных!" href="inc/login.php?logout" class="bl"><span>Выход</span></a></li>
  </ul>
</div>
<div style="display:none;">
	<div id="margin" style="padding:20px;"><form method="get" action="/inc/price.php"><h3 class="new">Сколько&nbsp;процентов<br />
добавляем&nbsp;к&nbsp;стоимости?<br /><input name="margin" type="text" maxlength="3" value="7" style="font-size:25px; width:45px; margin:10px;" /><br />
	<input name="myprice" type="submit" value="скачать прайс с добавленным процентом" /></h3></form></div>
</div>
</div>
  
<div class="main">
<style type="text/css">
a{text-decoration:none;}
li.selected a, li.selected a, li a:hover, li a:hover{color:#c00;}
.pages td {border:solid 1px #CCC;}
.pages td:first-child{background-color:#eee;}
.qq-upload-button {width:185px !important; background-color:#f2f2f2 !important; border:solid 1px #f2f2f2 !important; border-radius: 0px !important; text-align: left !important; padding:6px !important; margin-top:5px !important;}
.qq-upload-button:hover,.qq-upload-button-hover {background-color:#FFFFFF !important; color:#c00 !important;border:1px solid #ccc !important;}
.qq-upload-list { margin: 13px 35px !important;}
#maketlink,#maketform{padding:0px !important;}

#fs {line-height: 12px;list-style: none; height:29px;}
#fs li {float: left;display: inline;margin: 0 1px -1px 0; padding: 7px 8px 0px 0px;color: #777;cursor: pointer;	position:relative; font-size:13px;}
#fs li:hover, #fs li.selected {}
#button{padding:15px 30px !important; background:none !important; background-color:#f2f2f2 !important; font-size:20px;border:solid 1px #f2f2f2;  border-radius:0px !important; font-weight:700; margin:20px 0 0 0px;}
#button:hover{background-color:#fff !important; cursor:pointer; color:#c00;border:solid 1px #ccc; }
.dashed{margin:0 3px;}
</style>
<div id="customorderdiv" class="section">
<p style="margin:10px 0 20px 7px; font-size:13px;"><a href="?id=106" style="color:#000000;">Оформление нового индивидуального заказа на цифровую печать</a></p>
<ul class="tabs">
	<li><a href="?id=2">Продукты</a></li>
	<li class="current"><a href="?id=106">Индивидуальный заказ</a></li>
	<li><a href="?id=71">Цифровая печать</a></li>
	<li><a href="?id=100">Широкоформатная печать</a></li>
    </ul>
<form action="?id=107" method="post" enctype="multipart/form-data" name="customorder" id="customorder">
<table border="0">
  <tr>
    <td valign="top"><div class="orderform_caption"><table width="0" border="0"><tr><td><span class="number">1</span></td><td>Параметры заказа</td></tr></table></div></td>
    <td><div id="indzak">
      <p><label class="label200" for="density">Плотность бумаги:</label>
      <select name="density" id="density" onChange="calculate()">
       <option value="80">80 г/м<sup>2</sup> офсет</option><option value="90">90 г/м<sup>2</sup> мел</option><option value="115">115 г/м<sup>2</sup> мел</option><option value="130">130 г/м<sup>2</sup> мел</option><option value="150">150 г/м<sup>2</sup> мел</option><option value="170">170 г/м<sup>2</sup> мел</option><option value="200">200 г/м<sup>2</sup> мел</option><option value="250">250 г/м<sup>2</sup> мел</option><option value="300">300 г/м<sup>2</sup> мел</option><option value="350">350 г/м<sup>2</sup> мел</option><option value="_icelite">Лен Icelite 300 г/м<sup>2</sup></option><option value="_dali_c">Dali candido 285 г/м<sup>2</sup></option><option value="_dali_b">Dali bianco 285 г/м<sup>2</sup></option><option value="_stardream_c">Stardream crystal 285 г/м<sup>2</sup></option><option value="_stardream_o">Stardream opal 285 г/м<sup>2</sup></option><option value="_stardream_d">Stardream diamond 285 г/м<sup>2</sup></option> 
    </select></p>
<p><label class="label200" for="color">Сторонность печати:</label>  <select name="color" id="color">
    <option value="1">односторонняя 4+0</option>
    <option value="2">двусторонняя 4+4</option>
</select></p>
<p><label class="label200" for="tirazh">Тираж:</label><input type="text" value="100" name="tirazh" id="tirazh" onkeyup="if (typeof loadTimer != 'undefined') clearTimeout(loadTimer);  loadTimer=setTimeout('calculate()', 1100);">  шт. <a href="?id=30">тираж больше 1000 шт. >></a></p>
<p><label class="label200" for="">Формат</label> <a href="#" id="a3" class="dashed">A3</a> <a href="#" id="a4" class="dashed">A4</a> <a href="#" id="a5" class="dashed">A5</a> <a href="#" id="a6" class="dashed">A6</a> <a href="#" id="a7" class="dashed">A7</a> <a href="#" id="a8" class="dashed">A8</a> <a href="#" id="euro" class="dashed">Еврофлаер</a> <a href="#" id="euro2" class="dashed">2ЕВРО</a> </p>
<p style="clear:both;"><label class="label200" for="width">Ширина (от 45 до 438):</label>  <input name="width" type="text" value="45" id="width" onkeyup="if (typeof loadTimer != 'undefined') clearTimeout(loadTimer);  loadTimer=setTimeout('calculate()', 1100);" /> мм</p>
<p><label class="label200" for="height">Высота (от 50 до 308):</label>  <input name="height" type="text" value="50" id="height" onkeyup="if (typeof loadTimer != 'undefined') clearTimeout(loadTimer);  loadTimer=setTimeout('calculate()', 1100);" /> мм</p>
<p><label class="label200" for="cost"><strong>Стоимость печати:</strong></label>  <input name="cost" id="cost" type="text" value="0.00" readonly style="border:none; font-size:14px; font-weight:bold; text-align:right;"/><strong> грн.</strong></p>
</div></td>
  </tr>
  <tr>
    <td valign="top"><div class="orderform_caption"><table width="0" border="0"><tr><td><span class="number">2</span></td><td>Послепечатные работы</td></tr></table></div></td>
    <td><table width="100%" border="0">
  <tr>
    <td nowrap="nowrap"><select name="laminat" id="laminat" onChange="calculate()" title="Ламинация доступна для плотностей более 200 г/м2">
      <option value="0">без ламинации</option>
      <option value="7">глянцевая ламинация 1+0</option>
      <option value="8">глянцевая ламинация 1+1</option>
      <option value="9">матовая ламинация 1+0</option>
      <option value="10">матовая ламинация 1+1</option>
</select></td>
    <td></td>
  </tr>
  <tr style="display:none;">
    <td><input name="krug" type="checkbox" id="krug" value="3" />
      <label for="krug"> Закругление углов</label></td>
    <td><div id="krugparam"><label for="krug"><strong>+ 60 грн.</strong> за 1000 шт.</label>
    </div></td>
  </tr>
  <tr>
    <td width="220" nowrap="nowrap"><input name="bigovka" type="checkbox" id="bigovka" value="3" /> <label for="bigovka">Биговка (канавка для сгиба):</label></td>
    <td><div id="bigparam"><select name="creasing" id="creasing">
        <option value="1">1 биг</option>
        <option value="2">2 бига</option>
        <option value="3">3 бига</option>
        <option value="4">4 бига</option>
        <option value="5">5 бигов</option>
		</select> 100.00 грн. за 1000</div>
      </td>
  </tr>
  <tr>
  <td width="1" nowrap="nowrap"><input name="falccheck" type="checkbox" id="falccheck" value="3" /> <label for="falccheck">Фальцовка (сгиб):</label></td>
    <td><div id="falcparam"><select name="falcing" id="falcing" >
        <option value="1">1 фальц</option>
        <option value="2">2 фальца</option>
        <option value="3">3 фальца</option>
        <option value="4">4 фальца</option>
        <option value="5">5 фальца</option>
		</select> 100.00 грн. за 1000</div>
      </td>
  </tr>
<tr><td><input name="perf" type="checkbox" id="perf" value="3" />
    <label for="perf"> Перфорация:</label></td>
    <td><div id="perfp"><select name="perforation" id="perforation">
        <option value="1">1 проход</option>
        <option value="2">2 прохода</option>
        <option value="3">3 прохода</option>
        <option value="4">4 прохода</option>
        <option value="5">5 проходов</option>
        <option value="6">6 проходов</option>
        <option value="7">7 проходов</option>
        <option value="8">8 проходов</option>
        <option value="9">9 проходов</option>
    </select> 100.00 грн. за 1000</div></td>
  </tr>
  <tr><td><input name="porezka" type="checkbox" id="porezka" value="3" /><label for="porezka"> Порезка (мин 50х45мм):</label></td>
    <td><div id="cuttings"><select name="cutting" id="cutting">
        <option value="1">1 рез</option>
        <option value="2">2 реза</option>
        <option value="3">3 реза</option>
        <option value="4">4 реза</option>
        <option value="5">5 резов</option>
    </select> 20.00 грн. за 1000</div>
    </td></tr>
  <tr><td nowrap="nowrap"><input name="drilling" type="checkbox" id="drilling" value="1" />      <label for="drilling"> Сверление</label></td>    <td><div id="drillingparam">
    <select name="drillingn" id="drillingn">
        <option value="1">1 дырка </option>
        <option value="2">2 дырки </option>
    </select>
    <label for="drilling">50 грн. за 1000 шт.</label></div></td>
  </tr>
  </table></td>
  </tr>
  <tr>
    <td valign="top"><div class="orderform_caption"><table width="0" border="0"><tr><td><span class="number">3</span></td><td>Оригинал-макет</td></tr></table></div></td>
    <td>
     <ul id="fs">
        <li class="selected"><label for="showform2"><input type="radio" name="maket" id="showform2" value="form" checked="checked" /> загрузить файлы</label></li>
        <li><label for="showlink2"><input type="radio" name="maket" id="showlink2" value="link" /> дать ссылку на скачивание файлов</label></li>
	</ul>
<div id="maketform2">
  	<strong>лицевая сторона (или обе):</strong>
    <div id="file-twoside-face"><noscript><h1>Включите Javascript в вашем браузере.</h1></noscript></div>
  	<strong>обратная сторона:</strong>
    <div id="file-twoside-back"><noscript><h1>Включите Javascript в вашем браузере.</h1></noscript></div>
</div>
<div id="maketlink2">
<p>Назовите ваши файлы следующими именами: <strong>odessa_(5793-2254309)_project_digital-face</strong> и <strong>odessa_(5793-2254309)_project_digital-back</strong></p>
<p><label for="face2_3" class="label200">лицевая сторона (или обе): </label><input name="face2_3" type="text" size="100"/></p>
<p><label for="back2_3" class="label200">обратная сторона: </label><input name="back2_3" type="text" size="100" /></p>
<p><input name="ftp" type="checkbox" id="ftp2" value="1" /> <label for="ftp2"> Макет на FTP Cборки</label></p>
</div>
<span id="inserthere"></span>
<span id="inserthere2"></span>
<span id="inserthere3"></span>
<link href="../js/fileuploader.css" rel="stylesheet" type="text/css" />	
<script src="../js/fileuploader.js" type="text/javascript"></script>
<script type="text/javascript">        
function createUploader(uploader_id, uploader_recname,writeinput1){
    var uploader = new qq.FileUploader({
    element: document.getElementById(uploader_id),
        action: uploader_recname,
		onComplete:function(id, fileName, responseJSON) {
 		  var filenameServer = responseJSON['upoadedfile']; 
		  $('#inserthere').html('<input type="hidden" name="'+writeinput1+'" value="'+filenameServer+'">');
		}
    });
}
function createUploader2(uploader_id, uploader_recname,writeinput1){
    var uploader = new qq.FileUploader({
    element: document.getElementById(uploader_id),
        action: uploader_recname,
		onComplete:function(id, fileName, responseJSON) {
 		  var filenameServer = responseJSON['upoadedfile']; 
		  $('#inserthere2').html('<input type="hidden" name="'+writeinput1+'" value="'+filenameServer+'">');
		}
    });
}
function createUploader3(uploader_id, uploader_recname,writeinput1){
    var uploader = new qq.FileUploader({
    element: document.getElementById(uploader_id),
        action: uploader_recname,
		onComplete:function(id, fileName, responseJSON) {
 		  var filenameServer = responseJSON['upoadedfile']; 
		  $('#inserthere3').html('<input type="hidden" name="'+writeinput1+'" value="'+filenameServer+'">');
		}
    });
} 

function init(){
    createUploader('file-twoside-face', '../js/fileuploader.php?RecommendedName=odessa_(5793-2254309)_project_digital-face','twoside-face');
    createUploader2('file-twoside-back', '../js/fileuploader.php?RecommendedName=odessa_(5793-2254309)_project_digital-back','twoside-back');
    createUploader3('file-preview', '../js/fileuploader.php?RecommendedName=odessa_(5793-2254309)_project_digital-preview&type=preview','previewfile');
}
window.onload = init;
</script>
</td>
  </tr>
  <tr>
    <td valign="top"><div class="orderform_caption"><table width="0" border="0"><tr><td><span class="number">4</span></td><td>Название вашего заказа</td></tr></table></div></td>
    <td><input name="title" type="text" id="title" value="" style="width:95%; padding:5px; font-size:13px;"/></td>
  </tr>
  <tr>
    <td valign="top"><div class="orderform_caption"><table width="0" border="0"><tr><td><span class="number">5</span></td><td>Способ доставки</td></tr></table></div></td>
    <td><select name="address" id="addresses"><option title="0.70" id="sposob21335" value="21335" selected="selected" rel="2" /> <strong>ТОВ Нова пошта</strong> Склад №22. <i>Адрес:</i> Одесская обл., г. Одесса, вул. Новосельського, 19 . <i>Получатель:</i> Попович Константин Викторович, <i>тел.:</i> +380937847105</option></select>
		<p id="pself"><input type="checkbox" value="1" name="selfpay" id="selfpay"/> <label for="selfpay">оплата за счет получателя</label></p>
		<link rel="stylesheet" type="text/css" href="../js/chosen/chosen.css" />
		<script src="../js/chosen/chosen.jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#addresses').chosen();
			});
		</script><script type="text/javascript">
			$(document).ready(function(){
				$('#addresses').change(function(){
					if ($('#addresses option:selected').attr('rel')==4) {
						$('#selfpay').removeAttr('checked','checked');
						$('#pself').css('display', 'none');
					}else {
						$('#pself').css('display', 'block');
					}
					if ($('#addresses option:selected').attr('rel')==13) {
						$('#inko').show('fast');
						$('#inkognito').attr('value','1');	
						$('#selfpay').attr('checked','checked');
						$('#selfpay').attr('disabled','disabled');
					}else if($('#addresses option:selected').attr('rel')==5) {
						$('#selfpay').removeAttr('checked','checked');
						$('#selfpay').attr('disabled','disabled');
						$('#inko').hide('fast');	
						$('#inkognito').attr('value','0');						
					}else{ 
						$('#inko').hide('fast');	
						$('#inkognito').attr('value','0');						
						$('#selfpay').removeAttr('disabled','disabled');
					}
					if ($('#selfpay').is(':checked')) {
						$('#poshtacost,#poshtacost2,#deliverycost').html('0.00');
					}else{ 
						$('#poshtacost,#poshtacost2,#deliverycost').html($('#addresses option:selected').attr('title'));
					}
					calculate();
				})
				.change();
				$('#selfpay').change(function(){
					if ($('#selfpay').is(':checked')) {
						$('#poshtacost,#poshtacost2,#deliverycost').html('0.00');
					}else{ 
						$('#poshtacost,#poshtacost2,#deliverycost').html($('#addresses option:selected').attr('title'));
					}
					calculate();
				})
				.change();
			});
			</script><p><a href="#newaddress" class="window dashed">Добавить новый способ доставки</a></p></td>
  </tr>
  <tr>
    <td valign="top"><div class="orderform_caption"><table width="0" border="0"><tr><td><span class="number">6</span></td><td>Предпросмотр и комментарий</td></tr></table></div></td>
    <td><div id="file-preview"><noscript><h1>Включите Javascript в вашем браузере.</h1></noscript></div>
    <textarea name="comment_client" id="comment_client" cols="45" rows="3"></textarea></td>
  </tr>
  <tr>
    <td valign="top"></td>
    <td><table border="0" cellspacing="5" cellpadding="5">
      <tr><td>Дата готовности:</td><td> 3 июля 2015, Пятница</td></tr>
      <tr><td>Печать:</td><td><span id="cost2">0</span> грн.</td></tr>
      <tr><td>Постпресс:</td><td><span id="costdop2">0</span> грн.</td></tr>
      <tr><td>Доставка:</td><td><span id="poshtacost">0.00</span> грн.</td></tr>
      <tr><td valign="top" style="text-transform:uppercase; font-weight:700; padding-top:15px;">ИТОГО</td>
        <td style="text-transform:uppercase; font-weight:700; padding-top:15px;"> <span id="totalcost">0</span> грн.</td>
      </tr>
      <tr><td colspan="2"><input type="submit" name="button" id="button" value="оформить заказ" /></td></tr>
    </table></td>
  </tr>
</table>

<input name="check" type="hidden" value="123" />
<input name="filename" type="hidden" value="odessa_(5793-2254309)_project_digital" />  
<input name="neworderid" type="hidden" value="2254309" />
<input name="userfilename" id="userfilename" type="hidden" value="" />

<input name="dop_curve" id="dop_curve" type="hidden" value="0" />
<input name="dop_bigovka" id="dop_bigovka" type="hidden" value="0" />
<input name="dop_falc" id="dop_falc" type="hidden" value="0" />
<input name="dop_perforation" id="dop_perforation" type="hidden" value="0" />
<input name="dop_porezka" id="dop_porezka" type="hidden" value="0" />
<input name="dop_drilling" id="dop_drilling" type="hidden" value="0" />
<input name="dop_laminat" id="dop_laminat" type="hidden" value="0" />
</form></div>
<script type="text/javascript">
$(document).ready(function(){
	calculate();
	
	$('#maketlink2,#krugparam,#bigparam,#falcparam,#perfp,#cuttings,#drillingparam,#numberingparam').hide()

	$("#krug").change(function(){
		if ($(this).attr("checked")) {
			$('#krugparam').show("fast");
		} else {
			$('#krugparam').hide("fast");
		}
		calculate();
	});
	
	$('#bigovka').change(function(){
		if($("#density").val()>169){
			if ($(this).attr("checked")) {
				$('#bigparam').show("fast");
				$('#falccheck').removeAttr('disabled');
			} else {
				$('#bigparam').hide("fast");
				$('#falcparam').hide("fast");
				$('#falccheck').attr('checked', false);
				$('#falccheck').attr('disabled', true);
			}
		}
		calculate();
	;}).change();
	$('#creasing,#perforation,#cutting,#drillingn,#falcing,#color,#laminat').change(function(){calculate();;})
	$('#falccheck').change(function(){
		if ($(this).attr("checked")) {
			$('#falcparam').show("fast");
		} else {
			$('#falcparam').hide("fast");
		}
		calculate();
	;})
	$('#perf').change(function(){
		if ($(this).attr("checked")) {
			$('#perfp').show("fast");
		} else {
			$('#perfp').hide("fast");
		}
		calculate();
	;})
	$('#porezka').change(function(){
		if ($(this).attr("checked")) {
			$('#cuttings').show("fast");
		} else {
			$('#cuttings').hide("fast");
		}
		calculate();
	;})
	$('#drilling').change(function(){
		if ($(this).attr("checked")) {
			$('#drillingparam').show("fast");
		} else {
			$('#drillingparam').hide("fast");
		}
		calculate();
	;})
	$('#numbering').change(function(){
		if ($(this).attr("checked")) {
			$('#numberingparam').show("fast");
		} else {
			$('#numberingparam').hide("fast");
		}
		calculate();
	;})
	
	$('#showform2').click(function(){$('#maketform2').show("fast"),$('#maketlink2').hide("fast")})
	$('#showlink2').click(function(){$('#maketlink2').show("fast"),$('#maketform2').hide("fast")})

	$("#density").change(function(){
		if ($(this).val()=='CK') {
			$("#color option[value='2']").remove();
		} else {
			if($("select[id=color] option").size()==1){
				$("#color").append( $('<option value="2">двусторонняя 4+4</option>'));
			}
		}
		if ($(this).val()=='CK') {
			$("#falccheck").removeAttr("checked");
			$("#falccheck").attr("disabled","disabled");
			$("#perf").removeAttr("checked");
			$("#perf").attr("disabled","disabled");
		} else {
			$("#falccheck").removeAttr("disabled","disabled");
			$("#perf").removeAttr("disabled","disabled");
		}
		if ($(this).val()<170 || $(this).val()=='CK') {
			$("#krug").removeAttr("checked");
			$("#krug").attr("disabled","disabled");
			$('#krugparam').hide("fast");
			$("#drilling").removeAttr("checked");
			$("#drilling").attr("disabled","disabled");
			$('#drillingparam').hide("fast");
			$("#bigovka").removeAttr("checked");
			$("#bigovka").attr("disabled","disabled");
			$('#bigparam').hide("fast");
		} else {
			$("#falccheck").attr("disabled","disabled");
			$('#falcparam').hide("fast");
			$("#krug").removeAttr("disabled","disabled");
			$("#drilling").removeAttr("disabled","disabled");
			$("#bigovka").removeAttr("disabled","disabled");
		}
		if ($(this).val()<200 || $(this).val()=='CK') {
			$("#laminat option[value='7']").remove();
			$("#laminat option[value='8']").remove();
			$("#laminat option[value='9']").remove();
			$("#laminat option[value='10']").remove();
		} else {
			if ($("#laminat option").size() < 3){
				$("#laminat").append( $('<option value="7">глянцевая ламинация 1+0</option><option value="8">глянцевая ламинация 1+1</option><option value="9">матовая ламинация 1+0</option><option value="10">матовая ламинация 1+1</option>'));
			}
		}
	}).change();
	
	$('#a2').click(function(){$('#width').attr("value","594"),$('#height').attr("value","420"),calculate()});
	$('#a3').click(function(){$('#width').attr("value","420"),$('#height').attr("value","297"),calculate()});
	$('#a4').click(function(){$('#width').attr("value","297"),$('#height').attr("value","210"),calculate()});
	$('#a5').click(function(){$('#width').attr("value","210"),$('#height').attr("value","148"),calculate()});
	$('#a6').click(function(){$('#width').attr("value","148"),$('#height').attr("value","105"),calculate()});
	$('#a7').click(function(){$('#width').attr("value","100"),$('#height').attr("value","70"),calculate()});
	$('#a8').click(function(){$('#width').attr("value","70"),$('#height').attr("value","50"),calculate()});
	$('#euro').click(function(){$('#width').attr("value","210"),$('#height').attr("value","99"),calculate()});
	$('#euro2').click(function(){$('#width').attr("value","198"),$('#height').attr("value","210"),calculate()});
	
})
</script>
<script type="text/javascript">
	function array_search( needle, haystack, strict ) {	
		var strict = !!strict;
	
		for(var key in haystack){
			if( (strict && haystack[key] === needle) || (!strict && haystack[key] == needle) ){
				return key;
			}
		}
		return false;
	}
	
	function calculate(){
				if ($('#width').val()<45) $('#width').val(45);
		if ($('#width').val()>438) $('#width').val(438);
		if ($('#height').val()<50) $('#height').val(50);
		if ($('#height').val()>308) $('#height').val(308);
		
		var width=parseInt($('#width').val());
		var height=parseInt($('#height').val());
		var tirazh=parseInt($('#tirazh').val());
	
		mult1=Math.floor(438/width) * Math.floor(308/height);
		mult2=Math.floor(438/height) * Math.floor(308/width);
		if(mult1>mult2){shtuk_na_list=mult1;}else{shtuk_na_list=mult2;}

		var discont = 1;
		var tirazhi = [1,5,10,15,20,50,100,150,200,500];
		var density = [80,90,115,130,150,170,200,250,300,350,'CK','_icelite','_dali_c','_dali_b','_stardream_c','_stardream_o','_stardream_d'];
		var tirazhcost = {1:4.05,5:3.83,10:3.60,15:3.51,20:3.42,50:3.24,100:3.15,150:3.06,200:2.97,500:2.88,};
		var what_price_for_list=1;

		var listov_na_tirazh = Math.ceil(tirazh/shtuk_na_list);

		for(var i=0; i<tirazhi.length; i++) {
			var nnn = +array_search(tirazhi[i], tirazhi) + +1;
			if (listov_na_tirazh == tirazhi[i] || (listov_na_tirazh > tirazhi[i] && listov_na_tirazh < tirazhi[nnn]) ){
				what_price_for_list=tirazhi[i];
			}
		}
		var cost=0;
		var post=0;
		var format = [];
		format['80'] = 0.63
		format['90'] = 0.63
		format['115'] = 0.68
		format['130'] = 0.77
		format['150'] = 0.90
		format['170'] = 1.04
		format['200'] = 1.22
		format['250'] = 1.58
		format['300'] = 1.89
		format['350'] = 2.48
		format['CK'] = 3.42
		format['_icelite'] = 8.15
		format['_dali_c'] = 10.55
		format['_dali_b'] = 10.55
		format['_stardream_c'] = 20.70
		format['_stardream_o'] = 20.70
		format['_stardream_d'] = 20.70
				var format2 = tirazhcost[what_price_for_list];
		
		cost=((+format[$('#density').val()]+ +format2*parseInt($('#color').val()))*listov_na_tirazh*discont);
		
		if ($('#krug').attr("checked")) {
			$('#dop_curve').val($('#tirazh').val()*0.060);
		}else{
			$('#dop_curve').val(0);
		}
		if ($('#bigovka').attr("checked")) {
			$('#dop_bigovka').val($('#tirazh').val()*$('#creasing').val()*0.100);
		}else{
			$('#dop_bigovka').val(0);
			$('#dop_falc').attr('value','0');
		}
		if ($('#falccheck').attr("checked")) {
			if ($("#density").val()<250){
				$('#dop_falc').val($('#tirazh').val()*$('#falcing').val()*0.100);
			}else{
				$('#dop_falc').val($('#tirazh').val()*$('#creasing').val()*0.100);
			}
		} else {
			$('#dop_falc').attr('value','0');
		}
		if ($('#perf').attr("checked")) {
			$('#dop_perforation').val($('#tirazh').val()*$('#perforation').val()*0.100);
		} else {
			$('#dop_perforation').val(0);
		}
		if ($('#porezka').attr("checked")) {
			$('#dop_porezka').val($('#tirazh').val()*$('#cutting').val()*0.020);
		} else {
			$('#dop_porezka').attr('value','0');
		}
		if ($("#drilling").attr("checked")) {
			$('#dop_drilling').val($('#tirazh').val()*$('#drillingn').val()*0.050);
		}else{
			$('#dop_drilling').val(0);
		}
		if ($("#laminat").val()==7) {
			$('#dop_laminat').val(listov_na_tirazh*2.000);
		}else if ($("#laminat").val()==8) {
			$('#dop_laminat').val(listov_na_tirazh*4.000);
		}else if ($("#laminat").val()==9) {
			$('#dop_laminat').val(listov_na_tirazh*2.500);
		}else if ($("#laminat").val()==10) {
			$('#dop_laminat').val(listov_na_tirazh*5.000);
		}else{
			$('#dop_laminat').val(0);
		}
	
		var All=document.forms.customorder;
		for(var i = 0; i < All.elements.length; ++i){
			if(All.elements[i].name.substr(0,4)=='dop_'){
				post = post + parseFloat(All.elements[i].value);
			}
		}
		if ($('#addresses option:selected').attr('rel')==13 || $('#addresses option:selected').attr('rel')==1 || $('#addresses option:selected').attr('rel')==4) {
			var delivery = 0;
		}else if ($('#addresses option:selected').attr('rel')==5 || $('#addresses option:selected').attr('rel')==7) {
			if (cost>200){
				var delivery = 0;
			}else{
				var delivery = 30;
			}
		}else{
			if ($('#selfpay').is(':checked')) {
				var delivery = 0;
			}else{ 
				var delivery = (( +cost + +post) *0.07).toFixed(2);
			}
		}
		$('#cost').val(cost.toFixed(2));
		$('#costdop').val(post.toFixed(2));
		$('#cost2').html(cost.toFixed(2));
		$('#costdop2').html(post.toFixed(2));
		$('#poshtacost').html(delivery.toFixed(2));
		$('#totalcost').html((+delivery+post+cost).toFixed(2));
		
	};

	$(window).keypress(function (e) {
		if (e.which == 13 && e.ctrlKey ) $("#customorder").submit();
	}); 
</script>
<div style="display:none;" id="hiddendivs">
	<div id="newaddress" style="padding:20px;">
	<h3 class="new">Добавление нового адреса доставки</h3>
	<form action="" enctype="multipart/form-data" method="post" id="newaddressform">
		<p><input name="sposob" id="sposob4" type="radio" value="4" /> <label for="sposob4"> Самовывоз со склада в Киеве (ул. Сырецкая, 28/2)</label></p>
		<p><input name="sposob" id="sposob5" type="radio" value="5"/><label for="sposob5"> Курьерская доставка по Киеву</label></p>
		<div id="courier_kiev" style="margin-left:20px; display:none;">
            <p><label class="label100">район: </label><select name="district_kiev">
            <option value="0">Выберите</option><option value="1">Голосеевский</option><option value="2">Дарницкий</option><option value="3">Днепровский</option><option value="4">Деснянский</option><option value="5">Оболонский</option><option value="6">Печерский</option><option value="7">Подольский</option><option value="8">Святошинский</option><option value="9">Соломенский</option><option value="10">Шевченковский</option>            </select></p>
            <p><label class="label100">Адрес: </label><input name="courier_address_kiev" type="text" id="courier_address_kiev" size="50" /></p>
            <p><label class="label100">Получатель:</label><input name="courier_name_kiev" type="text" id="courier_name_kiev" size="50" /></p>
            <p><label class="label100">Телефон: </label><input name="courier_tel_kiev" type="text" id="courier_tel_kiev" size="50" /></p>
            <p><label class="label100">Дополнительно: </label><input name="courier_add_kiev" type="text" id="courier_add_kiev" size="50" /></p>
		</div>
		<p><input name="sposob" id="sposob2" type="radio" value="2" /> <label for="sposob2"> Доставка ТОВ &laquo;Нова Пошта&raquo;</label></p>
		<div id="newposhta" style="margin-left:20px; display:none;">
			<h3>Обратите внимание, если ваши заказы будут тяжелее 30 кг, то не все отделения смогут принять его.</h3>
			<p><label class="label100">город: </label><select name="selectCity" id="selectCityx">
			<optgroup label="Винницкая обл."><option value="9910" style="padding-left:20px;">Бар</option><option value="9911" style="padding-left:20px;">Бершадь</option><option value="9914" style="padding-left:20px;">Вапнярка</option><option value="9916" style="padding-left:20px;">Винница</option><option value="9917" style="padding-left:20px;">Вороновица</option><option value="9918" style="padding-left:20px;">Гайсин</option><option value="9919" style="padding-left:20px;">Гнивань</option><option value="9921" style="padding-left:20px;">Жмеринка</option><option value="9922" style="padding-left:20px;">Ильинцы</option><option value="9923" style="padding-left:20px;">Казатин</option><option value="9924" style="padding-left:20px;">Калиновка</option><option value="9925" style="padding-left:20px;">Крыжополь</option><option value="15789535" style="padding-left:20px;">Ладижин</option><option value="9926" style="padding-left:20px;">Липовец</option><option value="9927" style="padding-left:20px;">Литин</option><option value="9928" style="padding-left:20px;">Могилев-Подольский</option><option value="9929" style="padding-left:20px;">Мурованные Куриловцы</option><option value="9930" style="padding-left:20px;">Немиров</option><option value="9931" style="padding-left:20px;">Оратов</option><option value="9932" style="padding-left:20px;">Песчанка</option><option value="9933" style="padding-left:20px;">Погребище</option><option value="15789645" style="padding-left:20px;">Рахны-Лисовые</option><option value="15789639" style="padding-left:20px;">Сутиски</option><option value="9934" style="padding-left:20px;">Теплик</option><option value="9935" style="padding-left:20px;">Томашполь</option><option value="9936" style="padding-left:20px;">Тростянец</option><option value="9937" style="padding-left:20px;">Тульчин</option><option value="15789613" style="padding-left:20px;">Турбов</option><option value="9939" style="padding-left:20px;">Хмельник</option><option value="15789606" style="padding-left:20px;">Черновцы</option><option value="9940" style="padding-left:20px;">Чечельник</option><option value="9941" style="padding-left:20px;">Шаргород</option><option value="9942" style="padding-left:20px;">Ямполь</option></optgroup><optgroup label="Волынская обл."><option value="9945" style="padding-left:20px;">Владимир-Волынский</option><option value="9948" style="padding-left:20px;">Горохов</option><option value="9949" style="padding-left:20px;">Заболотье</option><option value="9950" style="padding-left:20px;">Иваничи</option><option value="9951" style="padding-left:20px;">Камень-Каширский</option><option value="9952" style="padding-left:20px;">Киверцы</option><option value="9953" style="padding-left:20px;">Ковель</option><option value="15789575" style="padding-left:20px;">Колки</option><option value="9954" style="padding-left:20px;">Локачи</option><option value="9955" style="padding-left:20px;">Луцк</option><option value="9956" style="padding-left:20px;">Любешов</option><option value="9957" style="padding-left:20px;">Любомль</option><option value="9958" style="padding-left:20px;">Маневичи</option><option value="9959" style="padding-left:20px;">Нововолынск</option><option value="9960" style="padding-left:20px;">Ратно</option><option value="9961" style="padding-left:20px;">Рожище</option><option value="9962" style="padding-left:20px;">Старая Выжевка</option><option value="9963" style="padding-left:20px;">Турийск</option><option value="15789600" style="padding-left:20px;">Шацк</option></optgroup><optgroup label="Днепропетровская обл."><option value="9965" style="padding-left:20px;">Апостолово</option><option value="9968" style="padding-left:20px;">Васильковка</option><option value="9969" style="padding-left:20px;">Верхнеднепровск</option><option value="9970" style="padding-left:20px;">Верховцево</option><option value="9971" style="padding-left:20px;">Вольногорск</option><option value="15789648" style="padding-left:20px;">Голубовка</option><option value="15789569" style="padding-left:20px;">Днепровское</option><option value="9976" style="padding-left:20px;">Днепродзержинск</option><option value="9977" style="padding-left:20px;">Днепропетровск</option><option value="9978" style="padding-left:20px;">Желтые Воды</option><option value="15789547" style="padding-left:20px;">Зеленодольск</option><option value="9985" style="padding-left:20px;">Кривой Рог</option><option value="9986" style="padding-left:20px;">Кринички</option><option value="15789643" style="padding-left:20px;">Лозоватка</option><option value="9987" style="padding-left:20px;">Магдалиновка</option><option value="9988" style="padding-left:20px;">Марганец</option><option value="9989" style="padding-left:20px;">Межевая</option><option value="15789550" style="padding-left:20px;">Николаевка</option><option value="9990" style="padding-left:20px;">Никополь</option><option value="9991" style="padding-left:20px;">Новомосковск</option><option value="9992" style="padding-left:20px;">Орджоникидзе</option><option value="9993" style="padding-left:20px;">Павлоград</option><option value="15789587" style="padding-left:20px;">Перещепино</option><option value="4156678" style="padding-left:20px;">Першотравенск</option><option value="9994" style="padding-left:20px;">Петропавловка</option><option value="15789599" style="padding-left:20px;">Подгородное</option><option value="9995" style="padding-left:20px;">Покровское</option><option value="9996" style="padding-left:20px;">Пятихатки</option><option value="9997" style="padding-left:20px;">Синельниково</option><option value="9998" style="padding-left:20px;">Софиевка</option><option value="15789540" style="padding-left:20px;">Терновка</option><option value="9999" style="padding-left:20px;">Томаковка</option><option value="10000" style="padding-left:20px;">Царичанка</option><option value="10001" style="padding-left:20px;">Широкое</option></optgroup><optgroup label="Донецкая обл."><option value="10009" style="padding-left:20px;">Артемовск</option><option value="10012" style="padding-left:20px;">Белицкое</option><option value="10015" style="padding-left:20px;">Великая Новоселка</option><option value="10017" style="padding-left:20px;">Волноваха</option><option value="10018" style="padding-left:20px;">Володарское</option><option value="10025" style="padding-left:20px;">Дзержинск</option><option value="10026" style="padding-left:20px;">Димитров</option><option value="10027" style="padding-left:20px;">Доброполье</option><option value="10033" style="padding-left:20px;">Дружковка</option><option value="10501179" style="padding-left:20px;">Константиновка</option><option value="10043" style="padding-left:20px;">Краматорск</option><option value="10044" style="padding-left:20px;">Красноармейск</option><option value="10045" style="padding-left:20px;">Красный Лиман</option><option value="15789536" style="padding-left:20px;">Курахово</option><option value="15789552" style="padding-left:20px;">Мангуш</option><option value="10047" style="padding-left:20px;">Мариуполь</option><option value="15789551" style="padding-left:20px;">Николаевка</option><option value="15789616" style="padding-left:20px;">Новогродовка</option><option value="15789593" style="padding-left:20px;">Святогорск</option><option value="10052" style="padding-left:20px;">Селидово</option><option value="10053" style="padding-left:20px;">Славянск</option><option value="15789617" style="padding-left:20px;">Соледар</option><option value="15789531" style="padding-left:20px;">Угледар</option><option value="10059" style="padding-left:20px;">Шахтерск</option></optgroup><optgroup label="Житомирская обл."><option value="10062" style="padding-left:20px;">Андрушевка</option><option value="10063" style="padding-left:20px;">Барановка</option><option value="10065" style="padding-left:20px;">Бердичев</option><option value="10067" style="padding-left:20px;">Брусилов</option><option value="10070" style="padding-left:20px;">Володарск-Волынский</option><option value="10075" style="padding-left:20px;">Емильчино</option><option value="10076" style="padding-left:20px;">Житомир</option><option value="15789571" style="padding-left:20px;">Иршанск</option><option value="10079" style="padding-left:20px;">Коростень</option><option value="10080" style="padding-left:20px;">Коростышев</option><option value="15789577" style="padding-left:20px;">Красноармейск</option><option value="10081" style="padding-left:20px;">Лугины</option><option value="10082" style="padding-left:20px;">Любар</option><option value="10083" style="padding-left:20px;">Малин</option><option value="10084" style="padding-left:20px;">Народичи</option><option value="10085" style="padding-left:20px;">Новоград-Волынский</option><option value="10086" style="padding-left:20px;">Овруч</option><option value="10087" style="padding-left:20px;">Олевск</option><option value="10088" style="padding-left:20px;">Попельня</option><option value="10089" style="padding-left:20px;">Радомышль</option><option value="10090" style="padding-left:20px;">Ружин</option><option value="10092" style="padding-left:20px;">Черняхов</option><option value="10093" style="padding-left:20px;">Чуднов</option></optgroup><optgroup label="Закарпатская обл."><option value="10095" style="padding-left:20px;">Берегово</option><option value="10097" style="padding-left:20px;">Великий Березный</option><option value="10098" style="padding-left:20px;">Великий Бычков</option><option value="10099" style="padding-left:20px;">Виноградов</option><option value="10100" style="padding-left:20px;">Воловец</option><option value="15789647" style="padding-left:20px;">Вышково</option><option value="15789651" style="padding-left:20px;">Долгое</option><option value="10101" style="padding-left:20px;">Иршава</option><option value="10102" style="padding-left:20px;">Межгорье</option><option value="10103" style="padding-left:20px;">Мукачево</option><option value="15789543" style="padding-left:20px;">Нижние Ворота</option><option value="10104" style="padding-left:20px;">Перечин</option><option value="10105" style="padding-left:20px;">Рахов</option><option value="10106" style="padding-left:20px;">Свалява</option><option value="15789604" style="padding-left:20px;">Солотвино</option><option value="15789628" style="padding-left:20px;">Среднее</option><option value="10107" style="padding-left:20px;">Тячев</option><option value="10108" style="padding-left:20px;">Ужгород</option><option value="10109" style="padding-left:20px;">Хуст</option><option value="15789636" style="padding-left:20px;">Ясиня</option></optgroup><optgroup label="Запорожская обл."><option value="10112" style="padding-left:20px;">Акимовка</option><option value="10115" style="padding-left:20px;">Бердянск</option><option value="10116" style="padding-left:20px;">Васильевка</option><option value="10117" style="padding-left:20px;">Веселое</option><option value="15789533" style="padding-left:20px;">Вольнянск</option><option value="10118" style="padding-left:20px;">Гуляйполе</option><option value="15789528" style="padding-left:20px;">Днепрорудное</option><option value="10119" style="padding-left:20px;">Запорожье</option><option value="10120" style="padding-left:20px;">Каменка-Днепровская</option><option value="10123" style="padding-left:20px;">Куйбышево</option><option value="10124" style="padding-left:20px;">Мелитополь</option><option value="10125" style="padding-left:20px;">Михайловка</option><option value="10127" style="padding-left:20px;">Орехов</option><option value="10128" style="padding-left:20px;">Пологи</option><option value="10129" style="padding-left:20px;">Приазовское</option><option value="10130" style="padding-left:20px;">Приморск</option><option value="15789620" style="padding-left:20px;">Розовка</option><option value="10131" style="padding-left:20px;">Токмак</option><option value="2724870" style="padding-left:20px;">Энергодар</option></optgroup><optgroup label="Ивано-Франковская обл."><option value="10135" style="padding-left:20px;">Болехов</option><option value="10137" style="padding-left:20px;">Брошнев-Осада</option><option value="10139" style="padding-left:20px;">Бурштын</option><option value="10141" style="padding-left:20px;">Верховина</option><option value="10144" style="padding-left:20px;">Выгода</option><option value="10145" style="padding-left:20px;">Галич</option><option value="10147" style="padding-left:20px;">Городенка</option><option value="15789523" style="padding-left:20px;">Долина</option><option value="10150" style="padding-left:20px;">Заболотов</option><option value="10151" style="padding-left:20px;">Ивано-Франковск</option><option value="10153" style="padding-left:20px;">Калуш</option><option value="10154" style="padding-left:20px;">Коломыя</option><option value="10155" style="padding-left:20px;">Косов</option><option value="10156" style="padding-left:20px;">Надворна</option><option value="10157" style="padding-left:20px;">Надворная</option><option value="15789641" style="padding-left:20px;">Перегинское</option><option value="15789633" style="padding-left:20px;">Поляница</option><option value="10158" style="padding-left:20px;">Рогатин</option><option value="10159" style="padding-left:20px;">Рожнятов</option><option value="10160" style="padding-left:20px;">Снятын</option><option value="10162" style="padding-left:20px;">Тлумач</option><option value="10164" style="padding-left:20px;">Яремча</option></optgroup><optgroup label="Киевская обл."><option value="10166" style="padding-left:20px;">Барышевка</option><option value="10167" style="padding-left:20px;">Белая Церковь</option><option value="15789565" style="padding-left:20px;">Белогородка</option><option value="10168" style="padding-left:20px;">Березань</option><option value="10169" style="padding-left:20px;">Богуслав</option><option value="10170" style="padding-left:20px;">Борисполь</option><option value="10171" style="padding-left:20px;">Боровая</option><option value="10172" style="padding-left:20px;">Бородянка</option><option value="10499792" style="padding-left:20px;">Боярка</option><option value="10173" style="padding-left:20px;">Бровары</option><option value="15789545" style="padding-left:20px;">Буча</option><option value="10174" style="padding-left:20px;">Васильков</option><option value="15789522" style="padding-left:20px;">Вишневое</option><option value="10175" style="padding-left:20px;">Володарка</option><option value="7720010" style="padding-left:20px;">Вышгород</option><option value="15789614" style="padding-left:20px;">Глеваха</option><option value="10177" style="padding-left:20px;">Гребенки</option><option value="15789625" style="padding-left:20px;">Демидов</option><option value="10178" style="padding-left:20px;">Дымер</option><option value="10179" style="padding-left:20px;">Згуровка</option><option value="10180" style="padding-left:20px;">Иванков</option><option value="10181" style="padding-left:20px;">Ирпень</option><option value="10182" style="padding-left:20px;">Кагарлык</option><option value="10183" style="padding-left:20px;">Калиновка</option><option value="10184" style="padding-left:20px;">Киев</option><option value="15789572" style="padding-left:20px;">Клавдиево-Тарасово</option><option value="15789525" style="padding-left:20px;">Коцюбинское</option><option value="15789623" style="padding-left:20px;">Крюковщина</option><option value="10189" style="padding-left:20px;">Макаров</option><option value="15789527" style="padding-left:20px;">Мироновка</option><option value="15789581" style="padding-left:20px;">Немешаево</option><option value="15789582" style="padding-left:20px;">Новые Петровцы</option><option value="10190" style="padding-left:20px;">Обухов</option><option value="10191" style="padding-left:20px;">Переяслав-Хмельницкий</option><option value="15789630" style="padding-left:20px;">Петровское</option><option value="10193" style="padding-left:20px;">Ракитное</option><option value="15789607" style="padding-left:20px;">Ржищев</option><option value="10194" style="padding-left:20px;">Сквира</option><option value="4691664" style="padding-left:20px;">Славутич</option><option value="10195" style="padding-left:20px;">Ставище</option><option value="15789611" style="padding-left:20px;">Стоянка</option><option value="15789637" style="padding-left:20px;">Счастливое</option><option value="10196" style="padding-left:20px;">Тараща</option><option value="10197" style="padding-left:20px;">Тетиев</option><option value="15789612" style="padding-left:20px;">Узин</option><option value="15789544" style="padding-left:20px;">Украинка</option><option value="10198" style="padding-left:20px;">Фастов</option><option value="10200" style="padding-left:20px;">Яготин</option></optgroup><optgroup label="Кировоградская обл."><option value="10202" style="padding-left:20px;">Алексадровка</option><option value="10203" style="padding-left:20px;">Александрия</option><option value="10204" style="padding-left:20px;">Бобринец</option><option value="10205" style="padding-left:20px;">Гайворон</option><option value="10206" style="padding-left:20px;">Голованевск</option><option value="10207" style="padding-left:20px;">Добровеличковка</option><option value="10208" style="padding-left:20px;">Долинская</option><option value="10211" style="padding-left:20px;">Знаменка</option><option value="10214" style="padding-left:20px;">Кировоград</option><option value="10215" style="padding-left:20px;">Компанеевка</option><option value="10216" style="padding-left:20px;">Малая Виска</option><option value="10217" style="padding-left:20px;">Новгородка</option><option value="10218" style="padding-left:20px;">Новоархангельск</option><option value="10219" style="padding-left:20px;">Новомиргород</option><option value="10220" style="padding-left:20px;">Новоукраинка</option><option value="10221" style="padding-left:20px;">Ольшанка</option><option value="10222" style="padding-left:20px;">Онуфриевка</option><option value="10223" style="padding-left:20px;">Петрово</option><option value="15789559" style="padding-left:20px;">Побугское</option><option value="15789561" style="padding-left:20px;">Помошная</option><option value="10224" style="padding-left:20px;">Светловодск</option><option value="15789592" style="padding-left:20px;">Смолино</option><option value="10225" style="padding-left:20px;">Ульяновка</option></optgroup><optgroup label="Крымская обл."></optgroup><optgroup label="Луганская обл."><option value="10265" style="padding-left:20px;">Беловодск</option><option value="10268" style="padding-left:20px;">Белокуракино</option><option value="10269" style="padding-left:20px;">Белолуцк</option><option value="10284" style="padding-left:20px;">Горское</option><option value="10286" style="padding-left:20px;">Зимогорье</option><option value="10297" style="padding-left:20px;">Кременная</option><option value="10298" style="padding-left:20px;">Лисичанск</option><option value="10301" style="padding-left:20px;">Марковка</option><option value="10302" style="padding-left:20px;">Меловое</option><option value="10303" style="padding-left:20px;">Новоайдар</option><option value="10304" style="padding-left:20px;">Новопсков</option><option value="15789618" style="padding-left:20px;">Родаково</option><option value="10309" style="padding-left:20px;">Рубежное</option><option value="10310" style="padding-left:20px;">Сватово</option><option value="10312" style="padding-left:20px;">Северодонецк</option><option value="10313" style="padding-left:20px;">Славяносербск</option><option value="10315" style="padding-left:20px;">Старобельск</option><option value="10317" style="padding-left:20px;">Троицкое</option></optgroup><optgroup label="Львовская обл."><option value="10321" style="padding-left:20px;">Борислав</option><option value="10322" style="padding-left:20px;">Броды</option><option value="15789635" style="padding-left:20px;">Брюховичи</option><option value="10323" style="padding-left:20px;">Буск</option><option value="10326" style="padding-left:20px;">Винники</option><option value="15789554" style="padding-left:20px;">Городок</option><option value="15789622" style="padding-left:20px;">Добромиль</option><option value="10330" style="padding-left:20px;">Добротвор</option><option value="10331" style="padding-left:20px;">Дрогобыч</option><option value="10332" style="padding-left:20px;">Жидачов</option><option value="15789529" style="padding-left:20px;">Жовква</option><option value="10334" style="padding-left:20px;">Золочев</option><option value="10336" style="padding-left:20px;">Каменка-Бугская</option><option value="10337" style="padding-left:20px;">Львов</option><option value="15789621" style="padding-left:20px;">Малехов</option><option value="15789594" style="padding-left:20px;">Моршин</option><option value="10338" style="padding-left:20px;">Мостиска</option><option value="10340" style="padding-left:20px;">Николаев (Львовская обл)</option><option value="15789530" style="padding-left:20px;">Новояворовск</option><option value="15789566" style="padding-left:20px;">Новый Раздол</option><option value="10341" style="padding-left:20px;">Перемышляны</option><option value="10342" style="padding-left:20px;">Пустомыты</option><option value="10344" style="padding-left:20px;">Радехов</option><option value="10345" style="padding-left:20px;">Самбор</option><option value="10346" style="padding-left:20px;">Сколе</option><option value="15789650" style="padding-left:20px;">Славское</option><option value="10347" style="padding-left:20px;">Сокаль</option><option value="15789601" style="padding-left:20px;">Сосновка</option><option value="10348" style="padding-left:20px;">Старый Самбор</option><option value="10349" style="padding-left:20px;">Стрый</option><option value="10350" style="padding-left:20px;">Трускавец</option><option value="10351" style="padding-left:20px;">Турка</option><option value="15789541" style="padding-left:20px;">Ходоров</option><option value="15789615" style="padding-left:20px;">Хыров</option><option value="10352" style="padding-left:20px;">Червоноград</option><option value="10353" style="padding-left:20px;">Яворов</option></optgroup><optgroup label="Николаевская обл."><option value="10355" style="padding-left:20px;">Александровка</option><option value="10357" style="padding-left:20px;">Баштанка</option><option value="15789555" style="padding-left:20px;">Березанка</option><option value="10358" style="padding-left:20px;">Березнеговатое</option><option value="10359" style="padding-left:20px;">Братское</option><option value="10361" style="padding-left:20px;">Веселиново</option><option value="10362" style="padding-left:20px;">Вознесенск</option><option value="15789556" style="padding-left:20px;">Врадиевка</option><option value="10363" style="padding-left:20px;">Доманевка</option><option value="10364" style="padding-left:20px;">Еланец</option><option value="10365" style="padding-left:20px;">Казанка</option><option value="15789608" style="padding-left:20px;">Коблево</option><option value="10366" style="padding-left:20px;">Кривое Озеро</option><option value="10367" style="padding-left:20px;">Николаев</option><option value="10368" style="padding-left:20px;">Новая Одесса</option><option value="10369" style="padding-left:20px;">Новый Буг</option><option value="10370" style="padding-left:20px;">Очаков</option><option value="10371" style="padding-left:20px;">Первомайск</option><option value="10372" style="padding-left:20px;">Снигиревка</option><option value="3845619" style="padding-left:20px;">Южноукраинск</option></optgroup><optgroup label="Одесская обл."><option value="10375" style="padding-left:20px;">Ананьев</option><option value="10376" style="padding-left:20px;">Арциз</option><option value="10377" style="padding-left:20px;">Балта</option><option value="10378" style="padding-left:20px;">Белгород-Днестровский</option><option value="10379" style="padding-left:20px;">Беляевка</option><option value="10381" style="padding-left:20px;">Березовка</option><option value="10382" style="padding-left:20px;">Болград</option><option value="10384" style="padding-left:20px;">Великая Михайловка</option><option value="10385" style="padding-left:20px;">Великодолинское</option><option value="15789570" style="padding-left:20px;">Ивановка</option><option value="10388" style="padding-left:20px;">Измаил</option><option value="10389" style="padding-left:20px;">Ильичевск</option><option value="10390" style="padding-left:20px;">Килия</option><option value="10391" style="padding-left:20px;">Кодыма</option><option value="10392" style="padding-left:20px;">Коминтерновское</option><option value="10393" style="padding-left:20px;">Котовск</option><option value="15789624" style="padding-left:20px;">Кучурган</option><option value="15789605" style="padding-left:20px;">Лиманское</option><option value="10395" style="padding-left:20px;">Любашевка</option><option value="10397" style="padding-left:20px;">Овидиополь</option><option value="10398" style="padding-left:20px;">Одесса</option><option value="10399" style="padding-left:20px;">Раздельная</option><option value="10400" style="padding-left:20px;">Рени</option><option value="10401" style="padding-left:20px;">Саврань</option><option value="10402" style="padding-left:20px;">Сарата</option><option value="10404" style="padding-left:20px;">Татарбунары</option><option value="15789564" style="padding-left:20px;">Теплодар</option><option value="10405" style="padding-left:20px;">Фрунзовка</option><option value="10406" style="padding-left:20px;">Ширяево</option><option value="12370062" style="padding-left:20px;">Южный</option></optgroup><optgroup label="Полтавская обл."><option value="10408" style="padding-left:20px;">Белики</option><option value="10409" style="padding-left:20px;">Великая Багачка</option><option value="10410" style="padding-left:20px;">Гадяч</option><option value="10411" style="padding-left:20px;">Глобино</option><option value="10413" style="padding-left:20px;">Градижск</option><option value="10414" style="padding-left:20px;">Гребенка</option><option value="10415" style="padding-left:20px;">Диканька</option><option value="10416" style="padding-left:20px;">Зеньков</option><option value="10417" style="padding-left:20px;">Карловка</option><option value="10418" style="padding-left:20px;">Кобеляки</option><option value="10419" style="padding-left:20px;">Козельщина</option><option value="11563592" style="padding-left:20px;">Комсомольск</option><option value="10420" style="padding-left:20px;">Котельва</option><option value="10421" style="padding-left:20px;">Кременчуг</option><option value="10422" style="padding-left:20px;">Лохвица</option><option value="10423" style="padding-left:20px;">Лубны</option><option value="10424" style="padding-left:20px;">Машевка</option><option value="10425" style="padding-left:20px;">Миргород</option><option value="15789653" style="padding-left:20px;">Новая Галещина</option><option value="10426" style="padding-left:20px;">Новые Санжары</option><option value="10427" style="padding-left:20px;">Оржица</option><option value="10428" style="padding-left:20px;">Пирянтин</option><option value="10429" style="padding-left:20px;">Пирятин</option><option value="10430" style="padding-left:20px;">Полтава</option><option value="10431" style="padding-left:20px;">Решетиловка</option><option value="10432" style="padding-left:20px;">Семеновка</option><option value="10433" style="padding-left:20px;">Хорол</option><option value="15789596" style="padding-left:20px;">Червонозаводское</option><option value="10434" style="padding-left:20px;">Чернухи</option><option value="10435" style="padding-left:20px;">Чутово</option><option value="10436" style="padding-left:20px;">Шишаки</option></optgroup><optgroup label="Ровенская обл."><option value="15789526" style="padding-left:20px;">Березно</option><option value="10438" style="padding-left:20px;">Владимирец</option><option value="10439" style="padding-left:20px;">Гоща</option><option value="10441" style="padding-left:20px;">Дубно</option><option value="10442" style="padding-left:20px;">Дубровица</option><option value="10443" style="padding-left:20px;">Заречное</option><option value="10444" style="padding-left:20px;">Здолбунов</option><option value="10445" style="padding-left:20px;">Клевань</option><option value="10447" style="padding-left:20px;">Корец</option><option value="10448" style="padding-left:20px;">Костополь</option><option value="10449" style="padding-left:20px;">Кузнецовск</option><option value="10450" style="padding-left:20px;">Млинов</option><option value="10451" style="padding-left:20px;">Острог</option><option value="15789546" style="padding-left:20px;">Радивилов</option><option value="15789584" style="padding-left:20px;">Ракитное</option><option value="10452" style="padding-left:20px;">Ровно</option><option value="10453" style="padding-left:20px;">Сарны</option><option value="15789638" style="padding-left:20px;">Смыга</option></optgroup><optgroup label="Сумская обл."><option value="10456" style="padding-left:20px;">Ахтырка</option><option value="10457" style="padding-left:20px;">Белополье</option><option value="10458" style="padding-left:20px;">Бурынь</option><option value="10459" style="padding-left:20px;">Великая Писаревка</option><option value="10461" style="padding-left:20px;">Воронеж</option><option value="10462" style="padding-left:20px;">Глухов</option><option value="10463" style="padding-left:20px;">Дружба</option><option value="10466" style="padding-left:20px;">Конотоп</option><option value="10467" style="padding-left:20px;">Краснополье</option><option value="10468" style="padding-left:20px;">Кровелец</option><option value="10469" style="padding-left:20px;">Лебедин</option><option value="10470" style="padding-left:20px;">Липовая Долина</option><option value="10471" style="padding-left:20px;">Недригайлов</option><option value="15789538" style="padding-left:20px;">Охтирка</option><option value="10472" style="padding-left:20px;">Путивль</option><option value="10473" style="padding-left:20px;">Ромны</option><option value="10474" style="padding-left:20px;">Середина-Буда</option><option value="10475" style="padding-left:20px;">Сумы</option><option value="10476" style="padding-left:20px;">Тростянец</option><option value="10477" style="padding-left:20px;">Шостка</option><option value="10479" style="padding-left:20px;">Ямполь</option></optgroup><optgroup label="Тернопольская обл."><option value="10481" style="padding-left:20px;">Бережаны</option><option value="10482" style="padding-left:20px;">Борщев</option><option value="10483" style="padding-left:20px;">Бучач</option><option value="10487" style="padding-left:20px;">Гусятин</option><option value="10488" style="padding-left:20px;">Залещики</option><option value="10490" style="padding-left:20px;">Збараж</option><option value="10491" style="padding-left:20px;">Зборов</option><option value="10495" style="padding-left:20px;">Козова</option><option value="15789576" style="padding-left:20px;">Копычинцы</option><option value="10496" style="padding-left:20px;">Кременец</option><option value="10497" style="padding-left:20px;">Лановцы</option><option value="10498" style="padding-left:20px;">Монастыриска</option><option value="10499" style="padding-left:20px;">Подволочиск</option><option value="15789578" style="padding-left:20px;">Подгайцы</option><option value="15789589" style="padding-left:20px;">Почаев</option><option value="10500" style="padding-left:20px;">Теребовля</option><option value="10501" style="padding-left:20px;">Тернополь</option><option value="15789631" style="padding-left:20px;">Хоростков</option><option value="10502" style="padding-left:20px;">Чортков</option><option value="10503" style="padding-left:20px;">Шумское</option></optgroup><optgroup label="Харьковская обл."><option value="10505" style="padding-left:20px;">Балаклея</option><option value="10506" style="padding-left:20px;">Барвенково</option><option value="15789558" style="padding-left:20px;">Безлюдовка</option><option value="10507" style="padding-left:20px;">Близнюки</option><option value="10508" style="padding-left:20px;">Богодухов</option><option value="10510" style="padding-left:20px;">Боровая</option><option value="10512" style="padding-left:20px;">Валки</option><option value="10513" style="padding-left:20px;">Великий Бурлук</option><option value="10514" style="padding-left:20px;">Волчанск</option><option value="15789568" style="padding-left:20px;">Двуречная</option><option value="10518" style="padding-left:20px;">Зачепиловка</option><option value="15789524" style="padding-left:20px;">Змеев</option><option value="10520" style="padding-left:20px;">Золочев</option><option value="10521" style="padding-left:20px;">Изюм</option><option value="10523" style="padding-left:20px;">Кегичевка</option><option value="15789573" style="padding-left:20px;">Ковшаровка</option><option value="15789574" style="padding-left:20px;">Комсомольское</option><option value="10524" style="padding-left:20px;">Красноград</option><option value="10525" style="padding-left:20px;">Краснокутск</option><option value="15789619" style="padding-left:20px;">Краснопавловка</option><option value="10526" style="padding-left:20px;">Купянск</option><option value="15789640" style="padding-left:20px;">Купянск-Узловой</option><option value="10527" style="padding-left:20px;">Лозовая</option><option value="10528" style="padding-left:20px;">Люботин</option><option value="7719220" style="padding-left:20px;">Мерефа</option><option value="10529" style="padding-left:20px;">Новая Водолага</option><option value="10530" style="padding-left:20px;">Первомайский</option><option value="15789652" style="padding-left:20px;">Печенеги</option><option value="10531" style="padding-left:20px;">Сахновщина</option><option value="10532" style="padding-left:20px;">Харьков</option><option value="15789632" style="padding-left:20px;">Червоный Донец</option><option value="10533" style="padding-left:20px;">Чугуев</option><option value="10534" style="padding-left:20px;">Шевченково</option></optgroup><optgroup label="Херсонская обл."><option value="10538" style="padding-left:20px;">Белозерка</option><option value="10539" style="padding-left:20px;">Берислав</option><option value="10540" style="padding-left:20px;">Великая Александровка</option><option value="10541" style="padding-left:20px;">Великая Лепетиха</option><option value="15789567" style="padding-left:20px;">Великие Копани</option><option value="10542" style="padding-left:20px;">Верхний Рогачик</option><option value="10543" style="padding-left:20px;">Высокополье</option><option value="10544" style="padding-left:20px;">Геническ</option><option value="10545" style="padding-left:20px;">Голая Пристань</option><option value="10546" style="padding-left:20px;">Горностаевка</option><option value="15789549" style="padding-left:20px;">Ивановка</option><option value="10548" style="padding-left:20px;">Каланчак</option><option value="10550" style="padding-left:20px;">Каховка</option><option value="15789634" style="padding-left:20px;">Лазурное</option><option value="10551" style="padding-left:20px;">Нижние Серогозы</option><option value="10552" style="padding-left:20px;">Новая Каховка</option><option value="10553" style="padding-left:20px;">Нововоронцовка</option><option value="10554" style="padding-left:20px;">Новотроицкое</option><option value="10555" style="padding-left:20px;">Скадовск</option><option value="10556" style="padding-left:20px;">Херсон</option><option value="10557" style="padding-left:20px;">Цюрупинск</option><option value="10558" style="padding-left:20px;">Чаплинка</option></optgroup><optgroup label="Хмельницкая обл."><option value="10562" style="padding-left:20px;">Белогорье</option><option value="10563" style="padding-left:20px;">Виньковцы</option><option value="10564" style="padding-left:20px;">Волочиск</option><option value="10565" style="padding-left:20px;">Городок</option><option value="10566" style="padding-left:20px;">Грицев</option><option value="10567" style="padding-left:20px;">Деражня</option><option value="10568" style="padding-left:20px;">Дунаевцы</option><option value="10569" style="padding-left:20px;">Изяслав</option><option value="10570" style="padding-left:20px;">Каменец-Подольский</option><option value="10571" style="padding-left:20px;">Красилов</option><option value="10572" style="padding-left:20px;">Летичев</option><option value="2191338" style="padding-left:20px;">Нетешин</option><option value="10573" style="padding-left:20px;">Новая Ушица</option><option value="10574" style="padding-left:20px;">Полонное</option><option value="15789610" style="padding-left:20px;">Сатанов</option><option value="10575" style="padding-left:20px;">Славута</option><option value="10576" style="padding-left:20px;">Старая Синява</option><option value="10577" style="padding-left:20px;">Староконстантинов</option><option value="10578" style="padding-left:20px;">Теофиполь</option><option value="10579" style="padding-left:20px;">Хмельницкий</option><option value="10580" style="padding-left:20px;">Чемеровцы</option><option value="10581" style="padding-left:20px;">Шепетовка</option><option value="10582" style="padding-left:20px;">Ярмолинцы</option></optgroup><optgroup label="Черкасская обл."><option value="15789629" style="padding-left:20px;">Балаклея</option><option value="15789627" style="padding-left:20px;">Белозерье</option><option value="10584" style="padding-left:20px;">Ватутино</option><option value="10585" style="padding-left:20px;">Городище</option><option value="10586" style="padding-left:20px;">Драбов</option><option value="10588" style="padding-left:20px;">Жашков</option><option value="10590" style="padding-left:20px;">Звенигородка</option><option value="10591" style="padding-left:20px;">Золотоноша</option><option value="10593" style="padding-left:20px;">Каменка</option><option value="15789521" style="padding-left:20px;">Канев</option><option value="10594" style="padding-left:20px;">Катеринополь</option><option value="10595" style="padding-left:20px;">Корсунь-Шевченковский</option><option value="10596" style="padding-left:20px;">Лысянка</option><option value="10597" style="padding-left:20px;">Маньковка</option><option value="10598" style="padding-left:20px;">Монастырище</option><option value="15789654" style="padding-left:20px;">Сагуновка</option><option value="10599" style="padding-left:20px;">Смела</option><option value="10600" style="padding-left:20px;">Тальное</option><option value="10601" style="padding-left:20px;">Умань</option><option value="10602" style="padding-left:20px;">Христиновка</option><option value="10603" style="padding-left:20px;">Черкассы</option><option value="10604" style="padding-left:20px;">Чернобай</option><option value="10605" style="padding-left:20px;">Чигирин</option><option value="10606" style="padding-left:20px;">Шпола</option></optgroup><optgroup label="Черниговская обл."><option value="10609" style="padding-left:20px;">Бахмач</option><option value="10611" style="padding-left:20px;">Бобровица</option><option value="10612" style="padding-left:20px;">Борзна</option><option value="10613" style="padding-left:20px;">Варва</option><option value="10615" style="padding-left:20px;">Городня</option><option value="10617" style="padding-left:20px;">Ичня</option><option value="10618" style="padding-left:20px;">Козелец</option><option value="10619" style="padding-left:20px;">Короп</option><option value="10620" style="padding-left:20px;">Корюковка</option><option value="10621" style="padding-left:20px;">Куликовка</option><option value="10622" style="padding-left:20px;">Мена</option><option value="10623" style="padding-left:20px;">Нежин</option><option value="10624" style="padding-left:20px;">Новгород Северский</option><option value="10625" style="padding-left:20px;">Носовка</option><option value="15789609" style="padding-left:20px;">Остер</option><option value="10626" style="padding-left:20px;">Прилуки</option><option value="10627" style="padding-left:20px;">Репки</option><option value="10628" style="padding-left:20px;">Семеновка</option><option value="10629" style="padding-left:20px;">Сосница</option><option value="15789646" style="padding-left:20px;">Срібне</option><option value="10630" style="padding-left:20px;">Талалаевка</option><option value="10631" style="padding-left:20px;">Чернигов</option><option value="10632" style="padding-left:20px;">Щорс</option></optgroup><optgroup label="Черновицкая обл."><option value="10636" style="padding-left:20px;">Вижница</option><option value="10638" style="padding-left:20px;">Глыбокая</option><option value="10639" style="padding-left:20px;">Заставна</option><option value="10640" style="padding-left:20px;">Кельменцы</option><option value="10641" style="padding-left:20px;">Кицмань</option><option value="15789644" style="padding-left:20px;">Лужаны</option><option value="15789563" style="padding-left:20px;">Мамаевцы</option><option value="15789560" style="padding-left:20px;">Новоднестровск</option><option value="10642" style="padding-left:20px;">Новоселица</option><option value="15789649" style="padding-left:20px;">Романковцы</option><option value="10644" style="padding-left:20px;">Сокиряны</option><option value="10645" style="padding-left:20px;">Сторожинец</option><option value="10646" style="padding-left:20px;">Хотин</option><option value="10647" style="padding-left:20px;">Черновцы</option></optgroup></select></p>
			<p><label for="warehousex" class="label100">Склад: </label><select id="warehousex" name="warehouse" disabled="disabled"></select></p>
			<p><label for="newname" class="label100">Получатель:</label><input name="newname" type="text" id="newname" size="50" value="Константин Попович" /> <span style="color:red;">Отчество обязательно!</span></p> 
			<p><label class="label100">Телефон: </label><input name="newtel" type="text" id="newtel" size="50" /></p>
		</div>
		<p><input name="sposob" id="sposob13" type="radio" value="13" /> <label for="sposob13"> Доставка ТОВ &laquo;Нова Пошта&raquo; ИНКОГНИТО<br />
		   В графе Отправитель нет наших контактных данных. Доставка за счет получателя</label></p>
		<p><label class="label100"><input name="chk" type="hidden" value="332" /></label><input type="submit" name="button2" id="button2" value="Добавить вариант доставки" /></p>
		</form>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#sposob').click(function(){$('#newposhta,#delivery_auto,#autolux,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast")});
			$('#sposob2').click(function(){
				$('#newposhta').show("fast")
				$('#delivery_auto,#autolux,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast")
			});
			$('#sposob4').click(function(){
				$('#newposhta,#autolux,#delivery_auto,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast")
			});
			$('#sposob5').click(function(){
				$('#courier_kiev').show("fast")
				$('#newposhta,#autolux,#delivery_auto,#gunsel,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast")
			});
			$('#sposob13').click(function(){
				$('#self').show("fast")
				$('#newposhta,#autolux,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#delivery_auto,#night,#sat').hide("fast")
			});
			(function($){
				$.fn.clearSelect = function() {
					return this.each(function(){
						if(this.tagName=='SELECT') {
							this.options.length = 0;
							$(this).attr('disabled','disabled');
						}
					});
				}
				$.fn.fillSelect = function(dataArray) {
					return this.clearSelect().each(function(){
						if(this.tagName=='SELECT') {
							var currentSelect = this;
							$.each(dataArray,function(index,data){
								var option = new Option(data.text,data.value);
								if($.support.cssFloat) {
									currentSelect.add(option,null);
								} else {
									currentSelect.add(option);
								}
							});
						}
					}); 
				}
			})(jQuery);
			function adjustAuto(){
				var countryValue = $('#selectCityx').val();
				var tmpSelect = $('#warehousex');
				if(countryValue.length == 0) {
					tmpSelect.attr('disabled','disabled');
					tmpSelect.clearSelect();
					adjustModel();
					} else {
						$.getJSON('inc/cascadeSelectWarehouse.php?transporter=2',{country:countryValue},function(data) { tmpSelect.fillSelect(data).attr('disabled','');  });
					}
			};
			$('#selectCityx').change(function(){
				adjustAuto();
			}).change();
			
			$("#newaddressform").submit(function() {
				$.ajax({
					type: "POST",
					url: "inc/ajax.php?action=newaddress&cost=100",
					data: $("#newaddressform").serialize(), 
					dataType: 'json',
					success: function(data){
						if(data!='error'){
							$('#addresses').append($(data.option));
							$('#addresses option:last').attr('selected','1');
							$('#addresses').trigger("chosen:updated");
							$('#addresses').change();
							$.fancybox.close();
							$('#newaddress').html(data.text);
						}else{
							alert('Новый адрес не добавлен. Попробуйте его добавить в настройках Доставки в вашем Профиле');
						}
					}
				});
				return false; 
			});
		
		});
	</script>
</div>


</div>

<div class="footer"><table width="100%"><tr><td style="width:193px;"><p>© 2011 &mdash; 2015 <a href="?id=5">sborka.ua</a><br />
<a href="?id=3">Условия использования</a><br />
<a href="http://diel.com.ua" title="Разработка систем управления">Cделано в &laquo;Диэле&raquo;</a></p></td>
<td><p><strong>Понедельник - Пятница  с 9:00 до 19:00, Суббота с 9:30 до 16:00<br/>
<span style="font-size:14px;">0 800 60-62-51</span> звонки в пределах Украины (даже с мобильных) бесплатны!<br/> MTS 095 173-38-38. KYIVSTAR 067 623-73-71.</strong></p></td></tr></table></div>
<script type="text/javascript">
$(document).ready(function(){
	$(".window").fancybox();
	$(".iframe").fancybox({
		'width':800,
		'height':480
	});
	$(".pages").tablesorter();
	$('link[rel$=icon]').remove();
			$('head').append( $('<link rel="shortcut icon" type="image/x-icon"/>' ).attr( 'href', "/mail.ico" ) );	setTimeout("HideAlert()",4000);
});
function HideAlert(){
    $(".alert").fadeOut(800);
}
</script>
<script type="text/javascript">
function highlight_form() {
  $('input[type="text"], input[type="password"], textarea, select').each(function(){
    $(this).bind('focus blur', function() {
      $(this).toggleClass('input-inside');
    });
  });
}
$(document).ready(function(){ 
  highlight_form();
});
</script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29577552-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
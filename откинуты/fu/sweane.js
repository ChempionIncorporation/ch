$(document).ready(function(){
	//if ($.browser.opera||$.browser.msie){ 
	if ($.browser.msie){ 
    	alert("Уважаемый клиент, к сожалению, бесперебойная работа с нашим сервисом на 100% гарантируется только с браузерами Mozilla Firefox, Google Chrome и Apple Safari. Возможно с Opera. Перейдите в наш сервис с использованием одного из этих браузеров. Приносим свои извинения."); 
 }
});

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

	$(document).ready(function(){
				$('#addresses').chosen();
			});

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
$(document).ready(function(){
	calculate();
	
	$('#maketlink2,#krugparam,#bigparam,#falcparam,#perfp,#cuttings,#drillingparam,#numberingparam').hide();

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
	}).change();
	$('#creasing,#perforation,#cutting,#drillingn,#falcing,#color,#laminat').change(function(){calculate();});
	$('#falccheck').change(function(){
		if ($(this).attr("checked")) {
			$('#falcparam').show("fast");
		} else {
			$('#falcparam').hide("fast");
		}
		calculate();
	});
	$('#perf').change(function(){
		if ($(this).attr("checked")) {
			$('#perfp').show("fast");
		} else {
			$('#perfp').hide("fast");
		}
		calculate();
	});
	$('#porezka').change(function(){
		if ($(this).attr("checked")) {
			$('#cuttings').show("fast");
		} else {
			$('#cuttings').hide("fast");
		}
		calculate();
	});
	$('#drilling').change(function(){
		if ($(this).attr("checked")) {
			$('#drillingparam').show("fast");
		} else {
			$('#drillingparam').hide("fast");
		}
		calculate();
	});
	$('#numbering').change(function(){
		if ($(this).attr("checked")) {
			$('#numberingparam').show("fast");
		} else {
			$('#numberingparam').hide("fast");
		}
		calculate();
	});
	
	$('#showform2').click(function(){$('#maketform2').show("fast"),$('#maketlink2').hide("fast");});
	$('#showlink2').click(function(){$('#maketlink2').show("fast"),$('#maketform2').hide("fast");});

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
	
	$('#a2').click(function(){$('#width').attr("value","594"),$('#height').attr("value","420"),calculate();});
	$('#a3').click(function(){$('#width').attr("value","420"),$('#height').attr("value","297"),calculate();});
	$('#a4').click(function(){$('#width').attr("value","297"),$('#height').attr("value","210"),calculate();});
	$('#a5').click(function(){$('#width').attr("value","210"),$('#height').attr("value","148"),calculate();});
	$('#a6').click(function(){$('#width').attr("value","148"),$('#height').attr("value","105"),calculate();});
	$('#a7').click(function(){$('#width').attr("value","100"),$('#height').attr("value","70"),calculate();});
	$('#a8').click(function(){$('#width').attr("value","70"),$('#height').attr("value","50"),calculate();});
	$('#euro').click(function(){$('#width').attr("value","210"),$('#height').attr("value","99"),calculate();});
	$('#euro2').click(function(){$('#width').attr("value","198"),$('#height').attr("value","210"),calculate();});
	
});
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
		
		//$('#totalcost').innerHTML = "10";
		//var sum_2s = "as";
		//sum_2s = $("#cost").val()+'';
		//var sum_2s = toString($("#cost").val());

		setTimeout(function() { 
		//	alert(sum_2s);
		//	alert($("#cost").val());
			//$("#totalcost").html(sum_2s);
			//document.getElementById("totalcost").innerHTML = sum_2s;
			//alert();
		}, 1000);
		var width=parseInt($('#width').val());
		var height=parseInt($('#height').val());
		var tirazh=parseInt($('#tirazh').val());
	
		mult1=Math.floor(438/width) * Math.floor(308/height);
		mult2=Math.floor(438/height) * Math.floor(308/width);
		if(mult1>mult2){shtuk_na_list=mult1;}else{shtuk_na_list=mult2;}

		var discont = 1;
		var tirazhi = [1,5,10,15,20,50,100,150,200,500];
		var density = [80,90,115,130,150,170,200,250,300,350,'CK','_icelite','_dali_c','_dali_b','_stardream_c','_stardream_o','_stardream_d'];
		var tirazhcost = {1:4.05,5:3.83,10:3.60,15:3.51,20:3.42,50:3.24,100:3.15,150:3.06,200:2.97,500:2.88};
		var what_price_for_list=1;

		var listov_na_tirazh = Math.ceil(tirazh/shtuk_na_list);

		for(var i=0; i<tirazhi.length; i++) {
			var nnn = +array_search(tirazhi[i], tirazhi) +1;
			if (listov_na_tirazh == tirazhi[i] || (listov_na_tirazh > tirazhi[i] && listov_na_tirazh < tirazhi[nnn]) ){
				what_price_for_list=tirazhi[i];
			}
		}
		var cost=0;
		var post=0;
		var format = [];
		format['80'] = 0.63;
		format['90'] = 0.63;
		format['115'] = 0.68;
		format['130'] = 0.77;
		format['150'] = 0.90;
		format['170'] = 1.04;
		format['200'] = 1.22;
		format['250'] = 1.58;
		format['300'] = 1.89;
		format['350'] = 2.48;
		format['CK'] = 3.42;
		format['_icelite'] = 8.15;
		format['_dali_c'] = 10.55;
		format['_dali_b'] = 10.55;
		format['_stardream_c'] = 20.70;
		format['_stardream_o'] = 20.70;
		format['_stardream_d'] = 20.70;
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
				var delivery = (( +cost +post) *0.07).toFixed(2);
			}
		}

		$('#cost').val(cost.toFixed(2));
		$('#costdop').val(post.toFixed(2));
		$('#cost2').html(cost.toFixed(2));
		$('#costdop2').html(post.toFixed(2));
		$('#poshtacost').html(delivery.toFixed(2));
		$('#totalcost').html((delivery+post+cost).toFixed(2));
		
	}

	$(window).keypress(function (e) {
		if (e.which == 13 && e.ctrlKey ) $("#customorder").submit();
	}); 
	$(document).ready(function(){
			$('#sposob').click(function(){$('#newposhta,#delivery_auto,#autolux,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast");});
			$('#sposob2').click(function(){
				$('#newposhta').show("fast");
				$('#delivery_auto,#autolux,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast")
			;});
			$('#sposob4').click(function(){
				$('#newposhta,#autolux,#delivery_auto,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast");
			});
			$('#sposob5').click(function(){
				$('#courier_kiev').show("fast");
				$('#newposhta,#autolux,#delivery_auto,#gunsel,#courier_donetsk,#intime,#bus_donetsk,#night,#sat,#self').hide("fast");
			});
			$('#sposob13').click(function(){
				$('#self').show("fast");
				$('#newposhta,#autolux,#gunsel,#courier_kiev,#courier_donetsk,#intime,#bus_donetsk,#delivery_auto,#night,#sat').hide("fast");
			});
			(function($){
				$.fn.clearSelect = function() {
					return this.each(function(){
						if(this.tagName=='SELECT') {
							this.options.length = 0;
							$(this).attr('disabled','disabled');
						}
					});
				};
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
				};
			})(jQuery);
			function adjustAuto(){
				var countryValue = $('#selectCityx').val();
				var tmpSelect = $('#warehousex');
				if(countryValue.length === 0) {
					tmpSelect.attr('disabled','disabled');
					tmpSelect.clearSelect();
					adjustModel();
					} else {
						$.getJSON('inc/cascadeSelectWarehouse.php?transporter=2',{country:countryValue},function(data) { tmpSelect.fillSelect(data).attr('disabled','');  });
					}
			}
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments);},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29577552-1', 'auto');
  ga('send', 'pageview');

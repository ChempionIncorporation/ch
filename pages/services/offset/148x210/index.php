
<script type="text/javascript">
$(document).ready(function(){
	//if ($.browser.opera||$.browser.msie){ 
	if ($.browser.msie){ 
    	alert("Уважаемый клиент, к сожалению, бесперебойная работа с нашим сервисом на 100% гарантируется только с браузерами Mozilla Firefox, Google Chrome и Apple Safari. Возможно с Opera. Перейдите в наш сервис с использованием одного из этих браузеров. Приносим свои извинения."); 
 };
});
</script>
  
<div class="main">
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

function showContent(link, idblock ) {  
  
        var cont = document.getElementById(idblock);  
        var loading = document.getElementById('loading');  
  
        cont.innerHTML = loading.innerHTML;  
  
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }  
  
    // создание ajax объекта  
    function createRequestObject()   
    {  
        try { return new XMLHttpRequest() }  
        catch(e)   
        {  
            try { return new ActiveXObject('Msxml2.XMLHTTP') }  
            catch(e)   
            {  
                try { return new ActiveXObject('Microsoft.XMLHTTP') }  
                catch(e) { return null; }  
            }  
        }  
    }  

</script>
<div class="section">
<br style="clear:both;"><a name="price"></a><br>
<h3 class="new" style="padding:6px;">148 × 210 А5</h3>
	<p style="padding:6px; font-size:16px; font-weight:400; text-align:center;">Активный прайс лист. Для заказа - выберите материал, срок печати, тираж и кликните на стоимость.</p>
	<ul class="t_greyblock" onmousedown="return false" onselectstart="return false">
      <li><label class="t_switchable"><input id="allcheck" type="checkbox" checked=""><div id="t_plot" onclick="allbox();">Все <br> плотности</div></label></li>
              <li><label class="t_switchable"><input id="rd1630" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d1630&#39;);">с/к<br>Raflatac</div></label></li>
              <li><label class="t_switchable"><input id="rd800" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d800&#39;);">80<br>офсет</div></label></li>
              <li><label class="t_switchable"><input id="rd900" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d900&#39;);">90<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd1150" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d1150&#39;);">115<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd1300" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d1300&#39;);">130<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd1500" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d1500&#39;);">150<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd1700" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d1700&#39;);">170<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd2500" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d2500&#39;);">250<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd3000" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d3000&#39;);">300<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd3500" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d3500&#39;);">350<br>мел</div></label></li>
              <li><label class="t_switchable"><input id="rd35024" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d35024&#39;);">350<br>Лен</div></label></li>
              <li style="width:2%"><label class="t_switchable"><input id="rd3507" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d3507&#39;);">350<br>ГЛ лам 1+0</div></label></li>
              <li style="width:2%"><label class="t_switchable"><input id="rd3508" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d3508&#39;);">350<br>ГЛ лам 1+1</div></label></li>
              <li style="width:2%"><label class="t_switchable"><input id="rd3509" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d3509&#39;);">350<br>МАТ лам 1+0</div></label></li>
              <li style="width:2%"><label class="t_switchable"><input id="rd35010" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d35010&#39;);">350<br>МАТ лам 1+1</div></label></li>
              <li style="width:2%"><label class="t_switchable"><input id="rd35021" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d35021&#39;);">350<br>УФ лак 1+0</div></label></li>
              <li style="width:2%"><label class="t_switchable"><input id="rd35023" type="checkbox">
        <div id="t_plot" onclick="openbox(&#39;d35023&#39;);">350<br>Гибрид 1+0</div></label></li>
      	</ul>
    <div id="allbox" style="display: block;"></div>
	<script language="JavaScript" type="text/JavaScript">
    function openbox(id) { // если выбрали отдельную плотность
        if (document.getElementById('allbox').style.display == "block") // если кнопка все плотности нажата, то
        {
           allbox();  // закрываем все плотности
           document.getElementById('allcheck').checked = false;  // отключаем кнопку все плотности
        }
        if (document.getElementById(id).style.display == "none")   // если кнопка отдельной плотности не нажата, то
           {document.getElementById(id).style.display = "block"; }  // светим кнопку нужной плотности
        else
           {document.getElementById(id).style.display = "none"; }  // иначе не светим
    }
    </script>
	<script language="JavaScript" type="text/JavaScript">
    function allbox() 
    {
        if (document.getElementById('allbox').style.display == "block") {
            var name = {"1":["d1630","rd1630","\u0441\/\u043a<br>Raflatac",""],"2":["d800","rd800","80<br>\u043e\u0444\u0441\u0435\u0442",""],"3":["d900","rd900","90<br>\u043c\u0435\u043b",""],"4":["d1150","rd1150","115<br>\u043c\u0435\u043b",""],"5":["d1300","rd1300","130<br>\u043c\u0435\u043b",""],"6":["d1500","rd1500","150<br>\u043c\u0435\u043b",""],"7":["d1700","rd1700","170<br>\u043c\u0435\u043b",""],"8":["d2500","rd2500","250<br>\u043c\u0435\u043b",""],"9":["d3000","rd3000","300<br>\u043c\u0435\u043b",""],"10":["d3500","rd3500","350<br>\u043c\u0435\u043b",""],"11":["d35024","rd35024","350<br>\u041b\u0435\u043d",""],"12":["d3507","rd3507","350<br>\u0413\u041b \u043b\u0430\u043c 1+0","style=\"width:2%\""],"13":["d3508","rd3508","350<br>\u0413\u041b \u043b\u0430\u043c 1+1","style=\"width:2%\""],"14":["d3509","rd3509","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+0","style=\"width:2%\""],"15":["d35010","rd35010","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+1","style=\"width:2%\""],"16":["d35021","rd35021","350<br>\u0423\u0424 \u043b\u0430\u043a 1+0","style=\"width:2%\""],"17":["d35023","rd35023","350<br>\u0413\u0438\u0431\u0440\u0438\u0434 1+0","style=\"width:2%\""]};
            var j = 17; 
            for (var i = 1; i <= j; i++) {
              if(document.getElementById(name[i][0])) {    
              document.getElementById(name[i][0]).style.display = "none"; }
            }
            document.getElementById('allbox').style.display = "none";
        }else{
            document.getElementById('allbox').style.display = "block";
            var name = {"1":["d1630","rd1630","\u0441\/\u043a<br>Raflatac",""],"2":["d800","rd800","80<br>\u043e\u0444\u0441\u0435\u0442",""],"3":["d900","rd900","90<br>\u043c\u0435\u043b",""],"4":["d1150","rd1150","115<br>\u043c\u0435\u043b",""],"5":["d1300","rd1300","130<br>\u043c\u0435\u043b",""],"6":["d1500","rd1500","150<br>\u043c\u0435\u043b",""],"7":["d1700","rd1700","170<br>\u043c\u0435\u043b",""],"8":["d2500","rd2500","250<br>\u043c\u0435\u043b",""],"9":["d3000","rd3000","300<br>\u043c\u0435\u043b",""],"10":["d3500","rd3500","350<br>\u043c\u0435\u043b",""],"11":["d35024","rd35024","350<br>\u041b\u0435\u043d",""],"12":["d3507","rd3507","350<br>\u0413\u041b \u043b\u0430\u043c 1+0","style=\"width:2%\""],"13":["d3508","rd3508","350<br>\u0413\u041b \u043b\u0430\u043c 1+1","style=\"width:2%\""],"14":["d3509","rd3509","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+0","style=\"width:2%\""],"15":["d35010","rd35010","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+1","style=\"width:2%\""],"16":["d35021","rd35021","350<br>\u0423\u0424 \u043b\u0430\u043a 1+0","style=\"width:2%\""],"17":["d35023","rd35023","350<br>\u0413\u0438\u0431\u0440\u0438\u0434 1+0","style=\"width:2%\""]};
            var j = 17; 
            for (var i = 1; i <= j; i++) {
             if(document.getElementById(name[i][0])) {  
              document.getElementById(name[i][0]).style.display = "block"; }
            }
            for (var i = 1; i <= j; i++) {
               if(document.getElementById(name[i][0])) {    
              document.getElementById(name[i][1]).checked = false; }
            }
        }
    }
    </script>
    <div id="d1630"><h3 class="newo">Самоклеящаяся бумага Raflatak</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
                <tr class="highlight"><td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1027,1284,2570,3854,5139,5534,10374,15908,20225];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [929,1187,2370,3507,4743,5187,9633,14820,18773];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [829,1086,2175,3260,4347,4841,8892,13734,17291];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d800"><h3 class="newo">Офсетная бумага 80 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
                <tr class="highlight"><td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [385,660,1099,2017,3115,4032,8249];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [367,629,1047,1921,2967,3840,7856];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [346,593,988,1812,2799,3623,7411];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d900"><h3 class="newo">Мелованная бумага 90 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [369,687,1103,1776,2856,3553,8882];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [356,970,1088,1761,2826,3523,8805];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [342,655,1073,1747,2796,3492,8729];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d1150"><h3 class="newo">Мелованная бумага 115 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
                <td>&nbsp;</td>
                <script type="text/javascript">
                    var array = [387,721,1007,1678,2664,3357,8392];
                    for (var i in array)
                        document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [374,704,996,1666,2640,3332,8331];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [359,688,982,1654,2616,3308,8270];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr><td align="center" width="1" nowrap=""><strong>Двусторонняя печать</strong></td></tr>
                <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [387,721,1159,1930,3065,3861,9652];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [374,704,1145,1917,3036,3833,9581];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [359,688,1130,1903,3009,3805,9510];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d1300"><h3 class="newo">Мелованная бумага 130 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                <tbody>
                <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [286,382,720,1245,2083,3300,4165,10414];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [276,369,702,1228,2067,3270,4135,10337];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d1500"><h3 class="newo">Мелованная бумага 150 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [456,871,1525,2594,4120,5190,12972];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d1700"><h3 class="newo">Мелованная бумага 170 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [593,988,1647,3293,4940,6587,13998];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d2500"><h3 class="newo">Мелованная бумага 250 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [691,1384,2075,2075,2503,2734,4940,7674,9551];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [626,1251,1878,1878,2240,2471,4446,6916,8563];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [560,1120,1679,1679,25043,2206,3953,6159,7575];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d3000"><h3 class="newo">Мелованная бумага 300 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [746,1495,2241,2703,2952,5336,8287,10316,];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [676,1351,2027,2027,2419,2668,4802,7471,9248];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [605,1210,1814,1814,2206,2384,4268,6652,8181];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d3500"><h3 class="newo">Мелованная бумага 350 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody>

                <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [684,856,1713,2569,3426,3689,6916,10605,13503];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [619,791,1580,2338,3162,3458,6422,9880,12515];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [553,724,1450,2173,2898,3227,5928,9156,11527];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d35024"><h3 class="newo">Структурный картон типа "Лен" 350 гр/м2</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>5 дней</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [969,1940,2909,2909,4090,4468,8221,12689,16019];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d3507"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевая ламинация по лицевой стороне</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [889,1779,2668,2668,3557,3953,7411,11362,14491];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [824,1647,2471,2471,3293,3721,3916,10638,13503];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [758,1515,2273,2273,3195,3490,6422,9912,12515];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d3508"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевая ламинация с 2-х сторон</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1156,2314,3468,3468,4623,5139,9634,14771,18838];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d3509"><h3 class="newo">Мелованная бумага 350 гр/м2 + Матовая ламинация по лицевой стороне</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [834,1667,2500,2500,3515,3839,7064,10903,13767];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d35010"><h3 class="newo">Мелованная бумага 350 гр/м2 + Матовая ламинация с 2-х сторон</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1317,2634,3953,3953,5270,5928,11362,17291,22395];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1251,2503,3755,3755,5007,5665,10668,16550,21407];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1186,2371,3557,3557,4743,5435,10375,15808,20420];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d35021"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевый УФ-лак по лицевой стороне</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [889,1779,2668,2668,3557,3953,7411,11362,14491];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [824,1647,2471,2471,3293,3721,6916,10638,13503];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [758,1515,2273,2273,3195,3490,6422,9912,12515];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div><div id="d35023"><h3 class="newo">Мелованная бумага 350 гр/м2 + Гибридный выборочный УФ-лак по лицевой стороне</h3>


            <table class="newprice" width="100%" oldclass="pages price">
                <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1138,2276,3414,3414,4553,5059,9484,14545,18550];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [1054,2108,3162,3162,4216,4764,8853,13617,17285];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                    <td>&nbsp;</td>
                    <script type="text/javascript">
                        var array = [969,1940,2909,2909,4090,4468,8221,12689,16019];
                        for (var i in array)
                            document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                    </script>
                </tr></tbody></table></div></div></div>

<script type="text/javascript">
$(document).ready(function(){
	$('#width, #height').change(function(){
		if ($('#width').val()<30) $('#width').val(30);
		if ($('#width').val()>596) $('#width').val(596);
		if ($('#height').val()<30) $('#height').val(30);
		if ($('#height').val()>420) $('#height').val(420);
	});
});
</script>

<script type="text/javascript">
$(window).keypress(function (e) {
	if (e.which == 13 && e.ctrlKey ) $("#customorder").submit();
}); 
</script>
<div style="display:none;">
  <div id="samples"></div>
  <div id="materials"> </div>
  <div id="tech"> </div>
  <div id="park"> </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".window").fancybox();
	$(".iframe").fancybox({
		'width':800,
		'height':480
	});
	//$(".pages").tablesorter();
	$(".pages").tablesorter({
    textExtraction: function(node) {
        var attr = $(node).attr('data-sort-value');
        if (typeof attr !== 'undefined' && attr !== false) {
            return attr;
        }
        return $(node).text(); 
    } 
	}); 
	$('link[rel$=icon]').remove();
			$('head').append( $('<link rel="shortcut icon" type="image/x-icon"/>' ).attr( 'href', "/mail.ico" ) );	setTimeout("HideAlert()",30000);
});
function HideAlert(){
    $(".alert").fadeOut(500);
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

<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div id="datepicker_div"></div></body></html>
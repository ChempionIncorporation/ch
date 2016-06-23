
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
<h3 class="new" style="padding:6px;">55 × 85 Евровизитка</h3>
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
            var name = {"1":["d1630","rd1630","\u0441\/\u043a<br>Raflatac",""],"2":["d800","rd800","80<br>\u043e\u0444\u0441\u0435\u0442",""],"3":["d900","rd900","90<br>\u043c\u0435\u043b",""],"4":["d1150","rd1150","115<br>\u043c\u0435\u043b",""],"5":["d1300","rd1300","130<br>\u043c\u0435\u043b",""],"6":["d1500","rd1500","150<br>\u043c\u0435\u043b",""],"7":["d1700","rd1700","170<br>\u043c\u0435\u043b",""],"8":["d2500","rd2500","250<br>\u043c\u0435\u043b",""],"9":["d3000","rd3000","300<br>\u043c\u0435\u043b",""],"10":["d3500","rd3500","350<br>\u043c\u0435\u043b",""],"11":["d35024","rd35024","350<br>\u041b\u0435\u043d",""],"12":["d3507","rd3507","350<br>\u0413\u041b \u043b\u0430\u043c 1+0","style=\"width:2%\""],"13":["d3508","rd3508","350<br>\u0413\u041b \u043b\u0430\u043c 1+1","style=\"width:2%\""],"14":["d3509","rd3509","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+0","style=\"width:2%\""],"15":["d35010","rd35010","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+1","style=\"width:2%\""]};
            var j = 15; 
            for (var i = 1; i <= j; i++) {
              if(document.getElementById(name[i][0])) {    
              document.getElementById(name[i][0]).style.display = "none"; }
            }
            document.getElementById('allbox').style.display = "none";
        }else{
            document.getElementById('allbox').style.display = "block";
            var name = {"1":["d1630","rd1630","\u0441\/\u043a<br>Raflatac",""],"2":["d800","rd800","80<br>\u043e\u0444\u0441\u0435\u0442",""],"3":["d900","rd900","90<br>\u043c\u0435\u043b",""],"4":["d1150","rd1150","115<br>\u043c\u0435\u043b",""],"5":["d1300","rd1300","130<br>\u043c\u0435\u043b",""],"6":["d1500","rd1500","150<br>\u043c\u0435\u043b",""],"7":["d1700","rd1700","170<br>\u043c\u0435\u043b",""],"8":["d2500","rd2500","250<br>\u043c\u0435\u043b",""],"9":["d3000","rd3000","300<br>\u043c\u0435\u043b",""],"10":["d3500","rd3500","350<br>\u043c\u0435\u043b",""],"11":["d35024","rd35024","350<br>\u041b\u0435\u043d",""],"12":["d3507","rd3507","350<br>\u0413\u041b \u043b\u0430\u043c 1+0","style=\"width:2%\""],"13":["d3508","rd3508","350<br>\u0413\u041b \u043b\u0430\u043c 1+1","style=\"width:2%\""],"14":["d3509","rd3509","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+0","style=\"width:2%\""],"15":["d35010","rd35010","350<br>\u041c\u0410\u0422 \u043b\u0430\u043c 1+1","style=\"width:2%\""]};
            var j = 15; 
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
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></tr>
             <tr class="highlight">
                 <td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [162,210,419,629,840,927,1728,2657,3459,4385];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [146,194,383,576,765,866,1605,2471,3212,4076];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [123,171,347,519,692,804,1482,2286,2964,3767];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d800"><h3 class="newo">Офсетная бумага 80 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
			 <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [57,91,168,305,413,520];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight">
                 <td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [54,87,160,290,393,495];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [51,82,151,274,371,467];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d900"><h3 class="newo">Мелованная бумага 90 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [58,111,172,268,437,537,1340];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [54,106,168,264,429,528,1322];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [51,102,164,260,421,521,1302];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1150"><h3 class="newo">Мелованная бумага 115 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
			 <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [61,116,157,251,405,502,1256];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script></tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [57,111,153,248,398,497,1241];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [54,107,150,246,392,490,1226];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr><td align="center" width="1" nowrap=""><strong>Двусторонняя печать</strong></td><td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [61,116,534181,289,465,578,1444];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [57,111,177,286,458,571,1427];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [54,107,173,282,451,564,1409];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script></tr></tbody></table></div></div><div id="d1300"><h3 class="newo">Мелованная бумага 130 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
			 <tbody>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [47,63,120,196,314,505,628,1570];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [44,60,116,192,310,498,620,1550];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [42,56,112,188,306,490,613,1532];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1500"><h3 class="newo">Мелованная бумага 150 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [72,142,237,388,625,777,1941];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1700"><h3 class="newo">Мелованная бумага 170 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [95,165,268,535,762,947,2429];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d2500"><h3 class="newo">Мелованная бумага 250 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [114,355231,346,412,454,824,1277,1564,2018];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [105,207,310,371,412,742,1152,1400,1812];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [91,181,272,330,371,659,1029,1235,1606];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3000"><h3 class="newo">Мелованная бумага 300 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [124,249,373,444,490,889,1378,1690,2180];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [113,224,335,400,444,801,1245,1512,1956];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [97,196,293,356,400,712,1112,1333,1734];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3500"><h3 class="newo">Мелованная бумага 350 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [108,140,279,419,560,618,1152,1771,2306,2923];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [97,129,255,384,510,577,1070,1647,2141,2717];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [82,114,231,346,461,536,988,1524,1976,2511];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d35024"><h3 class="newo">Структурный картон типа "Лен" 350 гр/м2</h3>

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>5 дней</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [158,316,474,632,737,1371,2108,2740,3479];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3507"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевая ламинация по лицевой стороне</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [149,296,444,593,659,1235,1894,2471,3129];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [134,272,409,544,618,1152,1771,2306,2923];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [124,247,371,494,577,1070,1647,2141,2717];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3508"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевая ламинация с 2-х сторон</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [194,385,578,770,857,1605,2462,3213,4067];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3509"><h3 class="newo">Мелованная бумага 350 гр/м2 + Матовая ламинация по лицевой стороне</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [136,272,408,543,635,1177,1812,2355,2989];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d35010"><h3 class="newo">Мелованная бумага 350 гр/м2 + Матовая ламинация с 2-х сторон</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [223,444,667,889,988,1894,2882,3705,4693];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [212,419,631,840,947,1812,2758,3541,4488];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [197,396,593,791,905,1729,2634,3376,4281];
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
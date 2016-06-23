
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
<h3 class="new" style="padding:6px;">297 × 420 А3</h3>
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
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4750,5778,11559,13584,15761,17909,31619];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4311,5339,10670,13338,15515,17661,31124];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3864,4892,9785,13091,15267,17415,30630];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d800"><h3 class="newo">Офсетная бумага 80 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td></tr></thead>
			 <tbody></tbody></table></div></div><div id="d900"><h3 class="newo">Мелованная бумага 90 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1384,2875,4193,6677];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1317,2796,4114,6600];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1251,2715,4037,6524];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1150"><h3 class="newo">Мелованная бумага 115 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1453,3019,3817,6739];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1383,2935,3755,6616];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1314,2851,3692,6494];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr><td align="center" width="1" nowrap=""><strong>Двусторонняя печать</strong></td></tr>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1453,3019,4389,7750];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1383,2935,4318,7608];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1314,2851,4246,7467];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1300"><h3 class="newo">Мелованная бумага 130 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1087,1450,2955,4772,8424];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1037,1384,2875,4693,8270];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [987,1317,2796,4615,8117];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1500"><h3 class="newo">Мелованная бумага 150 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [1667,3503,5776,10416];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d1700"><h3 class="newo">Мелованная бумага 170 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [2174,3953,6422,12844];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d2500"><h3 class="newo">Мелованная бумага 250 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3112,6225,7081,7081,8235,9270];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [2816,5632,6916,6916,8070,9106,16467];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [2519,5040,6752,6752,7905,8941,16138];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
                 </tr></tbody></table></div></div><div id="d3000"><h3 class="newo">Мелованная бумага 300 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3360,6724,7648,7648,8892,10013,18141];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3041,6082,7469,7469,8716,9835,17786];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [2720,5444,7293,7293,8536,9658,17428];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3500"><h3 class="newo">Мелованная бумага 350 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody>
             <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3167,3852,7706,9056,10507,11939,21079];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [2874,3559,7113,8892,10343,11774,20749];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [2576,3261,6523,8727,10178,11610,20420];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d35024"><h3 class="newo">Структурный картон типа "Лен" 350 гр/м2</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>5 дней</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4366,8725,10540,10540,16861,19245,37940];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3507"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевая ламинация по лицевой стороне</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4002,8004,9551,9551,14822,17505,32935];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3706,7411,8727,8727,13998,15857,31289];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3409,6816,8235,8235,13174,15034,29641];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3508"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевая ламинация с 2-х сторон</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [5203,10405,12416,19269,22757,42815];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d3509"><h3 class="newo">Мелованная бумага 350 гр/м2 + Матовая ламинация по лицевой стороне</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3750,7498,9059,9059,14491,16537,32605];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d35010"><h3 class="newo">Мелованная бумага 350 гр/м2 + Матовая ламинация с 2-х сторон</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [5928,11856,18937,18937,23681,28406,54014];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [5632,11263,17291,17291,22033,26761,50720];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4941,10473,15643,15643,20388,25113,44133];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d35021"><h3 class="newo">Мелованная бумага 350 гр/м2 + Глянцевый УФ-лак по лицевой стороне</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4002,8004,9551,9551,14822,17505,32935];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3706,7411,8727,8727,13998,15857,31289];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [3409,6816,8235,8235,13174,15034,29641];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr></tbody></table></div></div><div id="d35023"><h3 class="newo">Мелованная бумага 350 гр/м2 + Гибридный выборочный УФ-лак по лицевой стороне</h3>
		

		<table class="newprice" width="100%" oldclass="pages price">
		<thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td></tr></thead>
			 <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [5121,10244,12226,18969,22406,42156];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4742,9487,11171,1171,17916,20300,40048];
                     for (var i in array)
                         document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                 </script>
             </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                 <td>&nbsp;</td>
                 <script type="text/javascript">
                     var array = [4366,8725,10540,10540,16861,19245,37940];
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
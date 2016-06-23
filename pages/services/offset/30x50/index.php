
<body>

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
        <ul class="t_greyblock" onmousedown="return false" onselectstart="return false" style="margin-bottom:10px">
            <li><label class="t_switchable"><input id="allcheck" type="checkbox" checked="">
                    <div id="t_plot" onclick="allbox();">Все <br> плотности</div></label></li>
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
        <div id="d1630" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Самоклеящаяся бумага Reflatak</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">500</td>
                        <td nowrap="nowrap" >1 000</td>
                        <td nowrap="nowrap"  >2 000</td>
                        <td nowrap="nowrap" >3 000</td>
                        <td nowrap="nowrap" >4 000</td>
                        <td nowrap="nowrap" >5 000</td>
                        <td nowrap="nowrap" >10 000</td>
                        <td nowrap="nowrap" >15 000</td>
                        <td nowrap="nowrap" >20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td><td></td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td></tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 деня</td><td> </td>
                        <script type="text/javascript">
                            var array = [73,95,188,282,377,417,779,1196,1557,1973];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr>
                    <tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td><td> </td>
                        <script type="text/javascript">
                            var array = [66,87,171,260,345,390,723,1113,1445,1565];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
<!--

            <script type="text/javascript">
                var r = Math.round(2.50 * 1.45);
                document.write("<td align='center'><span id='b80'><a href='?height=30widht=50&p="+r+"'>" + r + "</a></span></td>");
                var r = Math.round(4.67 * 1.45);
                document.write("<td align='center'><span id='bb80'><a href='?height=30widht=50&p="+r+"'>" + r + "</a></span></td>");
                var r = Math.round(5.00 * 1.45);
                document.write("<td align='center'><span id='d80'><a href='?height=30widht=50&p="+r+"'>" + r + "</a></span></td>");
                var r = Math.round(9.33 * 1.45);
                document.write("<td align='center'><span id='dd80'><a href='?height=30widht=50&p="+r+"'>" + r + "</a></span></td>");

                var array = [10,18,15,28,53,63,];
                for (var i in array) {
                    var a = Math.round(array[i] * 1.45);
                    document.write("<td align='center'><a href=?height=30widht=50&p="+a+">"+ a + "</a></td>");
                }
            </script>
!-->
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 4 дня</td><td> </td>
                        <script type="text/javascript">
                            var array = [56,77,156,233,312,362,666,1029,1334,1695];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d800" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Офсетная бумага 80 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap" >1 000</td>
                        <td nowrap="nowrap" >2 500</td>
                        <td nowrap="nowrap" >5 000</td>
                        <td nowrap="nowrap" >10 000</td>
                        <td nowrap="nowrap" >15 000</td>
                        <td nowrap="nowrap" >20 000</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong>
                        </td><td></td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td></tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</strong></td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [32,50,92,168,227,286];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script> </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [30,48,88,160,216,272];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [28,45,83,151,204,257];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d900" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 90 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap" >1 000</td>
                        <td nowrap="nowrap">2 500</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">50 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [32,61,95,147,241,295,737]
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>

                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [30,58,92,145,236,290,727];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>

                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня
                        <td> </td>
                            <script type="text/javascript">
                                var array = [28,56,90,143,232,286,716];
                                for (var i in array){
                                    document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                                }
                            </script>
                    </tr></tbody></table></div></div><div id="d1150" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 115 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 500</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">50 000</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td><td></td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td></tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [34,64,86,139,222,276,691];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [32,61,85,137,219,273,683];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                        </td></tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [29,59,83,135,216,270,674];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    <tr><td align="center" width="1" nowrap=""><strong>Двусторонняя печать</strong></td><td></td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td></tr>
                    <tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>

                        <td> </td>
                        <script type="text/javascript">
                            var array = [34,64,100,159,256,318,794];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [32,61,97,157,252,314,785];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [29,59,95,155,248,310,775];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d1300" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 130 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">500</td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 500</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">50 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [26,35,66,107,173,278,345,863];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [25,33,64,105,170,273,341,853];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [23,31,61,104,168,270,337,843];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d1500" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 150 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 500</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">50 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [40,78,130,213,344,427,1068];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d1700" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 170 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 500</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">50 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [52,91,147,294,419,521,1336];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d2500" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 250 гр/м2</h3>

                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [51,104,155,185,204,371,575,704,908];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [47,93,140,167,185,334,519,630,815];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [41,81,122,149,167,296,463,555,722];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d3000" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 300 гр/м2</h3>

                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [112,168,200,220,400,621,761,981];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [51,101,151,180,200,361,561,681,881];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [44,88,132,161,180,320,501,600,780];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d3500" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 350 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">500</td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [48,63,125,188,251,278,519,797,1038,1315];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [44,58,114,173,230,260,482,742,963,1223];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [37,51,104,155,208,241,444,686,889,1130];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d35024" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Структурный картон типа "Лен" 350 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 5 дней</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [72,142,213,285,332,616,949,1233,1565];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d3507" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 350 гр/м2 + Глянцевая ламинация по лицевой стороне</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [67,134,200,266,296,555,853,1112,1408];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [60,122,184,245,278,519,797,1038,1315];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    <tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [56,111,167,223,260,482,742,963,1223];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d3508" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 350 гр/м2 + Глянцевая ламинация с 2-х сторон</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [87,173,260,347,385,722,1107,1446,1830];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d3509" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 350 гр/м2 + Матовая ламинация по лицевой стороне</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [62,122,184,245,286,530,816,1059,1345];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr></tbody></table></div></div><div id="d35010" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;"><h3 style="margin-bottom:0; border:solid 1px #666; border-bottom:0; background-color:#88212A;color:#fff;font-weight:900;padding:10px;" class="newo" >Мелованная бумага 350 гр/м2 + Матовая ламинация с 2-х сторон</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td>
                        <td nowrap="nowrap">1 000</td>
                        <td nowrap="nowrap">2 000</td>
                        <td nowrap="nowrap">3 000</td>
                        <td nowrap="nowrap">4 000</td>
                        <td nowrap="nowrap">5 000</td>
                        <td nowrap="nowrap">10 000</td>
                        <td nowrap="nowrap">15 000</td>
                        <td nowrap="nowrap">20 000</td>
                        <td nowrap="nowrap">25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 1 день</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [101,200,300,400,444,853,1297,1667,2112];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 2 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [95,188,285,378,426,815,1241,1593,2019];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
                        </script>
                    </tr><tr class="highlight">
                        <td nowrap="nowrap" align="center">печать за 3 дня</td>
                        <td> </td>
                        <script type="text/javascript">
                            var array = [89,179,266,356,408,778,1186,1519,1926];
                            for (var i in array){
                                document.write("<td class='gleb'>"+Math.round(array[i]*1.45)+"</td>");

                            }
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
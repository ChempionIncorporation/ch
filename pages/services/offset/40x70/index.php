<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0036)http://sborka.ua/?id=6&type=13#price -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<body>
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
        <h3 class="new" style="padding:6px;">40 × 70 Минивизитка</h3>
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
        <div id="d1630" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Самоклеящаяся бумага Raflatak</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td>
                        <td></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr class="highlight">
                        <td nowrap="nowrap" align="center">печать&nbsp;за&nbsp;<strong>1&nbsp;день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [154,192,386,578,771,830,1557,2387,3041,3854];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [138,177,357,533,713,779,1446,2225,2816,3707];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [125,164,326,489,653,726,1335,2061,2594,3557];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr></tbody></table></div></div><div id="d800" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Офсетная бумага 80 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [40,66,120,219,296,374];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [38,63,114,209,282,356];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [36,59,108,197,266,336];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr></tbody></table></div></div><div id="d900" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 90 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [47,89,141,219,357,438,1094];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [45,87,139,216,351,431,1079];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [43,83,134,213,344,425,1063];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr></tbody></table>
            </div>
        </div>
        <div id="d1150" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 115 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [49,94,128,205,330,410,1025];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [47,92,124,203,325,405,1013];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [45,87,123,201,321,400,1001];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr><td align="center" width="1" nowrap=""><strong>Двусторонняя печать</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [47,92,144,233,374,466,1164];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [40,66,120,296,374,726];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [45,87,142,231,368,459,1150];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d1300" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 130 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                    <tbody>
                    <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [39,52,99,160,257,413,512,1282];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>

                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [37,49,94,157,253,406,507,1266];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [35,46,92,154,251,400,500,1250];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d1500" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 150 гр/м2</h3>

                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [59,117,194,317,511,633,1585];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d1700" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 170 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >50 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [77,135,218,437,622,773,1983];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d2500" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 250 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [104,208,312,377,410,740,1151,1433];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [94,188,282,336,371,668,1038,1285];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [85,168,251,307,332,593,924,1136];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d3000" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 300 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr class="highlight">
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [113,225,336,406,443,800,1243,1547,1973];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [102,203,304,364,400,721,1121,1387,1761];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td><td align="center" class="small" style="white-space:nowrap;" width="1">на&nbsp;01&nbsp;04,&nbsp;Птн</td>

                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [91,181,272,332,358,641,997,1227,1547];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr></tbody></table></div></div><div id="d3500" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 350 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [103,128,257,385,514,553,1038,1591,2027,2569];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [93,118,238,355,475,519,964,1483,1877,2471];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [84,109,217,326,435,484,890,1374,1729,2371];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d35024" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Структурный картон типа "Лен" 350 гр/м2</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>5 дней</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [147,291,437,582,670,1233,1905,2403,3036];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d3507" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 350 гр/м2 + Глянцевая ламинация по лицевой стороне</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [134,268,400,534,593,1112,1706,2174,2767];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [124,248,371,494,559,1038,1596,2027,2569];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [114,227,341,455,524,964,1487,1877,2371];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d3508" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 350 гр/м2 + Глянцевая ламинация с 2-х сторон</h3>

                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [173,347,521,694,771,1446,2216,2826,3599];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d3509" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 350 гр/м2 + Матовая ламинация по лицевой стороне</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [125,250,375,501,576,1060,1636,2065,2608];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="d35010" style="background:#fff;margin-bottom:10px; border: 2px solid #E6E6E6;">
            <h3 class="newo" >Мелованная бумага 350 гр/м2 + Матовая ламинация с 2-х сторон</h3>


                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr style="background: rgba(189, 15, 26, 0.2)"><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 000</td><td nowrap="nowrap" >3 000</td><td nowrap="nowrap" >4 000</td><td nowrap="nowrap" >5 000</td><td nowrap="nowrap" >10 000</td><td nowrap="nowrap" >15 000</td><td nowrap="nowrap" >20 000</td><td nowrap="nowrap" >25 000</td></tr></thead>
                    <tbody><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>1 день</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [198,396,593,791,890,1706,2594,3360,4249];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>2 дня</strong>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [188,377,564,751,850,1631,2482,3211,4051];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr><tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [179,355,534,712,815,1556,2371,3063,3853];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
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
            <div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div id="datepicker_div"></div></body></html>F
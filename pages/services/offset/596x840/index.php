
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
        <h3 class="new" style="padding:6px;">596 × 840 А1</h3>
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
        <div id="d900"><h3 class="newo" >Мелованная бумага 90 гр/м2</h3>

            <div style="border:solid 1px #666; border-top:none;">
                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
                    <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [4347,8568];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr></tbody></table></div></div>
            <div style="border:solid 1px #666; border-top:none;">
                <table class="newprice" width="100%" oldclass="pages price">
                    <tbody></tbody></table></div></div><div id="d1300"><h3 class="newo" >Мелованная бумага 130 гр/м2</h3>

            <div style="border:solid 1px #666; border-top:none;">
                <table class="newprice" width="100%" oldclass="pages price">
                    <thead><tr><td align="center" style="width:150px;">Тираж</td><td></td><td nowrap="nowrap" >500</td><td nowrap="nowrap" >1 000</td><td nowrap="nowrap" >2 500</td></tr></thead>
                    <tbody><tr><td align="center" width="1" nowrap="nowrap"><strong>Односторонняя печать</strong></td></tr>
                    <tr class="highlight"><td nowrap="nowrap" align="center">печать за <strong>3 дня</strong></td>
                        <td>&nbsp;</td>
                        <script type="text/javascript">
                            var array = [3615,4820,10542];
                            for (var i in array)
                                document.write("<td>"+Math.round(array[i]*1.45)+"</td>");
                        </script>
                    </tr></tbody></table>
            </div>
    </div>
</div>
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
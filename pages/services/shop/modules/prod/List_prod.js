
$( document ).ready(function() {
    var mas = [];
    $('#pokupka').click(function() {
        var konstr = $('.konstr');
        mas[nn] = [];
        var mcount=1;

        sessionStorage.setItem('Name_'+nn, nname);
        if(typeof p_konstr_n !=="undefined") {
                mas[nn][0] = myImage+"|"+nname+"|Конструкция|"+p_konstr_p+'|'+konstr.val()+"|u";
        }
        if (typeof r_name !=="undefined") {
            for (var i = 0; i < r_price.length; ++i) {
                var count = ".p_razn_" + i;
                mas[nn][mcount] = myImage+"|"+nname+"|"+r_name[i]+"|"+ r_price[i]+"|"+$(count).val()+"|u";
                mcount++;
            }
        }
        if (typeof p_compl_n !== "undefined") {
            for (var i = 0; i <= p_compl_p.length; i++) {
                var count = ".p_compl_" + i;
                mas[nn][mcount] = myImage + "|" + nname + "|" + "Комл-ия: "+ p_compl_n[i] + "|" + p_compl_p[i] + "|" + 1 + "|" + $(count).is(':checked');
                //alert(i+","+mas[nn][mcount])
                mcount++;
            }
        }
        if (typeof p_format_n !== "undefined") {
            for (var i = 0; i <= p_format_p.length; i++) {
                var count = ".p_format_" + i;
                mas[nn][mcount] = myImage + "|" + nname + "|" + "Формат: "+ p_format_n[i] + "|" + p_format_p[i] + "|" + 1 + "|" + $(count).is(':checked');
                mcount++;
            }
        }
        if (typeof p_option_n !== "undefined") {
            for (var i = 0; i <= p_option_p.length; i++) {
                var count = ".p_option_" + i;
                mas[nn][mcount] = myImage + "|" + nname + "|" + "Опция: "+ p_option_n[i] + "|" + p_option_p[i] + "|" + 1 + "|" + $(count).is(':checked');
                mcount++;
            }
        }
        if (typeof p_poster_n !== "undefined") {
            for (var i = 0; i <= p_poster_p.length; i++) {
                var count = ".p_poster_" + i;
                mas[nn][mcount] = myImage + "|" + nname + "|" + "Постер: "+p_poster_n[i] + "|" + p_poster_p[i] + "|" + 1 + "|" + $(count).is(':checked');
                mcount++;
            }
        }

        //Запись всех товаров
        for(var i=0; i<= mas.length; i++){
            if(mas[nn][i] != undefined) {
                console.log(mas[nn][i]);
                sessionStorage.setItem("inf_"+nn+"_"+i,mas[nn][i]);

            }
        }

            //Просмотр всех значения в списке
        //for(var i=0; i<=maxVal; i++){
        //    for(var j=0; j<=maxVal; j++) {
        //        if(sessionStorage.getItem("inf_"+i+"_"+j) != null) {
        //            alert(sessionStorage.getItem("Name_"+i)+"+"+sessionStorage.getItem("inf_" + i + "_" + j))
        //        }
        //    }
        //}

        var tt = "",mega_count = 1;
        $('.ins').html("");
        $('.insert_row').html("");
console.log("--[Проверка "+nname+"]--");
        sessionStorage.setItem('MaxVal', maxVal);
        var mcount=0;
        for(var ni=0; ni<= maxVal; ni++){
            for(var i=0; i<= mas.length; i++) {
                var n = sessionStorage.getItem("inf_"+ni+"_"+i);
                if(n != null || n != undefined)
                {
                    var arr = n.split('|');
                    if(arr[1] != 'undefined' && arr[2] != 'undefined' && arr[3] != 'undefined' && arr[4] != 0)
                    {
console.log("--["+ni+","+i+") "+arr[1]+"|" + arr[2] +"|" +  arr[3] +"|" +arr[4] +"|" +arr[5]);
                        if(arr[5] == true)
                        {
                            var p = "Добавлено!</b></p>";
                        }else if(arr[5] == "u"){
                            var p = "<b>"+arr[4]+"</b>Ед.</p>";
                            if (p == "<b>1</b>Ед.</p>") {
                                p = "<b>Добавлено.</b>";
                            }
                        }
                        if(arr[5] != 'false' && arr[5] != 'undefined') {
                            if (arr[0] != tt) {
                                $('.ins').append("<p><b><img width='50' src='/img/upload/montaj/" + arr[0] + "'>" + arr[1] +
                                    "</b></p><p style='padding-left:50px;'>" + arr[2] +
                                    ": цена:<b>" + arr[3] * arr[4] + "грн.</b>(" + arr[3] + "/шт); - " + p);
                                tt = arr[0];
                                mcount++;
                            } else {
                                $('.ins').append("<p style='padding-left:50px;'>" + arr[2] +
                                    ": цена:<b>" + arr[3] * arr[4] + "грн.</b>(" + arr[3] + "/шт) - " + p);
                            }
                        }
                    }
                }
            }
        }
console.log("--[Проверка - окончена]--");
        //alert(mcount);
        sessionStorage.setItem("count", mcount);

        show();
    });
});
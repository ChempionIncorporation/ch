$(function () {
var ff = "",tt="";
    $('#pokupka').click(function () {
        var k_col = $('.konstr').val();
        var insert = $('.ins');
        var al = 0;
        var ft = "";
        insert.html(
            "<div class='row' style='padding:5px'>" +
            "<div class='col-xs-4 start-xs'>" +
            "<div class='box'><img src='" + image + "' width='180'></div>" +
            "</div>" +
            "<div class='col-xs'>" +
            "<div class='box center-xs'><b style='font-size:14pt;'>" + k_n + "</b></div>" +
            "<div class='box start-xs'>Цена конструкции: " + k_p + " грн.</div>" +
            "<div class='box start-xs'>Количество: " + k_col + " ед.</div>" +
            "<div class='box start-xs'>Итого: " + k_p * k_col + " ед.</div>" +
            "</div>" +
            "</div>");
        al = k_p * k_col + al;
        if (ft == "")
            ft = image + "|" + k_n + "|" + "Конструкция" + "|" +  k_p + "|" + k_col;
        else
            ft = image + "|" + k_n + "|"+ "Конструкция" + "|" + k_p + "|" + k_col + "†" + ft;
        var my_input = [];
        var inp = input.split("+");
        var list_name_input = "";
        for (var q = 0; q < inp.length; q++) {
            my_input[q] = $('#input_' + q).val();
            if (my_input[q] > 0) {
                ////alert(q+"|"+$('#input_'+q).val()+"|"+my_input[q]);
                var ii = inp[q].split("|");
                if (list_name_input !== "")//image+"|"+k_n + "|" +
                    list_name_input = image + "|" + k_n + "|" + ii[0] + "|" + ii[1] + "|" + my_input[q] + "†" + list_name_input;
                else
                    list_name_input = image + "|" + k_n + "|" + ii[0] + "|" + ii[1] + "|" + my_input[q];

                insert.append(
                    "<div class='row'>" +
                    "<div class='col-xs'>" +
                    "<div class='box'><b>" + ii[0] + "</b></div>" +
                    "</div>" +
                    "<div class='col-xs'>" +
                    "<div class='box'>Кол.: " + my_input[q] + "</div>" +
                    "</div>" +
                    "<div class='col-xs'>" +
                    "<div class='box'>" + ii[1] + " грн. за ед.</div>" +
                    "</div>" +
                    "<div class='col-xs'>" +
                    "<div class='box'>Итого: " + my_input[q] * ii[1] + " грн.</div>" +
                    "</div>" +
                    "</div>");
                al = (my_input[q] * ii[1]) + al;

            }
        }
        if (list_name_input != "")
            ft = list_name_input + "†" + ft;
        //
        var my_radio = [];
        var rad = radio.split("~");
        var ra = rad[1].split("+");
        var list_name_radio = "";
        for (var r = 0; r < ra.length; r++) {
            if ($("#radio_" + r).prop('checked')) {
                if (list_name_radio !== "")
                    list_name_radio = image + "|" + rad[0] + "|" + ra[r]+"|"+ 1 + "†" + list_name_radio;
                else
                    list_name_radio = image + "|" + rad[0] + "|" + ra[r] + "|" + 1;
                var ra2 = ra[r].split("|");
                insert.append(
                    "<div class='row'>" +
                    "<div class='col-xs-2'>" +
                    "<div class='box'><b>" + ra2[0] + "</b></div>" +
                    "</div>" +
                    "<div class='col-xs center-xs' >" +
                    "<div class='box'> (+" + ra2[1] + " грн.)</div>" +
                    "</div>" +
                    "</div>");
                al = ra2[1] * 1 + al;
            }
        }
        if (list_name_radio != "")
            ft = list_name_radio + "†" + ft;
        $('.price_res').html("<b>Общая стоимость: " + al + "</b>");
        //
        var my_check = [];
        var c = check.split("~");
        var che = c[1].split("+");
        var list_name_check = "";
        for (var e = 0; e < che.length; e++) {
            if ($("#check_" + e).prop('checked')) {
                if (list_name_check !== "")
                    list_name_check = image + "|" + c[0] + "|" + che[e]+ "|" + 1 + "†" + list_name_check;
                else
                    list_name_check = image + "|" + c[0] + "|" + che[e] + "|" + 1;
                var cq = che[e].split("|");
                insert.append(
                    "<div class='row'>" +
                    "<div class='col-xs-2'>" +
                    "<div class='box'><b>" + cq[0] + "</b></div>" +
                    "</div>" +
                    "<div class='col-xs center-xs' >" +
                    "<div class='box'> (+" + cq[1] + " грн.)</div>" +
                    "</div>" +
                    "</div>");
                al = cq[1] *1 + al;
            }
        }
        if (list_name_check != "")
            ft = list_name_check + "†" + ft;
        ff = ft;
        tt = al;
    });

    $('#incart').click(function(){

        my_count = sessionStorage.getItem("Count");
        my_count++;
        sessionStorage.setItem("Count", my_count);

        sessionStorage.setItem("Gleb_" + sessionStorage.getItem("Count"), ff);
        sessionStorage.setItem("APrice_" + sessionStorage.getItem("Count"), tt);

        var all_p = 0;
        for(var i=0; i< sessionStorage.getItem("Count"); i++){
            all_p = sessionStorage.getItem("APrice_"+i)*1 + all_p;
        }
        ShowCart();
    });
});
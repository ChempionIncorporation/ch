<?session_start();
include('../../../header.php');
?>
<style>
    .affix {
        top: 20px;
    }
</style>
<form action="cart/send">
    <div class="container">
        <div class="row top-xs" style="margin-top:100px;background: none">
            <div class="col-xs-3" style="margin-right:10px;">
                <div class="row" data-spy="affix" data-offset-top="180"
                     style="background: white; border:1px solid silver;width:250px">
                    <?
                    include_once("../../../profile/modules/left-bar.php");
                    ?>
                </div>
            </div>
            <div class="col-xs" style="background:white;padding:15px; border: 1px solid silver;margin-right:100px;">
                <div class="box" style="text-align:center">
                    <h2>Список заказа</h2>
                </div>
                <div class="box" style="padding:20px">
                    <!--                    -->
                    <script>
                        $(function(){
                            var mc = sessionStorage.getItem('Count');
                            var totalPrice = 0;
                            for (var i = 1; i <= mc; i++) {
                                var g = sessionStorage.getItem('Gleb_' + i);
                                var gl = g.split("†");
                                var gl_i = gl.length - 1;

                                var gleb = gl[gl.length - 1].split("|");
                                //Проверка на одинаковое имя, если присутствует тогда слд строка не пишеться .
                                var gg = "";
                                if (gg[i] != gleb[1]) {
                                    gg[i] = gleb[1];
                                }
                                if (gleb[1] != undefined || gleb[1] != null) {
                                    $('.Form_Products').append(
                                        "<div onclick='clo(" + i + ",2)' class='pod" + i + "' style='color:red;cursor:pointer'>Подтвердить</div>" +
                                        "<div class='mclo_" + i + "' style='border:1px solid #e8e8e8'>" +
                                        "<div class='row' style='padding:20px;'>" +//gl_img_name
                                        "<div class=col-xs-4>" +
                                        "<div class='box'><img src='" + gleb[0] + "' height='250px' width='200px'></div>" +
                                        "</div>" +
                                        "<div class='col-xs-8'>" +
                                        "<div onclick='clo(" + i + ",1)' class='close clo_" + i + "' style='font-weight:900;color:red;text-align:left'>X</div>" +
                                        "<div class=box' style=font-size:24pt;padding:10px>" + gleb[1] + "</div>" +
                                        "<div class=box>Цена конструкции: " + gleb[2] + " грн.</div>" +
                                        "<div class=box>Количество: " + gleb[3] + " ед.</div>" +
                                        "<div class=box>" +
                                        "<table border=1 class='fora_" + i + "' style='margin:15px;' width='100%'>" +
                                        "<tr>" +
                                        "<th>Наименование</th>" +
                                        "<th> Цена</th>" +
                                        "<th>Кол</th>" +
                                        "<th>Итого</th>" +
                                        "</tr>" +
                                        "</table>" +
                                        "</div>" +
                                        "<div class=bolt></div>" +
                                        "</div>" +
                                        "</div>" +
                                        "</div>");
                                    totalPrice = totalPrice * 1 + gleb[2] * 1;

                                    var otpri = gleb[2];
                                    for (var j = 0; j < gl.length - 1; j++) {
                                        var gleb_sub = gl[j].split("|");

                                        if (gleb_sub[4] == undefined || gleb_sub[4] == "") {
                                            gleb_sub[4] = 1;
                                        }
                                        $('.fora_' + i).append(
                                            "<tr>" +
                                            "<td>" + gleb_sub[2] + "</td>" +
                                            "<td>" + gleb_sub[3] + "</td>" +
                                            "<td>" + gleb_sub[4] + "</td>" +
                                            "<td>" + gleb_sub[3] * gleb_sub[4] + " грн.</td>" +
                                            "</tr>"
                                        );
                                        otpri = gleb_sub[3] * gleb_sub[4] + otpri * 1;
                                        totalPrice = gleb_sub[3] * gleb_sub[4] + totalPrice;
                                    }
                                    $(".pod" + i).css("display", "none");
                                }
                            }
                            $('.Form_Products').append(
                                "<div class='row  center-xs'>" +
                                "<div class=col-xs>" +
                                "<div class=box style='font-size:20pt'>Общий итого: " + totalPrice + " грн.</div>" +
                                "</div>" +
                                "</div>");
                        });
                        function clo(num, stad) {
                            if (stad == 1) {
                                $('.mclo_' + num).css("display", "none");
                                $('.pod' + num).css("display", "block");
                            }
                            if (stad == 2) {
                                $('.pod' + num).css("display", "none");
//                                alert("OK!");
                                sessionStorage.setItem("Gleb_" + num, null);
                            }
                        }
                    </script>
                    <!--                    -->
                    <div class="clo" style="font-weight:900;color: red;text-align:right"></div>
                    <div class="Form_Products"></div>
                    <div class="row" style="padding:20px;">
                        <div class="col-xs center-xs">
                            <div class="box">
                                <button type="submit" class="btn btn-large btn-block btn-info">Оформить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
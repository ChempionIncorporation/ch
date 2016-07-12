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
                <div
                     style=" ">
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
                                        "<div class=box>Цена конструкции: " + gleb[3] + " грн.</div>" +
                                        "<div class=box>Количество: " + gleb[4] + " ед.</div>" +
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
                                    totalPrice = totalPrice * 1 + gleb[3] * 1;

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
                                        totalPrice = gleb_sub[3] * gleb_sub[4] + totalPrice;
                                    }
                                    $(".pod" + i).css("display", "none");
                                }
                            }
                            if( totalPrice == 0)
                            {
                                $('.Form_Products').append(
                                    "<div class='row  center-xs'>" +
                                    "<div class=col-xs>" +
                                    "<div class=box style='font-size:20pt'>Корзина пустая!</div>" +
                                    "</div>" +
                                    "</div>");
                                $('#oformit').css("display", "none");
                            }else
                            {
                                $('.Form_Products').append(
                                    "<div class='row  end-xs'>" +
                                    "<div class=col-xs>" +
                                    "<div class=box style='font-size:16pt'>Общий итого: " + totalPrice + " грн.</div>" +
                                    "</div>" +
                                    "</div>");
                                $('#oformit').css("display", "block");
                            }
                            $('.clear-cart').css("display", "none");
                            $('#oformit').click(function(){
                                var fulltext = "";
                                for(var p=1;p<=mc;p++){
                                    var gleb = sessionStorage.getItem("Gleb_"+p);
                                    if(gleb != "null") {
                                        if(fulltext == "")
                                            fulltext = gleb;
                                        else
                                            fulltext = gleb +"+"+ fulltext;
                                    }
                                }
                                $('.somy_text').html("<img width='50px' src='/img/load.gif'>");
                                setTimeout(function () {
                                    $.ajax({
                                        url: "pages/services/shop/modules/offormit/l.php",
                                        context: document.body,
                                        method: "POST",
//                                        async: false,
                                        cache: false,
                                        dataType: 'html',
                                        data: { n: fulltext}
                                    }).done(function(data) {
                                        var po = $(data).filter('o').html();
//                                        alert(po);
                                        $('.somy_text').html(po);
                                        $('.clear-cart').css("display", "block");
                                    });
                                }, 800);
                            });
                            $('.clear-cart').click(function(){
                                for(var p=1;p<=mc;p++){
                                    sessionStorage.setItem("Gleb_"+p, null);
                                    sessionStorage.setItem("Count", 0);
                                }
                            });
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
                                sessionStorage.setItem("Count", sessionStorage.getItem("Count")-1);

                            }
                        }
                    </script>
                    <!-- Modal -->
                    <div class="modal fade" id="warn" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Ответ</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="somy_text center-xs"><img width='50px' src='/img/load.gif'></p>
                                </div>
                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-xs">
                                            <div class="box">
                                                <button type="button" class="btn btn-default clear-cart" data-dismiss="modal">Очистить корзину</button>
                                            </div>
                                        </div>
                                        <div class="col-xs">
                                            <div class="box">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Завершить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--                    -->
                    <div class="clo" style="font-weight:900;color: red;text-align:right"></div>
                    <div class="Form_Products"></div>
                    <div class="row" style="padding:20px;">
                        <div class="col-xs center-xs">
                            <div class="box">
                                <button type="button" id="oformit" data-toggle="modal" data-target="#warn" class="btn btn-large btn-block btn-info">Оформить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
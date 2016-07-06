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
                            var g = sessionStorage.getItem('Gleb');
//                            alert(g);
                            var gl = g.split("†");
                            var o = 0;
                            var i = gl.length - 1;
//                            for(var i = gl.length;i > 0;i--) {

                            var gleb = gl[4].split("|");
                            $('.Prod_name').html(
                                "<div class='row'>" +
                                "<div class='col-xs'>" +
                                "<div class='box'>" +
                                "<font style='font-size:25pt;margin:-60px;font-weight: 800;text-decoration: underline'>" + gleb[1] + "</font>" +
                                "</div>" +
                                "<div class='box'>" +
                                "<font style='font-size:15pt;margin-left:-20px'>Цена конструкции: " + gleb[2] + " грн.</font>" +
                                "</div>" +
                                "<div class='box'>" +
                                "<font style='font-size:15pt;margin-left:-20px'>Количество: " + gleb[3] + " ед.</font>" +
                                "</div>" +
                                "</div>" +
                                "</div>"
                            );

                            $('.Select_prod').append("<div class='row' style='border-bottom:1px solid silver'>" +
                                "<div class='col-xs-2'>" +
                                "<div class='box'>Ном.</div>" +
                                "</div>" +
                                "<div class='col-xs'>" +
                                "<div class='box'>Наименование</div>" +
                                "</div>" +
                                "<div class='col-xs'>" +
                                "<div class='box'>Цена</div>" +
                                "</div>" +
                                "<div class='col-xs'>" +
                                "<div class='box'>Количество</div>" +
                                "</div>" +
                                "</div>");
                            while (i >= 0) {
                                i--;
                                o++;
                                var gle = gl[i].split("|");
                                $('.Select_img').html("<img src='" + gle[0] + "' height='250px' width='265px' style='border-radius: 50%'>");

                                if (gle[4] == "" || gle[4] == undefined)
                                    var tt =
                                        "<div class='row'>" +
                                        "<div class='col-xs-2' style='border-right:1px solid silver'>" +
                                        "<div class='box'>" + o + "</div>" +
                                        "</div>" +
                                        "<div class='col-xs' style='border-right:1px solid silver'>" +
                                        "<div class='box'>" + gle[2] + "</div>" +
                                        "</div>" +
                                        "<div class='col-xs' style='border-right:1px solid silver'>" +
                                        "<div class='box'>" + gle[3] + "</div>" +
                                        "</div>" +
                                        "<div class='col-xs'>" +
                                        "<div class='box'>Добавлено</div>" +
                                        "</div>" +
                                        "</div>";
                                else

                                    var tt =
                                        "<div class='row'>" +
                                        "<div class='col-xs-2' style='border-right:1px solid silver'>" +
                                        "<div class='box'>" + o + "</div>" +
                                        "</div>" +
                                        "<div class='col-xs' style='border-right:1px solid silver'>" +
                                        "<div class='box'>" + gle[2] + "</div>" +
                                        "</div>" +
                                        "<div class='col-xs' style='border-right:1px solid silver'>" +
                                        "<div class='box'>" + gle[3] + "</div>" +
                                        "</div>" +
                                        "<div class='col-xs-5'>" +
                                        "<div class='box'>" + gle[4] + "</div>" +
                                        "</div>" +
                                        "</div>";

                                $('.Select_prod').append(tt);
                            }
//                            $.ajax({
//                                url: "l.php",
//                                type: 'get',
//                                data:{'val': c},
//                                response:'text',
//                                cache: false,
//                                async: false,
//                                success: function(data){
//                                   console.log("ok!");
//                                }
//                            });
                        });
                    </script>
                    <!--                    -->
                    <div class="row">
                        <div class="col-xs-5 start-xs">
                            <div class="box">
                                <div class="Select_img"></div>
                            </div>
                        </div>
                        <div class="col-xs">
                            <div class="box">
                                <div class="Prod_name"></div>
                            </div>
                            <div class="box">
                                <div class="Select_prod"
                                     style='padding:5px;border: 2px solid silver;overflow: hidden'></div>
                            </div>
                        </div>
                    </div>
                        <div class="zcart">
                        </div>
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
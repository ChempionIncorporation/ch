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
        <div class="row top-xs" style="background: none">
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
                            var g = sessionStorage.getItem("Gleb");
                            var gl = g.split("†");
                            for (var i = 0; i < gl.length; i++) {
                                var gle = gl[i].split("|");
                                for (var j = 0; j < gle.length; i++) {
                                    $('.zcart').append(gle[i] + "<br>");
                                }
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

    //                        $.get( "pages/services/shop/modules/offormit/l.php", { 'val': c} ).async(false).done(function() {
    //                        }).fail(function() {
    //                            v = "error";
    //                        }).complete(function(){
    //                            console.log( "Перенос - "+v);
    //                        });
                        });
                    </script>
                    <!--                    -->
                        <div class="zcart">
                        </div>
                    <div class="row">
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
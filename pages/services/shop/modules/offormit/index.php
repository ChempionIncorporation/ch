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
                <div class="row" data-spy="affix" data-offset-top="80"
                     style="background: white; border:1px solid silver;width:250px">
                    <?
                    include_once("../../../profile/modules/left-bar.php");
                    ?>
                </div>
            </div>
            <div class="col-xs"
                 style=";background:white;padding:15px; border: 1px solid silver;margin-right:100px;">
                <div class="box" style="text-align:center">
                    <h2>Список заказа</h2>
                </div>
                <div class="box" style="padding:20px">
                    <!--                    -->
                    <script>
                        $(function(){
                            maxVal = sessionStorage.getItem("MaxVal");
                            var p = null,ap=0;
                            var c = "";
                            for(var ni=0; ni<= maxVal; ni++) {
                                for (var i = 0; i <= maxVal; i++) {
                                    var n = sessionStorage.getItem("inf_" + ni + "_" + i);
                                    if(n != null && n != 'undefined') {
                                        var arr = n.split('|');
                                        if (arr[5] != undefined && arr[5] != 'false' && arr[4] != 0 ) {
                                            c = c +"+"+ n;
                                            console.log(c);
                                            ap = arr[3] * arr[4] + ap
                                            var fname = "", fphoto = "";
                                            if (arr[1] != p) {
                                                fphoto =
                                                    "<div class='row' style='padding:5px'>" +
                                                        "<div class='col-xs-3'>" +
                                                            "<div class='box'><img src='/img/upload/montaj/" + arr[0] + "' width='150px'></div>" +
                                                        "</div>";
                                                fname =
                                                        "<div class='col-xs'>" +
                                                            "<div class='box'>"+
                                                                "<h3>"+arr[1]+"</h3><hr>" +
                                                            "</div>";
                                                var scr =
                                                        "<div class='box'>" +
                                                            "<div class='row middle-xs'>" +
                                                                "<div class='col-xs-0'>" +
    //                                                                "<div class='box'>" + arr[2] + "</div>" +
                                                                "</div>" +
                                                                "<div class='col-xs start-xs'>" +
                                                                    "<div class='box'>Цена: <b>" + arr[3] + " грн.</b></div>" +
                                                                    "<div class='box'>Кол: <b>" + arr[4] + "</b>ед.</div>" +
                                                                "</div>"+
                                                                "<div class='col-xs-4 end-xs'>"+
                                                                    "<div class='box'>Сумма: <b>" + arr[3] * arr[4] + " грн.</b></div>"+
                                                                "</div>"+
                                                            "</div>"+
                                                        "</div>";
                                                console.log("arr0: " + arr[0] + "," + "arr1: " + arr[1] + "," + "arr2: " + arr[2] + ",arr3: " +
                                                    arr[3] + "," + "arr4: " + arr[4] + "," + "arr5: " + arr[5]);
                                                p = arr[1];
                                                console.log(ni+","+i);


    //                                            console.log()(sessionStorage.getItem('inf_'+ni+"_"+i)+i+ni);
                                            } else {
    //                                            console.log("arr2: " + arr[2] + ",arr3: " + arr[3] + "," + "arr4: " + arr[4] + "," + "arr5: " + arr[5]);
                                                fname = "";
                                                fphoto = "";
                                                var scr =
                                                    "<div class='box'>" +
                                                    "<div class='row start-xs middle-xs'>" +
                                                    "<div class='col-xs-2'></div>" +
                                                    "<div class='col-xs-4'>" +
                                                    "<div class='box'>" + arr[2] + "</div>" +
                                                    "</div>" +
                                                    "<div class='col-xs-3'>" +
                                                    "<div class='box'>Цена: <b>" + arr[3] + " грн.</b></div>" +
                                                    "<div class='box'>Кол: <b>" + arr[4] + "</b>ед.</div>" +
                                                    "</div>"+
                                                    "<div class='col-xs-3'>"+
                                                    "<div class='box'>Сумма: <b>" + arr[3] * arr[4] + " грн.</b></div>"+
                                                    "</div>"+
                                                    "</div>"+
                                                    "</div>";
                                            }
                                            $('.zcart').append(fphoto + fname + scr);
                                        }
                                    }
                                }
                            }

                            var itog = "<div class='row' style='padding:20px 0px'>" +
                                "<div class='col-xs end-xs'>" +
                                "<div class='box'>Итого:<b>" +ap +" грн.</b></div>" +
                                "</div>" +
                                "</div>";
                            $('.zcart').append(itog);
                            var v = "";

                            $.ajax({
                                url: "pages/services/shop/modules/offormit/l.php",
                                type: 'get',
                                data:{'val': c},
                                response:'text',
                                cache: false,
                                async: false,
                                success: function(data){
                                   console.log("ok!");
                                }
                            });
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
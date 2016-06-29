<?include_once('functions.php');?>
<script>
    function show()
    {
        $.ajax({
            url: "view.php",
            cache: false,
            async: false,
            success: function () {
                //sessionStorage.getItem('count')
//                alert(sessionStorage.getItem("count"))
                if(sessionStorage.getItem("count") >0){
                    $(".box_col").html(sessionStorage.getItem('count'));
                    $(".box_rp").html(sessionStorage.getItem('result_price'));
                    $(".insert").css("display", "block");
//                    alert("Show() - OK!");

                    for(var ni=0; ni<=maxVal; ni++) {
                        for(var i=0; i<= maxVal; i++) {
                            var n = sessionStorage.getItem("inf_" + ni + "_" + i);
                            if (n != null || n != undefined) {
                                var arr = n.split('|');
                                if (arr[2] != 0) {
                                    $('.inser_row').append(arr[1]);
                                }
                            }
                        }
                    }

                }else{
                    $(".insert").css("display", "block");
                }
            }
        });
    }
    $(document).ready(function() {
        show();
    });
</script>
<?
if(isset($_GET['name']))
    print "<script>alert('".$_GET['name']."')</script>";

?>

<div class="insert" style="padding:10px;color:black">
    <h3 style="text-align: center;background: #7e212a;padding:10px;color: white;">
        <b>Корзина</b>
    </h3>
    <div class='row middle-xs' style="background:white;border: 1px solid #e8e8e8;padding:10px;font-weight:700;margin-bottom:5px">
        <div class="col-xs">
            <div class="box">
                Количество продукций
            </div>
        </div>
        <div class="col-xs">
            <div class="box box_col">
                <?if(isset($_GET['box_col']))
                    print $_GET['box_col'];?>
            </div>
        </div>
    </div>
    <div class='row middle-xs' style="background:white;border: 1px solid #e8e8e8;padding:10px;font-weight:700">
        <div class="col-xs">
            <div class="box">
                Общая стоимость
            </div>
        </div>
        <div class="col-xs-3">
            <div class="box box_rp">
                <?if(isset($_GET['box_rp']))
                    print $_GET['box_rp'];?>
            </div>
        </div>
    </div>
    <div class='row middle-xs' style="margin-top:10px;">
        <div class="col-xs">
            <div class="box">
                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Список</button>
            </div>
        </div>
        <div class="col-xs">
            <div class="box">
                <button type="button" class="btn btn-success" data-dismiss="modal">Оформить заказ</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myList" role="dialog">
    <div class="modal-dialog">
        <!--CONTENT-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Список</h4>
            </div>
            <div class="modal-body">
                <div class="insert_row">
<!--                   Добавить список -->
                </div>
            </div>
            <div class="modal-footer">
                <div class="row middle-xs">
                    <div class="col-xs">
                        <div class="box res_summ" style="text-align:left;">
                            <!-- Общая сумма !-->
                            <!--                            <o style="font-size:10pt" class="price_res"></o>-->
                        </div>
                    </div>
                    <div class="col-xs center-xs">
                        <div class="box">
                            <button type="button" class="btn btn-danger" disabled>Оформить заказ</button>
                        </div>
                    </div>
                    <div class="col-xs center-xs">
                        <div class="box">
                            <button type="button" class="btn btn-success btn_cart" data-dismiss="modal">Добавить в корзину</button>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="box">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- -->


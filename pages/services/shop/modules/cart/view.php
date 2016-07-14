<?include_once('functions.php');?>
<script>
    function ed()
    {
        $(function(){
        $('.body-my').html("");
        $('.box-r').html("");
        var price_k = 0;
        var price_all =0;
        for(var i =1; i<= sessionStorage.getItem("Count"); i++)
        {
            var full = sessionStorage.getItem("Gleb_"+i);
            var ar = full.split("†");

            var aa = ar[ar.length-1].split("|");
            if(aa[1] !== undefined) {
                $('.body-my').append(
                    "<div class='row middle-xs' style='margin:10px'>" +
                    "<div class='col-xs-4 start-xs' style='border-right:1px solid rgba(205, 205, 205, 0.3)'>" +
                    "<div class=box>" +
                    "<img src='" + aa[0] + "' width='250px' height=350px'>" +
                    "</div>" +
                    "</div>" +
                    "<div class=col-xs>" +
                    "<div class=box>" +
                    "<h2>" + aa[1] + "</h2>" +
                    "</div>" +
                    "<div class='box start-xs'>" +
                    "<h4>" + aa[2] + ": " + aa[3] + " грн.</h4>" +
                    "</div>" +
                    "<div class='box start-xs'>" +
                    "<h4>Количество: " + aa[4] + " ед.</h4>" +
                    "</div>" +
                    "<div class='box start-xs'>" +
                    "<h4>Итого: " + aa[3]*aa[4] + " ед.</h4>" +
                    "</div>" +
                    "<table class='table table-hover box-r'><thead>" +
                    "<tr  class='danger'>" +
                    "<td style='border-radius: 10px 0px 0px 0px'>Наименование</td>" +
                    "<td>Цена</td>" +
                    "<td>Количество</td>" +
                    "<td>Итого</td>" +
                    "</tr>" +
                    "</thead>" +
                    "<tbody class='m_" + i + "'>" +
                    "</tbody></table>" +
                    "</div>" +
                    "</div>"
                );
                price_k = aa[3] * aa[4] + price_k * 1;

                for (var j = 0; j < ar.length - 1; j++) {
                    var arr = ar[j].split("|");
                    $('.m_' + i).append("<tr>" +
                        "<td style='background: #f2dede'>" +
                        arr[2] +
                        "</td>" +
                        "<td>" +
                        arr[3] +
                        " грн.</td>" +
                        "<td>" +
                        arr[4] +
                        " ед.</td>" +
                        "<td>" +
                        arr[4] * arr[3] +
                        " грн.</td>" +
                        "</tr>");
                    price_all = arr[3] * arr[4] + price_all * 1;
                }
            }
        }

        var all =price_k+price_all;
        $('.itog').html(
            "<div class='row'>" +
                "<div class=col-xs>" +
                    "<div class='box'>"+
                        "Конструкции:"+
                    "</div>" +
                "</div>" +
                "<div class=col-xs>" +
                    "<div class='box'>"+
                        price_k+" грн."+
                    "</div>" +
                "</div>"+
            "</div>"+
            "<div class='row'>" +
                "<div class=col-xs>" +
                    "<div class='box'>"+
                        "Опции:"+
                    "</div>" +
                "</div>" +
                "<div class=col-xs>" +
                    "<div class='box'>"+
                    price_all+" грн."+
                    "</div>" +
                "</div>"+
            "</div>"+
            "<div class='row'>" +
                "<div class=col-xs>" +
                    "<div class='box'>"+
                    "Итого:"+
                    "</div>" +
                "</div>" +
                "<div class=col-xs>" +
                    "<div class='box'><b>"+all+"</b> грн.</div>" +
                "</div>"+
            "</div>");
        });
    }
</script>
<div id="cart" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Это ваша кoрзина</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xs">
                        <div class="box body-my">
                            ss
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <div class="row middle-xs">
                    <div class="col-xs-4 start-xs">
                        <div class="box itog" style="border-right:1px solid rgba(205, 205, 205, 0.3);margin-right:-20px;margin-left:20px">

                        </div>
                    </div>
                    <div class="col-xs start-xs">
                        <div class="box">
                            <button type="button" class="btn btn-danger" onclick="window.location.href = '/cart'" data-dismiss="modal">Оформить заказ</button>
                        </div>
                    </div>
                    <div class="col-xs end-xs">
                        <div class="box">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Продолжить</button>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>
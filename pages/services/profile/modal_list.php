<div id="z_list" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title tt">Modal Header</h4>
            </div>
        <div class="modal-body">

            <script>
                var id = <?= json_encode($id)?>;
                var date = <?= json_encode($date)?>;
                var fmt = <?= json_encode($fmt)?>;

                function k(c, id) {
                    $('.tt').html('Список по номеру: '+ id);
                    $('.bo').html("");
                    $('.bio').html("");
                    var itog = 0;
                    var arr = fmt[c].split("+");
                    for (var i = 0; i < arr.length; i++) {
                        var a = arr[i].split("†");
                        var qq = a[a.length - 1].split("|");
                        $('.bo').append(
                            "<div class=row style='padding:10px;'>" +
                            "<div class=col-xs-2>" +
                            "<div class=box><img width='120px' height=170px src='" + qq[0] + "'></div>" +
                            "</div>" +
                            "<div class='col-xs start-xs'>" +
                            "<div class=box style='font-size:16pt'>" + qq[1] + "</div>" +
                            "<div class=box>" + qq[2] + ": " + qq[3] + " грн.</div>" +
                            "<div class=box>Количество: " + qq[4] + " ед.</div>" +
                            "<table class='bio_" + i + "' border=1 width=70% style='padding:20px'>" +
                            "<tr>" +
                            "<td>Наименование</td>" +
                            "<td>Цена за штуку</td>" +
                            "<td>Количество</td>" +
                            "<td>Итого</td>" +
                            "</tr>" +
                            "</table>" +
                            "</div>" +
                            "</div>");
                        itog = qq[3] * qq[4] + itog;
                        for (var j = 0; j < a.length - 1; j++) {
                            var ar = a[j].split("|");
                            if(sessionStorage.getItem("group") == "admin") {
                                $('.bio_' + i).append(
                                    "<tr>" +
                                    "<td>" + ar[2] + "</td>" +
                                    "<td>" + ar[3] + "</td>" +
                                    "<td><input type='text' class='col_"+id+"_"+i+"_"+j+"' onkeyup='ed("+id+","+i+","+j+","+c+")' value='" + ar[4] + "'></td>" +
                                    "<td>" + ar[3] * ar[4] + "</td>" +
                                    "</tr>");
                            }else {
                                $('.bio_' + i).append(
                                    "<tr>" +
                                    "<td>" + ar[2] + "</td>" +
                                    "<td>" + ar[3] + "</td>" +
                                    "<td>" + ar[4] + "</td>" +
                                    "<td>" + ar[3] * ar[4] + "</td>" +
                                    "</tr>");
                            }

                            itog = ar[3] * ar[4] + itog;
                        }
                    }
                    $('.itog').html("Итого: <b>" + itog + "</b> грн.");
                }

                function ed(id,i,j,c){
                    var col = $('.col_'+id+'_'+i+'_'+j).val();
                    var arr = fmt[c].split("+");
                    var Ftext = "";
                    for (var i1 = 0; i1 < arr.length; i1++) {
                        var a = arr[i1].split("†");
                        for (var j1 = 0; j1 < a.length - 1; j1++) {
                            var ar = a[j1].split("|");
                            if(i1 == i) {
                                if (j1 == j) {

                                    console.log(ar[2]);
                                }
                            }
                        }
                    }


//                    console.log(id+","+i+","+j+","+col+"="+arr[0]);
                }
            </script>
            <div class="bo"></div>
        </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs start-xs">
                        <div class="box">
                            <div class="itog">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="box">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Админ панель-->
<div id="adminList" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title tt">Modal Header</h4>
            </div>
            <div class="modal-body">
                <script>
                    var id = <?= json_encode($id)?>;
                    var date = <?= json_encode($date)?>;
                    var fmt = <?= json_encode($fmt)?>;

                    function abtn(c) {
                        $('.form_admin').html("");
                        $('.bio').html("");
                        var itog = 0;
                        var arr = fmt[c].split("+");
                        for (var i = 0; i < arr.length; i++) {
                            var a = arr[i].split("†");
                            var qq = a[a.length - 1].split("|");
                            $('.form_admin').append(
                                "<div class=row style='padding:10px;'>" +
                                "<div class=col-xs-2>" +
                                "<div class=box><img width='120px' height=170px src='" + qq[0] + "'></div>" +
                                "</div>" +
                                "<div class='col-xs start-xs'>" +
                                "<div class=box style='font-size:16pt'>" + qq[1] + "</div>" +
                                "<div class=box>" + qq[2] + ": " + qq[3] + " грн.</div>" +
                                "<div class=box>Количество: " + qq[4] + " ед.</div>" +
                                "<table class='bio_" + i + "' border=1 width=70% style='padding:20px'>" +
                                "<tr>" +
                                "<td>Наименование</td>" +
                                "<td>Цена за штуку</td>" +
                                "<td>Количество</td>" +
                                "<td>Итого</td>" +
                                "</tr>" +
                                "</table>" +
                                "</div>" +
                                "</div>");
                            itog = qq[3] * qq[4] + itog;
                            for (var j = 0; j < a.length - 1; j++) {
                                var ar = a[j].split("|");
//                                if (ar[2] != undefined && arr[1] != 'underfined') {
//                                    alert(ar[j])
                                if(sessionStorage.getItem("group") == "admin"){
                                    $('.bio_' + i).append(
                                        "<tr>" +
                                        "<td>" + ar[2] + "</td>" +
                                        "<td>" + ar[3] + "</td>" +
                                        "<td><input type=number class='col_"+id+"_"+i+"_"+j+"' onkeyup='ed("+id+","+i+","+j+")' value='" + ar[4] + "'></td>" +
                                        "<td>" + ar[3] * ar[4] + "</td>" +
                                        "</tr>");
                                }else{
                                $('.bio_' + i).append(
                                    "<tr>" +
                                    "<td>" + ar[2] + "</td>" +
                                    "<td>" + ar[3] + "</td>" +
                                    "<td>" + ar[4] + "</td>" +
                                    "<td>" + ar[3] * ar[4] + "</td>" +
                                    "</tr>");
                                }
                                itog = ar[3] * ar[4] + itog;
//                                }
                            }
                        }
                        $('.itog').html("Итого: <b>" + itog + "</b> грн.");

                    }
                </script>
                <div class="form_admin"></div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs start-xs">
                        <div class="box">
                            <div class="itog">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="box">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>